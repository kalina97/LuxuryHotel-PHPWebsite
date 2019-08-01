<?php 

if(isset($_POST['izmenires'])){
    include "konekcija.php";
    $id = $_POST['skriveno'];
    $datum1 = $_POST['date1'];
    $datum2 = $_POST['date2'];
    $email = $_POST['email'];
    $gosti = $_POST['guests'];
	$reEmail = "/^[\w]+\@gmail\.com$/";
      
	
	$tipsobe=$_POST['ddlType'];
    $imesobe = $_POST['ddlRoom'];
    $komentar=$_POST['message'];
    $errors = [];
    
	$dolazak=strtotime($datum1);
	$odlazak=strtotime($datum2);
	
	
	
	if(!$email) {
        array_push($errors, "Polje za email je obavezno.");
    } elseif(!preg_match($reEmail, $email)) {
        array_push($errors, "Polje za email nije dobrog formata.");
    }
	
	if($odlazak < $dolazak){
		array_push($errors, "Dolazak mora biti pre odlaska");
		
	}
	
	
	if(isset($_POST['guests']) && $_POST['guests'] == '0') { 
  array_push($errors, "Morate izabrati broj gostiju!");
}
	
	
if(isset($_POST['ddlType']) && $_POST['ddlType'] == '0') { 
  array_push($errors, "Morate izabrati tip sobe!");
}	
	

if(isset($_POST['ddlRoom']) && $_POST['ddlRoom'] == '0') { 
  array_push($errors, "Morate izabrati ime sobe!");
}	
	
	
	
	if($komentar == ""){
		array_push($errors, "Morate uneti neki komentar!");
	}
	
	
	
	
    

    if(count($errors)) {
        $code = 422;
        $data = $errors;
    
    $upit = "UPDATE rezervacija SET datumOd=:dat1, datumDo=:dat2, brojGostiju=:guests,tipsobe=:tip, komentar=:komentar, idHotel=1,imeSobe=:soba,email=:mail WHERE idRez=:id";
    $prepare=$konekcija->prepare($upit);
    $prepare->bindParam(":dat1", $datum1);
    $prepare->bindParam(":dat2", $datum2);
    $prepare->bindParam(":guests", $gosti);
    $prepare->bindParam(":tip", $tipsobe);
    $prepare->bindParam(":komentar", $komentar);
	$prepare->bindParam(":soba", $imesobe);
	$prepare->bindParam(":mail", $email);
	
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