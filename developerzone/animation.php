<?php 
	$userrole = array('root', 'developer');
	include("security.php");
?>
<script>
  $(document).ready(function(){
  	$("button").click(function(){
  		
  	  var animateLeft = {"left" :"420px",
  	  				     "height" : "180px",
  	  					 "width" : "300px",
  	  					 "background-color" : "green",
  	  					 "font-size" : "3em",
  	  					 "opacity" : "0.3",
  	  					 "paddingLeft" : "0.3em" };
  	  					 
  	  var cssAnimateDown = {"left" :"420px",
  	  				     "height" : "180px",
  	  					 "width" : "300px",
  	  					 "background-color" : "blue",
  	  					 "font-size" : "1em",
  	  					 "opacity" : "1.0",
  	  					 "paddingLeft" : "0.3em",
  	  					 "top" : "120px" };
  	  					 
  	  var cssAnimateRight = { "left" : "10px" } 
  	  
  	  var cssAnimateUp = { "top" : "10px",
  	  					   "height" : "100px",
  	  					   "width" : "95px",
  	  					   "paddingLeft" : "0.3em"}
  		
  		
  	  $("#rooddivje").animate(animateLeft, 500, animateDown);
  	  
  	  function animateDown()
  	  {
  	  	$("#rooddivje").animate( cssAnimateDown, 2000, animateRight);
  	  }
  	  
  	  function animateRight()
  	  {
  	  	$("#rooddivje").animate( cssAnimateRight, 2000, animateUp);
  	  }
  		
  	  function animateUp()
  	  {
  	  	$("#rooddivje").animate( cssAnimateUp, 2000);
  	  }
  	});  	
  });	
</script>

<style type='text/css'>
#rooddivje
{
  background-color:red;
  width:95px;
  height:100px;
  position:absolute;
  left:10px;
  padding-left:0.3em;
}
button
{
  width:100px;
  height:40px;
  position:absolute;
  top:110px;
  left:10px;
}	
</style>

<div id='rooddivje'>
 Ik ben rood.
</div>
<button>Klik op mij voor animatie</button>