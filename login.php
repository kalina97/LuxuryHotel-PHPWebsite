<?php

session_start();

include "modules/konekcija.php";

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	// upit ka bazi
	$upit = "SELECT k.*, u.naziv FROM korisnik k INNER JOIN uloga u ON k.uloga_id = u.id WHERE email = :email AND lozinka= :password AND aktivan = 1";

	$priprema = $konekcija->prepare($upit);

	$priprema->bindParam(":email", $email);

	$priprema->bindParam(":password", $password);

	try {
		$priprema->execute();

		if($priprema->rowCount() == 1){
			echo "<h2>Postoji korisnik u bazi !</h2>";
            
			$korisnik = $priprema->fetch(); // tacno 1 red
			

			$_SESSION['korisnik'] = $korisnik;
			
			if(isset($_SESSION['korisnik'])){
			  if($_SESSION['korisnik']->naziv == "admin"){	
				//var_dump($korisnik);
				//var_dump($_SESSION['korisnik']);
				header ("Location: admin.php");
			
			  }
			  else{
				  header ("Location: index.php");
				  
			  }
			  
			}
			else{
				
				header ("Location: index.php");
			}
			

			

		} else {
			echo "<h2 class='greskeForma'>Morate se prvo registrovati na sajt !!!</h2>";
			
		}
	}
	catch(PDOException $x){
		echo $x->getMessage();
	}

}
include("views/head.php");
include("views/nav.php");
include("views/login.php");
include("views/footer.php");
