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

	//-----------------Prossesing and showing
		echo "<h2>Variant_2</h2>";
		
		for ($i=0; $i < count($country); $i++) 
		{ 
			if ($i==count($country)-1) 
			{
				echo $country[$i];
			}
			else 
			{
				echo $country[$i].', ';
			}
		}
		
		echo "<br><em>using trim</em>";
		$text="";
		
		for ($i=0; $i < count($country); $i++) 
		{ 
			$text.=$country[$i].", ";
		}
		echo "<br>".trim($text,", ");

	//-----------------Prossesing and showing
		echo "<h2>Variant_3</h2>";
		$text="";
		
		for ($i=0; $i < count($country); $i++) 
		{ 
			$text.='<li>'.$country[$i].'</li>';
		}
		echo "<ul>".$text."</ul>";

		echo "<br>Total count country: ".count($country);
		
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