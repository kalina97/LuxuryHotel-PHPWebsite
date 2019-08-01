<?php

include('modules/konekcija.php');
if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $upit = "UPDATE anketa SET rezultat = rezultat + 1  WHERE idAnketa = :id;";
	
    $priprema = $konekcija->prepare($upit);

				$priprema->bindParam(":id", $id);

				$rez = $priprema->execute();
   	 
  
		



}
			
			

?>
