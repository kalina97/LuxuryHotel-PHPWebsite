<?php
session_start();
$page = "";


if(isset($_GET['page'])){
	$page = $_GET['page'];
}


include "views/head.php";


include "views/nav.php";


  

switch($page){
	case "home":
		include "views/pocetna.php";
		break;
	case "login":
		include "views/login.php";
		break;
		
		case "logout":
		include "views/logout.php";
		break;
		
		
	case "register":
		include "views/register.php";
		break;
		case "autor":
		include "views/author.php";
		break;
		
		case "singleRoom":
		include "views/singleR.php";
		break;
		
		case "doubleRoom":
		include "views/doubleR.php";
		break;
		
		case "tripleRoom":
		include "views/tripleR.php";
		break;
		
		case "informacije":
		include "views/informations.php";
		break;
		
		case "rezervacije":
		include "views/reservacije.php";
		break;
		
		case "vesti":
		include "views/blog.php";
		break;
	default:
		include "views/pocetna.php";
		break;
}

include "views/footer.php";