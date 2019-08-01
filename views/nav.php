
<header role="banner">


     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.php?page=home">Luxury Hotel</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
		  <?php 
		  include "modules/konekcija.php";
		 
		  
		  $upit_linkovi = "SELECT * FROM linkovi WHERE roditelj=0";
          $rezultat_linkovi = $konekcija->query($upit_linkovi);
		   $red=$rezultat_linkovi->fetch();
		  
		  
             echo '<ul class="navbar-nav ml-auto pl-lg-5 pl-0">';
              
				  
			  foreach($rezultat_linkovi as $red){
                     
                    echo "<li class='nav-item'><a class='nav-link' href='".$red->putanja."'>".$red->imeLinka."</a></li>";					 
		
				  
		   
			  }
			

		       if(isset($_SESSION['korisnik'])){
					  echo "<li class='nav-item'><a class='nav-link' href='index.php?page=logout'>Logout</a></li>";
				  }
				  else{
					  echo "<li class='nav-item'><a class='nav-link' href='index.php?page=login'>Login</a></li>";
				  }
            
			echo '</ul>';
			
			

			
		         
			
			
			?>
			
			
			
			
          </div>
        </div>
      </nav>
	  
</header>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1>Welcome To Our Luxury Hotel</h1>
              <p>Discover our world's #1 For VIP.</p>
             
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
