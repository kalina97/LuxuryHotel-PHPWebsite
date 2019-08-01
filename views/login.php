 <section class="site-section">
      <div class="container">
        <div class="row">
          <div id="kolona" class="col-md-6">
            <h2 class="mb-5">Login Form</h2>
          <form action="login.php" method="post">
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Email</label>
                      <input type="text" id="email" name="email" class="form-control ">
                    </div>
					<p id="erorMail"></p>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="password">Password</label>
                      <input type="password" id="password" name="password" class="form-control ">
                    </div>
					<p id="erorS"></p>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <button type="submit" value="login" name="login" id="dugme2" class="btn btn-primary">Log in</button>
                    </div>
                  </div>
                </form>
				
				<p id="greskeLogin"></p>
				
				
             
        </div>
      </div>
    </section>