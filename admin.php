<?php
session_start();
	include "modules/konekcija.php";
	include "views/head.php";
    include "views/nav.php";




	/*
	if(!isset($_SESSION['korisnik'])){
		header("Location: http://localhost/NoviSajt/login.php");
	}

	if($_SESSION['korisnik']->naziv != "admin"){
		header("Location: http://localhost/NoviSajt/login.php");
	}
	
	*/
	 if(isset($_SESSION['korisnik'])):
                 if($_SESSION['korisnik']->naziv == "admin"):
?>




 <div class="tablepanel">
 
 
     
          <h2 class="naslov77">Admin Panel</h2>
          <h1 class="panel">Upravljanje korisnicima</h1>
          
            <table id="dataTable">
              <thead>
                <tr>
                  <td>Id korisnika</td>
                  <td>Ime</td>
                  <td>Prezime</td>
                  <td>Email</td>
                  <td>Lozinka</td>
                  <td>Aktivan</td>
				  <td>Datum registracije</td>
				  <td>Id uloge</td>
				  <td>Korisnicko ime</td>
				  <td>Token</td>
				   
                </tr>
              </thead>
             
              
			  <?php
			  
			 
			 $upit="select COUNT(*) as br from korisnik;";
			 $obj=$konekcija->query($upit)->fetch();
			 
			 $poStrani=2;
			 $links=ceil($obj->br/$poStrani);
			 
			 $page=isset($_GET['page'])? $_GET['page']:1;
			 
			 
			 $odakle=$poStrani*($page-1);
			 
			 
			 $rez=$konekcija->query($upit)->fetchAll();
			  			  
			  
				$upit="select * from korisnik LIMIT $odakle,$poStrani;";
				$priprema=$konekcija->query($upit)->fetchAll();
				
				
			

			
				if($priprema){
					echo "<tbody>";
				
				foreach($priprema as $red){
									
				echo "<tr><td>".$red->id."</td><td>".$red->ime."</td><td>".$red->prezime."</td><td>".$red->email."</td><td>".$red->lozinka."</td><td>".$red->aktivan."</td><td>".$red->datum_registracije."</td><td>".$red->uloga_id."</td><td>".$red->korisnicko_ime."</td><td>".$red->token."</td><td><a href='updateUser.php?id=".$red->id ."'>Izmeni</a>"."</td><td><button data-id='". $red->id ."' class='btnu'>Obriši</button></td></tr>";
										
					
					
				}
				
	            echo "</tbody>";			
				
				
				
				
				}
		
				
				
				?>
			  
			  </table>		  
			
			 <br>
			  <ul class="paginacijalista">
                <?php for($i=0;$i<$links;$i++):?>
                <li class="paginacija"><a href="admin.php?page=<?= $i+1 ?>"><?= $i+1 ?></a></li>
                <?php endfor;?>
            </ul><br>
			
			
			
			
			<!-- forma za upis novog korisnika-->
			
			 <div id="pomeraj" class="col-md-6">
            <h2 class="mb-5">Insert User</h2>
          <form>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">First Name</label>
                      <input type="text" name="firstName" id="ime" class="form-control ">
                    </div>
					<p id="eror1"></p>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="phone">Last Name</label>
                      <input type="text" name="lastName" id="prezime" class="form-control ">
                    </div>
					<p id="eror2"></p>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control ">
                    </div>
					<p id="erorMail"></p>
                  </div>
				  
				   <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="user">Username</label>
                      <input type="text" name="username" id="username" class="form-control ">
                    </div>
					<p id="erorUser"></p>
                  </div>
				  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" class="form-control ">
                    </div>
					<p id="erorS"></p>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <button type="button" onclick="provera();" name="id" value="Register" id="dugme" class="btn btn-primary">Insert</button>
                    </div>
                  </div>
                </form>
				
				<div id="poruka1"></div>
              </div>
			
			
			
			

			
			
			
			
			
			
			  <h1 class="panel">Upravljanje vestima</h1>
          
            <table id="dataTable">
              <thead>
                <tr>
                  <td>Id Vesti</td>
                  <td>Slika vesti</td>
                  <td>Naslov1</td>
                  <td>Naslov2</td>
                  <td>Tekst</td>
                  <td>Id hotel</td>
				  
                </tr>
              </thead>
             
			 <?php
				
			
			 $upit="select COUNT(*) as br from vesti;";
			 $obj=$konekcija->query($upit)->fetch();
			 
			 $poStrani=3;
			 $links=ceil($obj->br/$poStrani);
			 //echo $links;
			 $page=isset($_GET['page'])? $_GET['page']:1;
			 
			 
			 $odakle=$poStrani*($page-1);
			 //$upit="select * from vesti LIMIT $odakle,$poStrani;";
			 
			 $rez=$konekcija->query($upit)->fetchAll();
			
             $upit="select * from vesti LIMIT $odakle,$poStrani;";
				$priprema=$konekcija->query($upit)->fetchAll();
				
				if($priprema){
					echo "<tbody>";
				
				foreach($priprema as $red){
					
         echo "<tr><td>".$red->idVest."</td><td><img width='70px' height='60px' src='".$red->slikaVest."'></td><td>".$red->tekst1."</td><td>".$red->tekst2."</td><td>".$red->tekst3."</td><td>".$red->idHotel."</td><td><button data-id='". $red->idVest ."' class='btnobrisi'>Obriši</button></td></tr>";
								
				}
				
	            echo "</tbody>";				
				}	
					
		 
            ?>
			    
			</table>	
			  <!-- paginacija -->
			  <br>
			  <ul class="paginacijalista">
                <?php for($i=0;$i<$links;$i++):?>
                <li class="paginacija"><a href="admin.php?page=<?= $i+1 ?>"><?= $i+1 ?></a></li>
                <?php endfor;?>
            </ul><br>
			  
			  
			  
			  
			  
			  
			  <h1 class="panel">Jednokrevetne sobe</h1>
          
            <table id="dataTable">
              <thead>
                <tr>
                  <td>Id Sobe</td>
                  <td>Slika sobe</td>
                  <td>Naslov1</td>
                  <td>Id zvezdice</td>
                  <td>Naslov2</td>
                  <td>Id gost</td>
				  <td>Id kvadrature</td>
				  <td>Opis</td>
				  <td>Id cena</td>
				  <td>Id tipa sobe</td>
				  
                </tr>
              </thead>
             
              
                <?php
				$upit="select * from jednokrevetna;";
				$priprema=$konekcija->query($upit)->fetchAll();
				
				if($priprema){
					echo "<tbody>";
				
				foreach($priprema as $red){
					
echo "<tr><td>".$red->idJed."</td><td><img width='75px' height='60px' src='".$red->slika."'></td><td>".$red->naslov."</td><td>".$red->idZvezdice."</td><td>".$red->naslov2."</td><td>".$red->idGost."</td><td>".$red->idKvadrat."</td><td>".$red->opis."</td><td>".$red->idCena."</td><td>".$red->idTip."</td><td><button  data-id='".$red->idJed."' class='soba1Brisi'>Obriši</button></td></tr>";
						
					
					
				}
				
	            echo "</tbody>";			
				
				
				
				
				}
		
				
				
				?>
              
			  
			  </table>		 
			  
			  
			  
			  
			  
			  
			  <h1 class="panel">Dvokrevetne sobe</h1>
          
            <table id="dataTable">
              <thead>
                <tr>
                  <td>Id Sobe</td>
                  <td>Slika sobe</td>
                  <td>Naslov1</td>
                  <td>Id zvezdice</td>
                  <td>Naslov2</td>
                  <td>Id gost</td>
				  <td>Id kvadrature</td>
				  <td>Opis</td>
				  <td>Id cena</td>
				  <td>Id tipa sobe</td>
				  
                </tr>
              </thead>
             
              
                <?php
				$upit="select * from dvokrevetna;";
				$priprema=$konekcija->query($upit)->fetchAll();
				
				if($priprema){
					echo "<tbody>";
				
				foreach($priprema as $red){
					
echo "<tr><td>".$red->idDvo."</td><td><img width='75px' height='60px' src='".$red->slika."'></td><td>".$red->naslov."</td><td>".$red->idZvezdice."</td><td>".$red->naslov2."</td><td>".$red->idGost."</td><td>".$red->idKvadrat."</td><td>".$red->opis."</td><td>".$red->idCena."</td><td>".$red->idTip."</td><td><button data-id='".$red->idDvo."' class='soba2Brisi'>Obriši</button></td></tr>";
						
					
					
				}
				
	            echo "</tbody>";			
				
				
				
				
				}
		
				
				
				?>
              
			  
			  </table>		 
			  
			  
			  
			  
			  
			  <h1 class="panel">Trokrevetne sobe</h1>
          
            <table id="dataTable">
              <thead>
                <tr>
                  <td>Id Sobe</td>
                  <td>Slika sobe</td>
                  <td>Naslov1</td>
                  <td>Id zvezdice</td>
                  <td>Naslov2</td>
                  <td>Id gost</td>
				  <td>Id kvadrature</td>
				  <td>Opis</td>
				  <td>Id cena</td>
				  <td>Id tipa sobe</td>
				
                </tr>
              </thead>
             
              
                <?php
				$upit="select * from trokrevetna;";
				$priprema=$konekcija->query($upit)->fetchAll();
				
				if($priprema){
					echo "<tbody>";
				
				foreach($priprema as $red){
					
echo "<tr><td>".$red->idTro."</td><td><img width='75px' height='60px' src='".$red->slika."'></td><td>".$red->naslov."</td><td>".$red->idZvezdice."</td><td>".$red->naslov2."</td><td>".$red->idGost."</td><td>".$red->idKvadrat."</td><td>".$red->opis."</td><td>".$red->idCena."</td><td>".$red->idTip."</td><td><button data-id='".$red->idTro."' class='soba3Brisi'>Obriši</button></td></tr>";
						
					
					
				}
				
	            echo "</tbody>";			
				
				
				
				
				}
		
				
				
				?>
              
			  
			  </table>		 
			  
			  
			  
			  <h1 class="panel">Upravljanje rezervacijama</h1>
          
            <table id="dataTable">
              <thead>
                <tr>
                  <td>Id rezervacije</td>
                  <td>Datum dolaska</td>
                  <td>Datum odlaska</td>
                  <td>Broj gostiju</td>
                  <td>Tip sobe</td>
                  <td>Komentar</td>
				  <td>Id hotel</td>
				  <td>Ime sobe</td>
				  <td>Email</td>
			     
                </tr>
              </thead>
             
              
			  <?php
			  
			   $upit="select COUNT(*) as br from rezervacija;";
			 $obj=$konekcija->query($upit)->fetch();
			 
			 $poStrani=3;
			 $links=ceil($obj->br/$poStrani);
			 //echo $links;
			 $page=isset($_GET['page'])? $_GET['page']:1;
			 
			 
			 $odakle=$poStrani*($page-1);
			
			 
			 $rez=$konekcija->query($upit)->fetchAll();
			
             $upit="select * from rezervacija LIMIT $odakle,$poStrani;";
				$priprema=$konekcija->query($upit)->fetchAll();
			  
			  
				if($priprema){
					echo "<tbody>";
				
				foreach($priprema as $red){
					
echo "<tr><td>".$red->idRez."</td><td>".$red->datumOd."</td><td>".$red->datumDo."</td><td>".$red->brojGostiju."</td><td>".$red->tipsobe."</td><td>".$red->komentar."</td><td>".$red->idHotel."</td><td>".$red->imeSobe."</td><td>".$red->email."</td>
<td><a href='updateRes.php?id=".$red->idRez."'>Izmeni</a></td><td><button data-id='".$red->idRez."' class='rezBrisi'>Obriši</button></td></tr>";
						
					
					
				}
				
	            echo "</tbody>";			
				
				
				
				
				}
		
				
				
				?>
			  
			
			  
			  
			  </table>	



                 <br>
			  <ul class="paginacijalista">
                <?php for($i=0;$i<$links;$i++):?>
                <li class="paginacija"><a href="admin.php?page=<?= $i+1 ?>"><?= $i+1 ?></a></li>
                <?php endfor;?>
            </ul><br>





                			  
			  
			  
			  <!-- forma za upis nove rezervacije -->
			  
			  <div id="pomrez" class="col-md-6">
            <h2 class="mb-5">Insert reservation</h2>
                <form action="#" method="post">
                  <div class="row">
                      <div class="col-sm-6 form-group">
                          
                          <label for="">Arrival Date</label>
                          <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            <input type='date' name="date1" class="form-control" id='datum1' />
                          </div>
						  <p id="eror66"></p>
                      </div>

                      <div class="col-sm-6 form-group">
                          
                          <label for="">Departure Date</label>
                          <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            <input type='date' name="date2" class="form-control" id='datum2' />
                          </div>
						  <p id="eror55"></p>
                      </div>
                      
                  </div>


                  <div class="row">
                    
					<div class="col-md-6 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email1" class="form-control ">
					  <p id="eror22"></p>
                    </div>
					

                    <div class="col-md-6 form-group">
                      <label for="room">Guests</label>
                      <select name="guests" id="roomG" class="form-control">
                        <option value="0">Choose one...</option>					  
                        <option value="1">1 Guest</option>
                        <option value="2">2 Guests</option>
                        <option value="3">3 Guests</option>
                       
                      </select>
					  <p id="eror33"></p>
                    </div>
					
					
                  </div>
                 
                  <div class="row">
                   
					
					<div class="col-md-6 form-group">
                      <label for="roomT">Room name</label>
                     <select name="ddlRoom" id="roomName" class="form-control">
					    <option value="0">Choose one...</option>
                        <option value="1">Single Room1</option>
						<option value="2">Single Room2</option>
						<option value="3">Single Room3</option>
						<option value="4">Single Room4</option>
						<option value="5">Single Room5</option>
						<option value="6">Single Room6</option>
                        <option value="7">Double Room1</option>
                        <option value="8">Double Room2</option>
						<option value="9">Double Room3</option>
						<option value="10">Double Room4</option>
						<option value="11">Double Room5</option>
						<option value="12">Double Room6</option>
                        <option value="13">Triple Room1</option>
						<option value="14">Triple Room2</option>
						<option value="15">Triple Room3</option>
						<option value="16">Triple Room4</option>
						<option value="17">Triple Room5</option>
						<option value="18">Triple Room6</option>
					   
					   
                      </select>
					  <p id="eror13"></p>
                    </div>
					
					
					
                    <div class="col-md-6 form-group">
                      <label for="roomT">Room Type</label>
                      <select name="ddlType" id="room" class="form-control">
					    <option value="0">Choose one...</option>
                        <option value="1">Single Room</option>
                        <option value="2">Double Room</option>
                        <option value="3">Triple Room</option>
                       
                      </select>
					  <p id="eror11"></p>
                    </div>
				
					 <div class="col-md-12 form-group">
                      <label for="message">Write a Note</label>
                      <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
					  <p id="eror17"></p>
                    </div>
					
					</div>	
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <button type="button" onclick="validacijaRez();" name="nesto" id="dugme2" value="Reserve Now" class="btn btn-primary">Insert</button>
                    </div>
                  </div>
                </form>
				<div id="poruka"></div>
              </div>
			  

			  
			  
			  
			  
			  
			  
			 </div> 









<?php
  
else:
   header("Location: index.php");
   endif;
else:
   header("Location: index.php");

endif;

 ?>
	
	
	<?php
	include "views/footer.php";
	?>
	