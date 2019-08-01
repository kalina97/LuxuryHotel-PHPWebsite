<?php 

if(isset($_POST['izmeni'])){
    include "konekcija.php";
    $id = $_POST['skriveno'];
    $username = $_POST['username'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $aktivan = $_POST['aktivan'];
    $akt = settype($aktivan,'bit');
	$reEmail = "/^[\w]+\@gmail\.com$/";
      $reUsername = "/^[a-z0-9\_]{4,15}$/";
    $reFirstName = "/^[A-Z][a-z]{2,9}$/";
	$reLastName = "/^[A-Z][a-z]{2,14}$/";
	
	
    $uloga = $_POST['uloga'];
    
    $errors = [];
    $reuloga = "/^[12]$/";
	
	
	if(!$firstName) {
        array_push($errors, "Polje za ime je obavezno.");
    } elseif(!preg_match($reFirstName, $firstName)) {
        array_push($errors, "Polje za ime nije dobrog formata.");
    }

    if(!$lastName) {
        array_push($errors, "Polje za prezime je obavezno.");
    } elseif(!preg_match($reLastName, $lastName)) {
        array_push($errors, "Polje za prezime nije dobrog formata.");
    }
    
	 if(!$username) {
        array_push($errors, "Polje za korisnicko ime je obavezno.");
    } elseif(!preg_match($reUsername, $username)) {
        array_push($errors, "Polje za korisnicko ime nije dobrog formata.");
    }
	
	
	if(!$email) {
        array_push($errors, "Polje za email je obavezno.");
    } elseif(!preg_match($reEmail, $email)) {
        array_push($errors, "Polje za email nije dobrog formata.");
    }
	
	
	
	
    if(!$reuloga) {
            array_push($errors, "Polje za ulogu je obavezno.");
    } elseif(!preg_match($reuloga, $uloga)) {
        array_push($errors, "Polje za ulogu nije dobrog formata.");
    }
    if(!$aktivan) {
            array_push($errors, "Polje za aktivan je obavezno.");
    } elseif(!preg_match($reuloga, $aktivan)) {
        array_push($errors, "Polje za aktivan nije dobrog formata.");
    }


    if(count($errors)) {
        $code = 422;
        $data = $errors;
    
    $upit = "UPDATE korisnik SET ime=:ime, prezime=:prezime, email=:email,aktivan=:aktivan, korisnicko_ime=:username, uloga_id=:uloga WHERE id=:id";
    $prepare=$konekcija->prepare($upit);
    $prepare->bindParam(":ime", $firstName);
    $prepare->bindParam(":prezime", $lastName);
    $prepare->bindParam(":email", $email);
    $prepare->bindParam(":aktivan", $akt);
    $prepare->bindParam(":username", $username);
    $prepare->bindParam(":uloga", $uloga);
	$prepare->bindParam(":id", $id);
	
    try{
        $uspesno=$prepare->execute();
       echo "Uspesno";
		header("Location: ../admin.php");
       
    }
    catch(PDOException $e){
		echo $e->getMessage();
	}  
    
    
}
}