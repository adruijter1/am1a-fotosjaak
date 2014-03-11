<?php 
	$userrole = array('root', 'photographer');
	include("security.php");
	require_once('class/OrderClass.php');
?>
<p>Hieronder staan uw opdrachten</p>

<table>
 <tr>
 	<th>user id</th>
 	<th>ordernr</th>
 	<th>opdracht</th>
 	<th>datum</th>
 	<th>aantal</th>
 	<th>kleur z/w</th>
 	<th>bekijk</th>
 </tr>
 	<?php OrderClass::find_all_orders_order_by_id();  ?>
</table>
