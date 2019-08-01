<?php
header("Content-type: application/json");

include "konekcija.php";

$code = 404;
$data = null;

if(isset($_POST['send'])) {
   
    $prviDat = $_POST['dat1'];
    $drugiDat = $_POST['dat2'];
   
    $email = $_POST['email'];
   $imeSobe = $_POST['sobaIme'];
    $errors = [];
	$reEmail = "/^[\w]+\@gmail\.com$/";
    $tipSobe=  $_POST['sobaTip'];
	$komentar=$_POST['koment'];
	$gosti=$_POST['gostiBr'];
    
    if(!$prviDat) {
        array_push($errors, "Polje za datum dolaska je obavezno.");
    } elseif(empty($prviDat)) {
        array_push($errors, "Polje za datum dolaska je obavezno");
    }

    
	if(!$drugiDat) {
        array_push($errors, "Polje za datum odlaska je obavezno.");
    } elseif(empty($drugiDat)) {
        array_push($errors, "Polje za datum odlaska je obavezno");
    }
    
	
	
	if(!$komentar) {
        array_push($errors, "Polje za komentar je obavezno.");
    } elseif(empty($komentar)) {
        array_push($errors, "Polje za komentar je obavezno");
    }
	 
	
	
	if(!$email) {
        array_push($errors, "Polje za email je obavezno.");
    } elseif(!preg_match($reEmail, $email)) {
        array_push($errors, "Polje za email nije dobrog formata.");
    }
	
	
	
	if(isset($_POST['ddlRoom']) && $_POST['ddlRoom'] == '0') { 
     array_push($errors, "Izaberite ime sobe"); 
  } 
  
  
	if(isset($_POST['ddlType']) && $_POST['ddlType'] == '0') { 
     array_push($errors, "Izaberite tip sobe"); 
  } 
  
  
  
	if(isset($_POST['guests']) && $_POST['guests'] == '0') { 
     array_push($errors, "Izaberite broj gostiju"); 
  } 
	
    

    if(count($errors)) {
        $code = 422;
        $data = $errors;
    } else {
         $upit = "INSERT into rezervacija (datumOd, datumDo,brojGostiju,email,tipsobe,komentar,idHotel,imeSobe)
          values (:datum1,:datum2,:gostiBr,:mail,:tip,:com,1,:imesobe)";
        $statement = $konekcija->prepare($upit);
        $statement->bindParam(":datum1", $prviDat);
        $statement->bindParam(":datum2", $drugiDat);
        $statement->bindParam(":gostiBr", $gosti);
		 $statement->bindParam(":mail", $email);
         $statement->bindParam(":tip", $tipSobe);
		  $statement->bindParam(":imesobe", $imeSobe);
		 $statement->bindParam(":com", $komentar);
           
		
        try {
            // insert u bazu
            $code = $statement->execute() ? 201 : 500;


        } catch(PDOException $e) {
            $code = 409;
            $data = $e->getMessage();
        }
    }


}
http_response_code($code);

echo json_encode($data);
