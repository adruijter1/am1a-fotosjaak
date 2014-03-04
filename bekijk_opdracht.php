<?php 
	$userrole = array('root', 'customer');
	include("security.php");
?>
<p>Hieronder staan uw opdrachten</p>






<table>
 <tr>
 	<th>ordernr</th>
 	<th>opdracht</th>
 	<th>datum</th>
 	<th>aantal</th>
 	<th>kleur z/w</th>
 	<th>bekijk</th>
 </tr>
 <tr>
 	<td>1</td>
 	<td>De witte haai</td>
 	<td>23-04-2014</td>
 	<td>450</td>
 	<td>color</td> 
 	<td>
 	  <a href=''>
 		<img src='images/show_fotos.png'
 			 alt='Bekijk de fotos' />
 	  </a>
 	</td>	
 </tr>
 <?php OrderClass::find_orders_by_user_id();  ?>
</table>

