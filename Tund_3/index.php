<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Function</title>
</head>
<body>
	
	<h1>Function</h1>
	

	<?php

		require "f_calc.php";
		require "f_maket.php";

		echo "<h2>Calculations_1</h2>";
		my_calc("2","3","+");

		echo "<h2>Calculations_2</h2>";
		$n1=100;
		$n2=10;
		$action="+";
		my_calc("$n1","$n2","$action");

		echo "<h2>Calculations_3</h2>";
		$n1=100;
		$n2=0;
		$action="/";

		my_calc("$n1","$n2","$action");
		echo make_table(7,7);




		

	?>



</body>
</html>