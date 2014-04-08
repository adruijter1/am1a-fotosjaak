<?php 
	require_once('class/OrderClass.php');
	OrderClass::update_confirm_cost($_GET['order_id'], $_GET['user_id']);
	$userrole = array('root', 'customer');
	include("security.php");	
?>