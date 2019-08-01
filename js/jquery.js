$(document).ready(function(){
	
	
	
	//alert();
	
//funkcija za back to top dugme
$("#dugmence").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, 700);
  });
	
	
});