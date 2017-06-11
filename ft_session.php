<?php
session_start();
?>
<!doctype html>
<html>
<head>
	<title>Page view </title>
	<h1>Session test</h1>
</head>

<body>
<?php


if (isset($_SESSION["view"]))
	{
		$_SESSION["view"] = $_SESSION["view"] + 1;
	}
else
	$_SESSION["view"] = 1;

echo"Total number of view is ",$_SESSION["view"];

?>
</body>
</html>
