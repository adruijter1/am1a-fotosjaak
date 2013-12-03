<h3>Dit is de logintest pagina</h3><hr>
<?php
	// Include de LoginClass
	require_once('class/LoginClass.php');
	
	$loginClassObj = new LoginClass();
	
	$query = "SELECT * FROM `login`";
	
	$result_array = $loginClassObj->find_by_sql($query);

	foreach ( $result_array as $value)
	{
		echo $value->get_id()."<br>";
	}
?>
