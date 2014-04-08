<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			website fotosjaak
		</title>
		<link rel='stylesheet' 
			  type='text/css' 
			  href='./css/style.css'/>
		
		<link rel="stylesheet"
			  type='text/css'			  href="jquery/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css" />
			
		<!-- Hier wordt de jquery bibliotheek toegevoegd aan de site -->
		<script style='text/javascript'
			    src='./jquery/jquery-1.11.0.min.js'></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Hier wordt de jquery ui bibliotheek toegevoegd aan de site -->
		<script 			src="jquery/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.min.js">			
		</script>
		<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>	
	
	</head>
	<body >
		<div id='container'>
			<div id='banner'>
				<?php include("banner.php"); ?>		
			</div>
			<div id='content'>
				<div id='link'>
					<?php include("link.php"); ?>
				</div>
				<?php include("navigation.php"); ?>			
			</div>
			<div id='footer'>			
				contact | disclaimer | copyright | tools | privacy | advertisement
			</div>
		</div>
	</body>
</html>