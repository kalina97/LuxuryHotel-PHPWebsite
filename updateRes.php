<?php 
include "views/head.php";
include "views/nav.php";
include "modules/konekcija.php";


    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $upit = "SELECT * FROM rezervacija re inner join tipsobe tip on re.tipsobe=tip.idTip inner join hotel h on re.idHotel=h.idHotel WHERE re.idRez = $id";
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
            <h2 class="mb-5">Update Reservation</h2>
                <form action="modules/editRes.php" method="post">
                  <div class="row">
                      <div class="col-sm-6 form-group">
                          
                          <label for="">Arrival Date</label>
                          <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            <input type='date' name="date1" value="<?= $rezultat->datumOd ?>" class="form-control" id='datum1' />
                          </div>
						  <p id="eror66"></p>
                      </div>

                      <div class="col-sm-6 form-group">
                          
                          <label for="">Departure Date</label>
                          <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            <input type='date' name="date2" value="<?= $rezultat->datumDo ?>" class="form-control" id='datum2' />
                          </div>
						  <p id="eror55"></p>
                      </div>
                      
                  </div>


                  <div class="row">
                    
					<div class="col-md-6 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email1" name="email" value="<?= $rezultat->email ?>" class="form-control ">
					  <p id="eror22"></p>
                    </div>
					

                    <div class="col-md-6 form-group">
                      <label for="room">Guests</label>
                      <select name="guests" id="roomG" value="<?= $rezultat->brojGostiju ?>" class="form-control">
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
                     <select name="ddlRoom" id="roomName" value="<?= $rezultat->imeSobe ?>" class="form-control">
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
                      <select name="ddlType" id="room" value="<?= $rezultat->tipsobe ?>" class="form-control">
					    <option value="0">Choose one...</option>
                        <option value="1">Single Room</option>
                        <option value="2">Double Room</option>
                        <option value="3">Triple Room</option>
                       
                      </select>
					  <p id="eror100"></p>
                    </div>
				
					 <div class="col-md-12 form-group">
                      <label for="message">Write a Note</label>
                      <textarea name="message" id="message" value="<?= $rezultat->komentar ?>" class="form-control " cols="30" rows="8"></textarea>
					  <p id="eror17"></p>
                    </div>
					
					</div>	
					 <input type="hidden" name="skriveno" value="<?= $rezultat->idRez ?>"/>
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <button type="submit" onclick="validacijaRez();" id="dugme2" name="izmenires" value="Reserve Now" class="btn btn-primary">Update</button>
                    </div>
                  </div>
                </form>
				<div id="poruka"></div>
              </div>