<?php 
	$userrole = array('root', 'developer');
	include("security.php"); 
?>
<style>
  div#blue
  {
  	background-color:blue;
  	width:300px;
  	height:300px;
  }
  button
  {
  	padding:1em;  
  	font-size:1.2em;	
  }
</style>

<script>
  $(document).ready(function(){
	$('#1').dblclick(function(){
	  $('#blue').hide(10000);
	});
	
	// Maak een selector voor de knop met id=2
	$('#2').dblclick(function(){
		$('#blue').show(10000);
	});
  	
  	$('#3').click(function(){
  		$('#blue').toggle(5000);
  	});
  	
  });
</script>

<p>Toepassing van show/hide met JQuery</p>
<!-- Maak een blauw blokje met HTML5 -->

<div id='blue'>Dit is een blauw blokje</div>
<br>
<button id='1'>Verdwijn</button>
<button id='2'>Kom terug</button>
<button id='3'>Toggle</button>
