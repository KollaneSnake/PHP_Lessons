<?php
function make_table($x,$y)
{
	$text='';

	$text.='<table border="1" cellpadding="0" cellspacing="0">';
	for($i=1;$i<=$y;$i++)
	{	
		//---------color
		$color='#ff9';//white
		$text.='<tr style="background-color:'.$color.';">';
		
		for($j=1;$j<=$x;$j++)
		{			
			$text.='<td width=30 align=center>'.$i.':'.$j.'</td>';
		}
		
		$text.='</tr>';		
	}
	
	$text.='</table>';	
	
	return $text;	
}
?>