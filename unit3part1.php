<!doctype html>
<html>
	<head>
		<title>Assignment 3 part 1</title>
		<h1></h1>
	</head>
	
	<script src=""></script>	
	<body>
	<?php
	/*Here is my Php code */
	echo "<strong>Printing without sorting: <strong> <br>";
	$cities= array(	"New York, NY " => "8175133",
					"Los Angeles, CA" => "3792621",
					"Chicago, IL" =>"2695598",
					"Houston, TX" => "2100263",
					"Philadelphia, PA" => "1526006",
					"Phoenix, AZ" => "1445632",
					"San Antonio, TX" =>" 1327407",
					"San Diego, CA" => " 1307402",
					"Dallas, TX" => " 1197816",
					"San Jose, CA" => "945942");
	function print_array($Ft_array){
		echo"<table>";
		echo"<td> City </td> <td> Pupulation</td>";
		foreach ($Ft_array as $ft_array => $value) {
		echo "<tr><td>".$ft_array."</td><td>".$value."</td></tr>";
		}
		echo"</table>";
		}
	print_array($cities);
	?>
	</body>
</html>
