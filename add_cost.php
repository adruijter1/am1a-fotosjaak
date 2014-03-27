<?php 
	$userrole = array('root', 'photographer');
	include("security.php");
	require_once('class/OrderClass.php');
	
	if (isset($_POST['submit']))
	{	
		OrderClass::update_cost_by_order_id($_POST['add_cost'], $_POST['order_id']);	
	}
	else 
	{
?>
<style>
input
{
	padding:1em;
}
</style>

<p>Geef hier de prijs op in euro's voor de opdracht</p>
<table>
  <form method="post" action="">
  	<tr>
	  	<td>prijs:</td>
	  	<td>
	  	  <input type='text' name='add_cost' />
	  	</td>
	  	</tr>
  	<tr>
  	  <td>&nbsp;</td>
  	  <td>
  		<input type='submit' name='submit' />
  		<input type='hidden'
  			   name='order_id' 
  			   value='<?php echo $_GET['order_id']; ?>' />
  	  </td>
  	</tr>
  	  
  </form>
</table>
<?php
	}
?>