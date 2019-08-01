<section class="site-section">
      <div class="container">
        <div class="row">
          
		  <?php 
		include "modules/konekcija.php";
		  
		  $upitSobe="select * from trokrevetna tr join tipsobe t on tr.idTip=t.idTip join cene c on tr.idCena=c.idCena join gosti g on tr.idGost=g.idGost join kvadratura k on tr.idKvadrat=k.idKvadrat join zvezdice z on tr.idZvezdice=z.idZvezdice ";
		  $rezultat=$konekcija->query($upitSobe);
		  
          echo '<div id="col23" class="col-md-8 mb-4">';
		  
		  foreach($rezultat as $red){
           echo '<div class="media d-block room mb-0">';
              echo '<div>';
                echo '<a href="'.$red->slika.'" data-lightbox="gallery"><img src="'.$red->slika.'" alt="single room" class="img-fluid"></a>';
                echo '<div class="overlap-text">';
                  echo '<span>';
                    echo ''.$red->naslov.' ';
                    echo '<span class="ion-ios-star"></span>';
                    echo '<span class="ion-ios-star"></span>';
                    echo '<span class="ion-ios-star"></span>';
					echo '<span class="ion-ios-star"></span>';
                  echo '</span>';
                echo '</div>';
              echo '</div>';
              echo '<div class="media-body">';
                echo '<h3 class="mt-0">'.$red->naslov2.'</h3>';
                echo '<ul class="room-specs">';
                 echo '<li><span class="ion-ios-people-outline"></span>'. $red->brojGostiju.'</li>';
                 echo '<li><span class="ion-ios-crop"></span>'. $red->vrednost.'<sup>2</sup></li>';
                echo '</ul>';
                echo '<p>'. $red->opis.'</p>';
                echo '<h2>'.$red->vrednost1.'</h2>';
              echo '</div>';
           echo '</div>'; 
		  }
		  
          echo '</div>';
		  
          ?>
		  
		  
          
         
        </div>
      </div>
    </section>

   
   

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