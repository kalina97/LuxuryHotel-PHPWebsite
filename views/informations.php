


   
   
    
    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 heading-wrap text-center">
            <h4 class="sub-heading">Our Kind Staff</h4>
              <h2 class="heading">Our Staff</h2>
          </div>
        </div>
        <div class="row ">
		
		<?php
		 
		 include "modules/konekcija.php";
		
		$upit="select * from osoblje";
		$rezultat=$konekcija->query($upit);
		
		
		echo '<div class="col-md-12">';
		foreach($rezultat as $red){
          
            echo '<div class="post-entry">';
              echo '<img src="'.$red->slika.'" alt="Image placeholder" class="img-fluid12">';
             echo '<div class="body-text">';
               echo '<div class="category">'.$red->tekst.'</div>';
               echo '<h3 class="mb-3">'.$red->naslov.'</h3>';
                echo '<p class="mb-4">'.$red->tekst2.'</p>';
                
             echo '</div>';
            echo '</div>';
		}
          echo '</div>';
		  
          ?>
          
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/img_5.jpg);">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div class="col-md-9 text-center element-animate">
            <h2>Relax and Enjoy your Holiday</h2>
           
            <div class="btn-play-wrap"><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn-play popup-vimeo "><span class="ion-ios-play"></span></a></div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
   