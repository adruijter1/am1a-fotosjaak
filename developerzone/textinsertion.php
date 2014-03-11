<?php 
	$userrole = array('root', 'developer');
	include("security.php"); 
?>
<script>
  $(document).ready(function(){
    $('#1').click(function(){
    	$('div.foto p.muis').append(", uit Rusland")
    	    				.before("<p class=''muis'>Deze paragraaf komt als eerste</p>")
    	    				.after("<p class=''muis'>Deze paragraaf komt als derde</p>");
    });
	$('#2').click(function(){
		$('div.foto p.beer').prepend("Pas op,");
	});	
  });	
</script>
<p>Het inserten van text in een tag met jquery</p>

<button id='1'>Verander het muis onderschrift</button>

<div class='foto'>
  <img src='images/russischedwerghamster.jpg' alt='muis' width='200'/>
  <p class='muis'>Dit is een muis</p>	
</div>
<button id='2'>Verander het beer onderschrift</button>
<div class='foto'>
  <img src='images/Koala.jpg' alt='koala' width='200'/>
  <p class="beer">Dit is een beer</p>	
</div>
