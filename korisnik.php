<?php
	session_start();

	if(isset($_SESSION['korisnik'])){
		$sessija = $_SESSION['korisnik'];

		if($sessija->naziv != "korisnik"){
			header("Location: index.php");
		}
	}else {
		
		header("Location: login.php");
	}
?>
<h1>Korisnik</h1>