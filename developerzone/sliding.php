<?php 
	$userrole = array('root', 'developer');
	include("security.php");
?>
<script>
  $(document).ready(function(){
  	var time = 2000;
  	$("#up").click(function(){
  		$("p").slideUp(time);
  	}); 
  	$("#down").click(function(){
  		$("p").slideDown(time);
  	});
  	$("#toggle").click(function(){
  		$("p").slideToggle(time);
  	}); 	
  });
</script>


<style>
button
{
	width:80px;
	height:40px;
}
</style>
<p><h3>Hieronder een voorbeeld van de jquery functie sliding</h3></p>
<br>

<p>Dit is wat tekst.Dit is wat tekst.<b>...</b>
Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.Dit is wat tekst.</p>
<button id='up'>Slideup</button>
<button id='down'>Slidedown</button>
<button id='toggle'>SlideToggle</button>

