<?php

	function color_table($x, $y)
	{
		$text='';
		$nA=65;
		$text.="<table id='colortab'>";

		for ($i=0; $i <= $y; $i++) 
		{ 
			$text.="<tr class='colortr'>";
			for ($j=1; $j <= $x; $j++) 
			{ 
				if ($i==0) 
				{
					$text.="<td class='colorh'>".$j."</td>";
				}
				else if ($i%2==0) 
				{				
					$text.="<td class='colorPair'>".chr($nA+$i-1)."</td>";
				}
				elseif ($i%2!=0&&$j%2==0)
				{
					$text.="<td class='colorNoPair'>".chr($nA+$i-1)."</td>";
				}
				else
				{
					$text.="<td class='colorless'>".chr($nA+$i-1)."</td>";
				}
			}
			$text.='</tr>';	
		}
		$text.="</table>";
		return $text;

	}