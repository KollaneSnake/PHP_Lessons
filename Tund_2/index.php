<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array</title>
</head>
<body>

	<h1>Array</h1>
	<?php
	 	define("CONSTANT", "Constant_Value, just for example");
	 	echo CONSTANT;
	?>
	<?php 
		$country= array("Estonia","Russia","Norway","Germany");

	//-----------------Prossesing and showing
		echo "<h2>Variant_1</h2>";
		$text="";
		$k=0;
		foreach ($country as $v) {
			$k++;
			if ($k==count($country)) 
			{
				$text.=$v;
			}
			else 
			{
				$text.=$v.', ';
			}
		}
		echo "<br>".$text;
	/*
	$a == $b 	true если $a равно $b
	$a === $b 	true если $a равно $b и они имеют один и тот же тип
	$a != $b или $a <> $b 	true если $a не равно $b
	$a > $b 	true если $a больше $b
	$a < $b 	true если $a меньше $b
	$a >= $b 	true если $a больше или равно $b
	$a <= $b 	true если $a меньше или равно $b 

	Пример 		Имя 	Результат
	$a and $b 	And 	TRUE, если и $a, и $b TRUE.
	$a or $b 	Or 		TRUE, если $a или $b TRUE.
	$a xor $b 	Xor 	TRUE, если $a или $b TRUE, но не оба.
	! $a 		Not 	TRUE, если $a не TRUE.
	$a && $b 	And 	TRUE, если и $a, и $b TRUE.
	$a || $b 	Or 		TRUE, если $a или $b TRUE. 
	*/
	?>
</body>
</html>