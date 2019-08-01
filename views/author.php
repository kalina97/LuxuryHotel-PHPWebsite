<div id="info">
<div id="autor">


  <img class="ja" src="images/nikola.jpg" alt="Autor sajta"/>

  <p class="pasus">
  Hello, my name is Nikola Kalincevic and I'm 21.
  I live in Obrenovac, small town near Belgrade.
  I'm studying web programming at ICT College.
  This website is project for subject about PHP programming language...
  I wish to become a specialist in IT technologies...
  
  
  </p>
  
  </div>
  
  
<div id="toggle">
			<div class="rate-holder">
			<h2 class="formh2">Rate my site</h2>
			
			<div class="comment">
			<input type="radio" class="radio" name="vote"
			id="radio1" value="1">
			<label for="radio1">Awesome</label>
			</div>
			<div class="comment">
			<input type="radio" class="radio" name="vote"
			id="radio2" value="2">
			<label for="radio2">Good</label>
			</div>
			<div class="comment">
			<input type="radio" class="radio" name="vote"
			id="radio3" value="3">
			<label for="radio3">Not bad</label>
			</div>
			<div class="comment">
			<input type="radio" class="radio" name="vote"
			id="radio4" value="4">
			<label for="radio4">Horrifying</label>
			</div>
			<button type="button" onclick="vote();" name="button" id="vote"
			value="Vote">Vote</button>
		    
			 
			</div>
			
			
			
			<div id="anketaFeedback">
			<?php
       include "modules/konekcija.php";

        $upit = "SELECT naziv,rezultat FROM anketa;";
		$priprema = $konekcija->query($upit)->fetchAll();
				if($priprema){
					echo '<table class="tablica">';
					echo '<tr><th>POOL RESULTS</th></tr>';
					foreach($priprema as $red){
						echo "<tr><td>".$red->naziv."</td><td>".$red->rezultat." votes</td></tr>";
						
						
					}
					echo "</table>";
					
				}
				
			
			
			?>
			
			
			
			</div>
			
</div>

</div>








