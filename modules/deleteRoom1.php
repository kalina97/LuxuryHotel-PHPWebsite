<?php
session_start();
header("Content-type: application/json");

//brisanje jednokrevetnih soba iz baze




// Statusni kod za vracanje klijentu kao rezultat AJAX zahteva
$statusCode = 404;


// Ukoliko nije POST zahtev

if($_SERVER['REQUEST_METHOD'] != "POST"){
    echo "Ne mozete pristupiti ovoj stranici!";
}

// Dohvatanje ID korisnika, prosledjenog putem AJAX-a

if(isset($_POST['id'])){
     	
    $id = $_POST['id'];
   include "konekcija.php";
    
	
    $upit = $konekcija->prepare("DELETE FROM jednokrevetna WHERE idJed = :id;");
    $upit->bindParam(':id', $id);

    try{
        $rezultat = $upit->execute();
         
        if($rezultat){
		
            $statusCode = 204;
        } else {
            $statusCode = 500;
        }
    }
    catch(PDOException $e){
        $statusCode = 500;
    }
}

// Vracanje statusnog koda ka klijentu (JS)
http_response_code($statusCode);






