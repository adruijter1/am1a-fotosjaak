<?php 
	$userrole = array('root', 'developer');
	include("security.php"); 
?>
<style>
  .even
  {
    background-color:RGBA(220, 220, 220, 30);
  }
  .odd
  {
  	background-color:RGBA(180, 180, 180, 30);
  }
  .header
  {
  	background-color:RGBA(100, 100, 100, 30);
  	color:white;
  }	
  .highlight
  {
  	background-color:RGBA(240, 240, 240, 30);
  	color:red;
  	font-size:1.1em;
  }
</style>

<script>
  $(document).ready(function(){
  	$("tr:odd").addClass("odd");
  	$("tr:even:not(tr:eq(0))").addClass("even");
  	$("tr:first th").addClass("header");
  	
  	$("tr:not(tr:eq(0)) td").hover(function(){
  	  $(this).addClass("highlight");  	  		
  	},
  	function(){
  	  $(this).removeClass("highlight");		
  	});
  });
</script>
Dit is een voorbeeld van het toevoegen van het class attribuut

<table>
  <tr>
  	<th>id</th>
  	<th>voornaam</th>
  	<th>tussenvoegsel</th>
  	<th>achternaam</th>
  </tr>
  <tr>
  	<td>1</td>
  	<td>Arjan</td>
  	<td>de</td>
  	<td>Ruijter</td>
  </tr>
  <tr>
  	<td>2</td>
  	<td>Bert</td>
  	<td>de</td>
  	<td>Vries</td>
  </tr>
  <tr>
  	<td>3</td>
  	<td>Arnold</td>
  	<td>van</td>
  	<td>Buuren</td>
  </tr>
</table>