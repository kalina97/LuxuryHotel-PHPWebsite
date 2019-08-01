
//alert("Nestooo");

//za brisanje korisnika

$('.btnu').click(function(){
	var id = $(this).attr("data-id");
	$.ajax({
		url:'http://localhost/NoviSajt/modules/deleteUser.php',
		type:'POST',
		data:{
			id:id
		},
		success:function(data){
		    console.log(data);
			alert("Obrisali ste korisnika iz baze");
		},
		error:function(status,xhr,error){
			console.log(status);
		}
		
		
	});
	
	
});



//za brisanje vesti




$('.btnobrisi').click(function(){
	var id = $(this).attr('data-id');
	$.ajax({
		url:'http://localhost/NoviSajt/modules/deleteNews.php',
		type:'POST',
		data:{
		
			id:id
		},
		success:function(data){
		    console.log(data);
			alert("Obrisali ste vest iz baze");
		},
		error:function(status,xhr,error){
			console.log(status);
		}
		
		
	});
	
	
});





// za brisanje jednokrevetne sobe 



$('.soba1Brisi').click(function(){
	var id = $(this).attr('data-id');
	$.ajax({
		url:'http://localhost/NoviSajt/modules/deleteRoom1.php',
		type:'POST',
		data:{
		
			id:id
		},
		success:function(data){
		    console.log(data);
			alert("Obrisali ste jednokrevetnu sobu iz baze");
		},
		error:function(status,xhr,error){
			console.log(status);
		}
		
		
	});
	
	
});




// za brisanje dvokrevetne sobe 



$('.soba2Brisi').click(function(){
	var id = $(this).attr('data-id');
	$.ajax({
		url:'http://localhost/NoviSajt/modules/deleteRoom2.php',
		type:'POST',
		data:{
		
			id:id
		},
		success:function(data){
		    console.log(data);
			alert("Obrisali ste dvokrevetnu sobu iz baze");
		},
		error:function(status,xhr,error){
			console.log(status);
		}
		
		
	});
	
	
});






// za brisanje trokrevetne sobe 



$('.soba3Brisi').click(function(){
	var id = $(this).attr('data-id');
	$.ajax({
		url:'http://localhost/NoviSajt/modules/deleteRoom3.php',
		type:'POST',
		data:{
		
			id:id
		},
		success:function(data){
		    console.log(data);
			alert("Obrisali ste trokrevetnu sobu iz baze");
		},
		error:function(status,xhr,error){
			console.log(status);
		}
		
		
	});
	
	
});





// za brisanje rezervacija



$('.rezBrisi').click(function(){
	var id = $(this).attr('data-id');
	$.ajax({
		url:'http://localhost/NoviSajt/modules/deleteRes.php',
		type:'POST',
		data:{
		
			id:id
		},
		success:function(data){
		    console.log(data);
			alert("Obrisali ste rezervaciju iz baze");
		},
		error:function(status,xhr,error){
			console.log(status);
		}
		
		
	});
	
	
});














