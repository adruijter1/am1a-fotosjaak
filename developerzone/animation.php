<?php 
	$userrole = array('root', 'developer');
	include("security.php");
?>
<script>
  $(document).ready(function(){
  	$("button").click(function(){
  	  $("#rooddivje").animate({"left" :"640px"}, 2000);
  		
  	});  	
  });	
</script>

<style>
#rooddivje
{
  background-color:red;
  width:100px;
  height:100px;
  position:absolute;
}
button
{
  width:100px;
  height:40px;
  position:absolute;
  top:100px;
}
	
</style>

<div id='rooddivje'>
 Ik ben rood.
</div>
<button>Klik op mij voor animatie</button>