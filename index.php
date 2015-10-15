<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kiir php starting page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="wrapper">
			<h1>Test</h1>
			<?php
				echo "hello";
			?>
			<h2>Varibles</h2>
			<?php  
				$num1=10;
				$num2=5.25;
				$sum=$num1+$num2;
				echo "Variant1<br>$sum<br>";
				echo "Variant2<br>".$sum."<br>";

				echo "IF-statement<br>";
				if ($num1>$num2) {
					echo $num1.'<br>';
				}
			?>
			<a href="http://blogs.msdn.com/b/davrous/archive/2013/06/13/tutorial-series-learning-how-to-write-a-3d-soft-engine-from-scratch-in-c-typescript-or-javascript.aspx">3D soft engine</a>
		<?php
				$str='red, blue, green, yellow';
				$colors=explode(', ', $str);
				echo "<br>".$str."<br>";
				print_r($colors);

				$pasta = array('spaghetti', 'penne', 'macaroni');

				// add an element to the beginning

				array_unshift($pasta, 'tagliatelle');

				print_r($pasta);
		?>
	</div>
</body>
</html>