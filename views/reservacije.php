 <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-5">Reservation Form</h2>
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
                      <button type="button" onclick="validacijaRez();" id="dugme2" value="Reserve Now" class="btn btn-primary">Reserve Now</button>
                    </div>
                  </div>
                </form>
				<div id="poruka"></div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <h3 class="mb-5">Featured Room</h3>
                <div class="media d-block room mb-0">
              <figure>
                <img src="images/img_1.jpg" alt="Generic placeholder image" class="img-fluid">
                <div class="overlap-text">
                  <span>
                    Featured Room 
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
					<span class="ion-ios-star"></span>
                  </span>
                </div>
              </figure>
              <div class="media-body">
                <h3 class="mt-0">Presidential Room</h3>
                <ul class="room-specs">
                  <li><span class="ion-ios-people-outline"></span> 2 Guests</li>
                  <li><span class="ion-ios-crop"></span> 28 ft <sup>2</sup></li>
                </ul>
                <p>This room will be available soon... </p>
                <h2>Price: $40</h2>
              </div>
            </div>
              </div>
        </div>
      </div>
    </section>
    <!-- END section -->
	
    
    
   
   