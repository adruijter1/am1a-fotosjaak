<?php 
	$userrole = array('root', 'developer');
	include("security.php");
?>
<script>
  $(document).ready(function(){
  	//alert("Het werkt!");
  	$('img').attr("width", "80");
  	$('button#1').click(function(){
  	  // Geef een alert met de huidige breedte van het plaatje  	  
  	  var width = $('img').attr('width');
  	  width = parseInt(width);
  	  if ( width < 150 )
  	  {
  	  	width += 5;  	  
  	  	$('img').attr('width', width);  
  	  }		
  	});
  	$('button#2').click(function(){
  	  var width = $('img').attr('width');
  	  width = parseInt(width);
  	  if ( width > 80)
  	  {
  	  	width -= 5;
  	  	$('img').attr('width', width);  
  	  }		
  	});
  	
  	$('button#3').click(function(){
  		$('img').attr('src', 'images/Koala.jpg');  		
  	});
  	
  	// Hover functie om het plaatje kleiner of groter te maken
  	$('img').hover(function(){
  	  //$(this).attr('width', '450');  		
  	},
  	function(){
  	  //$(this).attr('width', '80');  		
  	}
  	);
  	
  	
  	
  });	
</script>
<ul>
 <li></li><button id='1'>Maak groter</button></li>
 <li><button id='2'>Maak kleiner</button></li>
 <li><button id='3'>Verander de foto</button></li>
</ul>

<img src='images/russischedwerghamster.jpg' alt='russische dwerghamster' /><br>

