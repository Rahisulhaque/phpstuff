        <!doctype html>
<html>
	<head>
		<title>Unit 2 Assignment part</title>
		<h1>Php data type:</h1>
	</head>
	
	<script src=""></script>	
	<body>
	<?php
	/*Here is my Php code */
	$dataTypes = "Data type: ";
	
	$dataType = array("This is array", 2.2, true, 85,NULL);
	
	foreach($dataType as &$value)
		{
			echo $dataTypes , gettype($value)," <br>";
		} 
	
	?>
	</body>
</html>
