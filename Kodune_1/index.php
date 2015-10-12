<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tabel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Color table</h1>

		<?php
		 require "make_table.php";
		 $tableRows=3;
		 $tableColumns=5;

		 echo color_table($tableColumns,$tableRows);

		?>
</body>
</html>