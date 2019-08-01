<?php 
include "views/head.php";
include "views/nav.php";
include "modules/konekcija.php";


    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $upit = "SELECT k.*,u.id as ulogaID,u.naziv FROM korisnik k INNER JOIN uloga u ON k.uloga_id = u.id WHERE k.id = $id";
        $prepare = $konekcija->prepare($upit);
			$prepare->bindParam(":id", $id);
        try{
            $prepare->execute();
            $rezultat = $prepare->fetch();
        }catch(PDOExeption $e){
            echo $e->getMessage();
        }
    
	}





?>
 <div class="col-md-6">
            <h2 class="mb-5">Update user</h2>
          <form action="modules/edited.php" method="POST">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">First Name</label>
                      <input type="text" name="firstName" id="ime1" value="<?= $rezultat->ime ?>" class="form-control ">
                    </div>
					
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="phone">Last Name</label>
                      <input type="text" name="lastName" id="prezime" value="<?= $rezultat->prezime ?>" class="form-control ">
                    </div>
					
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" value="<?= $rezultat->email ?>" class="form-control ">
                    </div>
					
                  </div>
				  
				   <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="user">Username</label>
                      <input type="text" name="username" id="username" value="<?= $rezultat->korisnicko_ime ?>" class="form-control ">
                    </div>
					
                  </div>
				  				  
				   
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="password">Active</label>
                      <input type="text" name="aktivan" id="password"  value="<?= $rezultat->aktivan ?>" class="form-control ">
                    </div>
					
                  </div>
				  
				  
				   
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="password">Role</label>
                      <input type="text" name="uloga" id="password" value="<?= $rezultat->uloga_id ?>" class="form-control ">
                    </div>
					
                  </div>
				  
				  
				  
				  <input type="hidden" name="skriveno" value="<?= $rezultat->id ?>"/>
				  
				  
				  
				  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <button type="submit" onclick="provera();" value="Register" name="izmeni" id="dugme" class="btn btn-primary">Update</button>
                    </div>
                  </div>
                </form>
				
				<div id="poruka1"></div>
              </div>
			  
			  
			  
			  
			  
			  
			  
<?php
include "views/footer.php";
?>			  
			  