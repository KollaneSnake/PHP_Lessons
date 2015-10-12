<?php
	
	$text="";
	$k=0;

	foreach ($meny as $v) 
	{
		if ($k==0) 
		{
			$text.='<li><a href="'.$_SERVER['PHP_SELF'].'">'.$v.'</a>';
		}
		else
		{
			$text.='<li><a href="'.$_SERVER['PHP_SELF'].'?page='.$k.'">'.$v.'</a>';
		}
		$k++;
	}
	echo '<ul>'.$text.'</ul>';