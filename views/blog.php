 <section class="site-section bg-light">
      <div class="container">
       
        <div class="row mb-5">
		
		  <?php 
		   include "modules/konekcija.php";
		   
		   $upit="select * from vesti";
		   $rezultat=$konekcija->query($upit);
		   
		   
		  echo '<div id="pomeriga" class="col-md-11">';  
		foreach($rezultat as $red){
         
            echo '<div class="post-entry">';
              echo '<a href="'.$red->slikaVest.'" data-lightbox="gallery"><img src="'.$red->slikaVest.'" alt="Image placeholder" class="img-fluid"></a>';
              echo '<div class="body-text">';
                echo '<div class="category">'.$red->tekst1.'</div>';
                echo '<h3 class="mb-3">'.$red->tekst2.'</h3>';
                echo '<p class="mb-4">'.$red->tekst3.'</p>';
                
             echo '</div>';
            echo '</div>';
          
		}
		echo '</div>';
		  
		  ?>
		  

        </div>

       
      </div>
    </section>
    <!-- END section -->