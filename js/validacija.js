

//klijentska validacija
function provera()
{
	var ime,reIme,prezime,rePrezime,usrname,reUser,email, reEmail,sifra,reSira,nizGreske;

	ime= document.getElementById("ime");
	usrname= document.getElementById("username");
	prezime= document.getElementById("prezime");
	email = document.getElementById("email");
	reIme= /^[A-Z][a-z]{2,9}$/;
	rePrezime= /^[A-Z][a-z]{2,14}$/;
	reEmail = /^[\w]+\@gmail\.com$/;
	sifra=document.getElementById("password");
    reSifra=/^([A-Za-z\d]){8,}$/;
	nizGreske=[]; 
	reUser=/^[a-z0-9\_]{4,15}$/;
	
	if(!reIme.test(ime.value))
	{
		ime.style.border="2px solid red";
		ime.style.borderRadius = "5px";
		nizGreske.push("Ime nije ok");
		document.getElementById('eror1').innerHTML = "Unesite pravilno ime!";
	}
	else
	{
	  ime.style.border = "2px solid #00ff00";
		ime.style.borderRadius = "5px";
   document.getElementById('eror1').innerHTML = "";
	}

	if(!rePrezime.test(prezime.value))
	{
		prezime.style.border= "2px solid red";
		prezime.style.borderRadius = "5px";
		nizGreske.push("Prezime nije ok");
		document.getElementById('eror2').innerHTML = "Unesite pravilno prezime!";
	}
	else
	{
	  prezime.style.border = "2px solid #00ff00";
		prezime.style.borderRadius = "5px";
   document.getElementById('eror2').innerHTML = "";
	}
	
	
	
	if(!reUser.test(usrname.value))
	{
		usrname.style.border= "2px solid red";
		usrname.style.borderRadius = "5px";
		nizGreske.push("Username nije ok");
		document.getElementById('erorUser').innerHTML = "Unesite pravilno username!";
	}
	else
	{
	  usrname.style.border = "2px solid #00ff00";
		usrname.style.borderRadius = "5px";
   document.getElementById('erorUser').innerHTML = "";
	}
	
	
	
	

	if(!reEmail.test(email.value))
	{
		email.style.border = "2px solid red";
		email.style.borderRadius = "5px";
		nizGreske.push("Email nije ok");
		document.getElementById('erorMail').innerHTML = "Unesite pravilno email adresu!";
	}
	else
	{
		email.style.border = "2px solid #00ff00";
		email.style.borderRadius = "5px";
		document.getElementById('erorMail').innerHTML = "";
	}

	
	if(!reSifra.test(sifra.value))
	{
		sifra.style.border= "2px solid red";
		sifra.style.borderRadius = "5px";
		nizGreske.push("Lozinka nije ok");
		document.getElementById('erorS').innerHTML = "Unesite pravilno lozinku!";
	}
	else
	{
	  sifra.style.border = "2px solid #00ff00";
		sifra.style.borderRadius = "5px";
   document.getElementById('erorS').innerHTML = "";
	}
	
	
//slanje podataka serveru, nakon sto su dobro popunjena polja forme


if(nizGreske.length>0){
	
	var ispis="<ol class='lista'>";
	ispis += "<h3 class='pomeri'>Greške pri popunjavanju forme:</h3>";
	for(var i=0;i<nizGreske.length;i++){
		ispis += "<li>" + nizGreske[i] + "</li>";
	}
	
	ispis += "</ol>";
	
	document.querySelector("#poruka1").innerHTML=ispis;
}
else{
const BASE_URL = "http://localhost/NoviSajt/";
$("#dugme").click(function(){
	 
   function getFormData() {
       var obj = {
           firstName : $("#ime").val(),
           lastName : $("#prezime").val(),
           email : $("#email").val(),
           username : $("#username").val(),
           sifra: $("#password").val(),
           send : true
       };
	    console.log(obj);
       return obj;
   }

   function callAjax(obj) {
       $.ajax({
            url : BASE_URL + "modules/register.php",
            type : "post",
            data : obj,
           success : function(data, xhr) {
			   alert('Uspešno ste uneli korisnika');
               $("#poruka1").html("<h1 class='naslov'>Uspešna registracija.</h1>");
           },
           error : function(xhr, status, error) {
                var poruka = "Doslo je do greske.";
                switch(xhr.status) {
					
                    case 404 :
                        poruka = "Stranica nije pronadjena.";
                        break;
                   case 409:
                     poruka = "Username ili mail vec postoji.";
                       break;
                   case 422:
                       poruka = "Podaci nisu validni.";
                      
                        break;
                    case 500:
                        poruka = "Greska.";
                        break;
						 console.log(xhr);
                }
                $("#poruka1").html(poruka);
           }
		   
       });
   }
   var formData = getFormData();
   callAjax(formData);
});
}

}
window.setInterval("provera()",8000);





//validacija forme za rezervaciju smestaja


function validacijaRez()
{
	var datum1,datum2,email, reEmail,brojGostiju,tipSobe,imeSobe,poruka,nizGreske;

	datum1= document.getElementById("datum1");
	datum2= document.getElementById("datum2");
	email = document.getElementById("email1");
	reEmail = /^[\w]+\@gmail\.com$/;
	
	brojGostiju=document.getElementById("roomG");
	tipSobe=document.getElementById("room");
	imeSobe=document.getElementById("roomName");
	poruka=document.getElementById("message");
	nizGreske=[]; 
	
     if(datum1.value == ""){
		 datum1.style.border = "2px solid red";
		datum1.style.borderRadius = "5px";
		 nizGreske.push("Unesite datum dolaska");
		 document.getElementById('eror66').innerHTML = "Unesite datum dolaska!";
	 }
	 else{
		 
		 datum1.style.border = "2px solid #00ff00";
		datum1.style.borderRadius = "5px";
		document.getElementById('eror66').innerHTML = "";
		
		 
		 
	 }
	
	
	
	
	if(datum2.value == ""){
		 datum2.style.border = "2px solid red";
		datum2.style.borderRadius = "5px";
		 nizGreske.push("Unesite datum odlaska");
		 document.getElementById('eror55').innerHTML = "Unesite datum odlaska!";
	 }
	 else{
		 
		 datum2.style.border = "2px solid #00ff00";
		datum2.style.borderRadius = "5px";
		document.getElementById('eror55').innerHTML = "";
		
		 
		 
	 }
	 
	 
	 
	 
	 
	 
	  if(imeSobe.value == "0"){
		 imeSobe.style.border = "2px solid red";
		imeSobe.style.borderRadius = "5px";
		 nizGreske.push("Izaberite ime sobe");
		 document.getElementById('eror13').innerHTML = "Izaberite ime sobe!";
	 }
	 else{
		 
		 imeSobe.style.border = "2px solid #00ff00";
		imeSobe.style.borderRadius = "5px";
		document.getElementById('eror13').innerHTML = "";
		
		 
		 
	 }
	 
	 
	 
	 
	  if(tipSobe.value == "0"){
		 tipSobe.style.border = "2px solid red";
		tipSobe.style.borderRadius = "5px";
		 nizGreske.push("Izaberite tip sobe");
		 document.getElementById('eror11').innerHTML = "Izaberite tip sobe!";
	 }
	 else{
		 
		 tipSobe.style.border = "2px solid #00ff00";
		tipSobe.style.borderRadius = "5px";
		document.getElementById('eror11').innerHTML = "";
		
		 
		 
	 }
	 
	 
	 
	 
	 
	  if(brojGostiju.value == "0"){
		 brojGostiju.style.border = "2px solid red";
		brojGostiju.style.borderRadius = "5px";
		 nizGreske.push("Izaberite broj gostiju");
		 document.getElementById('eror33').innerHTML = "Izaberite broj gostiju!";
	 }
	 else{
		 
		 brojGostiju.style.border = "2px solid #00ff00";
		brojGostiju.style.borderRadius = "5px";
		document.getElementById('eror33').innerHTML = "";
		
		 
		 
	 }
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 if(poruka.value== ""){
		  poruka.style.border = "2px solid red";
		poruka.style.borderRadius = "5px";
		 nizGreske.push("Morate uneti komentar");
		 document.getElementById('eror17').innerHTML = "Unesite neki komentar!";
	 }
	 else{
		 poruka.style.border = "2px solid #00ff00";
		poruka.style.borderRadius = "5px";
		document.getElementById('eror17').innerHTML = "";
	 }
	
	
	
	
	
	

	if(!reEmail.test(email.value))
	{
		email.style.border = "2px solid red";
		email.style.borderRadius = "5px";
		nizGreske.push("Email nije ok");
		document.getElementById('eror22').innerHTML = "Unesite pravilno email!";
	}
	else
	{
		email.style.border = "2px solid #00ff00";
		email.style.borderRadius = "5px";
		document.getElementById('eror22').innerHTML = "";
	}

	
	
	
	
//slanje podataka serveru, nakon sto su dobro popunjena polja forme


if(nizGreske.length>0){
	
	var ispis="<ol class='lista'>";
	ispis += "<h3 class='pomeri'>Greške pri popunjavanju forme:</h3>";
	for(var i=0;i<nizGreske.length;i++){
		ispis += "<li>" + nizGreske[i] + "</li>";
	}
	
	ispis += "</ol>";
	
	document.querySelector("#poruka").innerHTML=ispis;
}
else{
const BASE_URL = "http://localhost/NoviSajt/";
$("#dugme2").click(function(){
	 
   function getFormData() {
       var obj = {
           dat1 : $("#datum1").val(),
           dat2 : $("#datum2").val(),
           email : $("#email1").val(),
           sobaIme : $("#roomName").val(),
		   gostiBr: $("#roomG").val(),
		   sobaTip: $("#room").val(),
		   koment: $("#message").val(),
           send : true
       };
	    console.log(obj);
       return obj;
   }

   function callAjax(obj) {
       $.ajax({
            url : BASE_URL + "modules/registerRez.php",
            type : "post",
            data : obj,
           success : function(data, xhr) {
			   alert('Uspešno ste uneli rezervaciju');
               $("#poruka").html("<h1 class='naslov'>Uspešna rezervacija.</h1>");
           },
           error : function(xhr, status, error) {
                var poruka = "Doslo je do greske.";
                switch(xhr.status) {
					
                    case 404 :
                        poruka = "Stranica nije pronadjena.";
                        break;
                   case 409:
                     poruka = "Username ili mail vec postoji.";
                       break;
                   case 422:
                       poruka = "Podaci nisu validni.";
                      
                        break;
                    case 500:
                        poruka = "Greska.";
                        break;
						 console.log(xhr);
                }
                $("#poruka").html(poruka);
           }
		   
       });
   }
   var formData = getFormData();
   callAjax(formData);
});
}

}
window.setInterval("validacijaRez()",8000);



	
	
	
	
	













