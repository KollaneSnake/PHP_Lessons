<?php
	function my_calc($num1, $num2, $action)
	{	
		if ($action=="+") 
		{
			echo $num1.$action.$num2."=".number_format($num1+$num2, 2, ',', ' ');
		}
		elseif ($action=="-") 
		{
			echo $num1.$action.$num2."=".$num1-$num2;
		}
		elseif ($action=="*") 
		{
			echo $num1.$action.$num2."=".$num1*$num2;
		}
		elseif ($action=="/") 
		{
		 	if ($num2==0) 
		 	{
		 		echo $num1.$action.$num2."="."cant divide by 0";
		 	}
		 	else 
		 	{
		 		echo $num1.$action.$num2."=".$num1/$num2;
		 	}
		}
		else
		{
			echo $num1.$action.$num2."="."can make this action";
		}
		return $result;

	}