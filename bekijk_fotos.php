<?php 
	$userrole = array('root', 'customer');
	include("security.php");
	
	// Plak de class PhotClass bovenin het bestand
	require_once("class/PhotoClass.php");
?>
<p>Hieronder staan de fotos van de opdracht:</p>

<table>
	<?php PhotoClass::show_photos($_GET['order_id']); ?>	
</table>
 