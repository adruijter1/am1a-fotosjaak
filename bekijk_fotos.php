<?php 
	$userrole = array('root', 'customer', 'photographer');
	include("security.php");
	
	// Plak de class PhotClass bovenin het bestand
	require_once("class/PhotoClass.php");
?>

<style>
.simple_overlay
{
	display:none;	
	z-index:10000;
	background-color:#333;
	width:775px;
	min-height:200px;
	border:1px solid #666;
	
	-moz-box-shadow:0 0 90px 5px #000;
	-webkit-box-shadow:0 0 90px #000;		
}
.simple_overlay .close
{
	background-image:url('./images/drop.png');
	position:absolute;
	right:-10px;
	top:-10px;
	cursor:pointer;
	height:16px;
	width:16px;
}	

.details
{
	position:absolute;
	top:15px;
	right:15px;
	font-size:11px;
	color:#fff;
	width:150px;
}

.details h3
{
	color:#aba;
	font-size:15px;	
}	
</style>

<script>
	$(window).ready(function(){
		//Geeft alle vergrote foto's een width van 600px
		$('div.simple_overlay img').css('width', '600px');
		
		$('img[rel]').overlay();	
	})	
</script>


<p>Hieronder staan de fotos van de opdracht:</p>

<table>
	<?php PhotoClass::show_photos($_GET['order_id']); ?>	
</table>
 