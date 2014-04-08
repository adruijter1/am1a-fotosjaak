<?php
	// Beveiliging dat alleen een root of developer op
	// deze pagina kunnen komen 
	$userrole = array('root', 'developer');
	include("security.php");
?>


<script>
	$(document).ready(function(){
		//alert("hallo");
		$('div#accordion').accordion({ event: "mouseover" });
	});	
</script>
<style>
.ui-widget {
    font-size:90%;
}
#accordion
{
	width:100%;
	margin:auto;
}
.ui-accordion-header {
   background:grey;
}
.ui-accordion .ui-accordion-content-active {
        color:black;
        font-family:Comic Sans MS;
        
}
#accordion h1{
	color:white;
	font-family:Comic Sans MS;
}

</style>

<!-- Maak een accordion -->
<div id="accordion">
    <h1>Naam: Arjan de Ruijter</h1>
    <div>Docent op ICT Academie Utrecht</div>
    <h1>Naam: Nick van Buuren</h1>
    <div>Docent op ICT Academie Utrecht</div>
    <h1>Naam: Kor Raven</h1>
    <div>Docent op ICT Academie Utrecht</div>
    <h1>Naam: Hans Odijk</h1>
    <div>Docent op ICT Academie Utrecht</div>
    <h1>Naam: Ben Moolhuijsen</h1>
    <div>Docent op ICT Academie Utrecht</div>
</div>