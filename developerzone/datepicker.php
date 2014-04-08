<?php
	// Beveiliging dat alleen een root of developer op
	// deze pagina kunnen komen 
	$userrole = array('root', 'developer');
	include("security.php");
?>
<p><u>Datepicker met JQueryUI</u></p>

<script>
	$(document).ready(function(){
		$('#datepicker').datepicker({dateFormat: "dd-mm-yy",
		dayNamesMin: [ "Zo", "Ma", "Di", "Wo", "Do", "Vrij", "Za" ],
		showWeek: true,
		monthNames: [ "januari", "februari", "maart", "april", "mei", "jason", "juli", "augustus", "september", "oktober", "november", "december" ]});
	});	
</script>


<!-- Maak een formulier met een textvak. dit wordt het 
	 datpicker element -->
<form action='' method='post'>
	<input type='text' id='datepicker' name='date' />
</form>

