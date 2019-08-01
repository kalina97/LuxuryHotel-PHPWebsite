function vote()
{
  id = $('input[name=vote]:checked').val();

  if(id)
  {
    $.ajax({
      url: 'vote.php',
      type: 'POST',
      data: {
        id: id
      },
      success: function(data)
      {
        $("#vote").hide();
       
        setInterval(function () {

        $("#anketaFeedback").html("<h3 class='votic'>Success vote</h3>");
		
		
      }, 400);
	  
	  
      },
      error: function(xhr)
      {
        $("#anketaFeedback").html(xhr.responseText);
      }
    });
   
   
   
	
	

  }
  else {
    $("#anketaFeedback").html("<p class='potvrda'>You must choose an option! </p>");
  }

}

