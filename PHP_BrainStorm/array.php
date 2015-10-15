<h3>2.1 Array</h3>
<p> $pizzaToppings = array('onion',
 'tomato', 'cheese', 'anchovies', 'ham', 'pepperoni');<br>

print_r($pizzaToppings);<br><br>
Result:<br>
<?php
		$pizzaToppings = array('onion', 'tomato', 'cheese',
		 'anchovies', 'ham', 'pepperoni');

		print_r($pizzaToppings);
  ?> </p>
<h3>2.2 Array with keys</h3>
<<p>
	
	$fruits = array('red' => 'apple', 'yellow' => 'banana',
	 'purple' => 'plum', 'green' => 'grape');<br>

	print_r($fruits);<br><br>
	Result:<br>
	<?php 

		$fruits = array('red' => 'apple', 'yellow' => 'banana',
		 'purple' => 'plum', 'green' => 'grape');

		print_r($fruits);

	 ?>


</p>
<h3>2.3 Array assigment</h3>
<h4>2.3.1 Standart</h4>
<p>$pasta = array('spaghetti', 'penne', 'macaroni');</p>
<h4>2.3.2 By index</h4>
<p>$pasta[0] = 'spaghetti';<br>
$pasta[1] = 'penne';<br>
$pasta[2] = 'macaroni';</p>
<h4>2.3.2 By key</h4>
<p>$menu['breakfast'] = 'bacon and eggs';<br>
$menu['lunch'] = 'roast beef';<br>
$menu['dinner'] = 'lasagna';</p>
<h3>2.4 Add to array</h3>
<h4>2.4.1 Standart by index, modify value smae way</h4>
<p>$pizzaToppings[3] = 'green olives';</p>
<h4>2.4.2 Standart by key</h4>
<p>$menu['lunch'] = 'steak with mashed potatoes';</p>
<h4>2.4.3 array_push()</h4>
<p>Add new value to the end of an existing array<br><br>
$pasta = array('spaghetti', 'penne', 'macaroni');<br>

// add an element to the end<br>

array_push($pasta, 'tagliatelle');<br>

print_r($pasta);
</p>
<h4>2.4.4 array_pop()</h4>
<p>Remove the element form end of existing array<br><br>
$pasta = array('spaghetti', 'penne', 'macaroni');<br>

// remove an element from the end<br>

array_pop($pasta);<br>

print_r($pasta);<br>
</p>
<h4>2.4.5 array_shift(), dont work with key arrays</h4>
<p>Remove the first element off array<br><br>
$pasta = array('spaghetti', 'penne', 'macaroni');<br>

// take an element off the top<br>

array_shift($pasta);<br>

print_r($pasta);
</p>
<h4>2.4.6 array_unshift(), dont work with key arrays</h4>
<p>Add to beginning of array new element<br><br>
$pasta = array('spaghetti', 'penne', 'macaroni');<br>

// add an element to the beginning<br>

array_unshift($pasta, 'tagliatelle');<br>

print_r($pasta);
</p>
<h4>2.4.7 explode(', ', $str)</h4>
<p>Split string to array pieces by user-defined delimiter<br><br>
$str = 'red, blue, green, yellow';<br>

// split into individual words<br>

$colors = explode(', ', $str);<br>

print_r($colors);<br>
</p>
<h4>2.4.8 implode(' and ', $colors)</h4>
<p>Make string from array with user-defined delimiter<br>
$colors = array ('red', 'blue', 'green', 'yellow');<br>

// join into single string with 'and'<br>

// returns 'red and blue and green and yellow'<br>

$str = implode(' and ', $colors);<br>

print $str;
 </p>
 <h4>2.4.9 sort() and rsort()</h4>
 <p>sort an array alphabetically (ornumerically),
  in ascending and descending order respectively<br>


// define an array<br>
$pasta = array('spaghetti', 'penne', 'macaroni');<br>

// returns the array sorted alphabetically<br>

sort($pasta);<br>

print_r($pasta);<br>

// returns the array sorted alphabetically in reverse<br>

rsort($pasta);<br>

print_r($pasta);<br>
<?php 
				

		// define an array
		$pasta = array('spaghetti', 'penne', 'macaroni');

		// returns the array sorted alphabetically

		sort($pasta);

		print_r($pasta);

		print "<br />";

		// returns the array sorted alphabetically in reverse

		rsort($pasta);

		print_r($pasta);

 ?>
  </p>
<h4>2.4.10 array_keys() and array_values()</h4>
<p>// define an array<br>
$menu = array('breakfast' => 'bacon and eggs',
 'lunch' => 'roast beef', 'dinner' => 'lasagna');<br>

/* returns the array ('breakfast', 'lunch', 'dinner')
 with numeric indices */<br>

$result = array_keys($menu);<br>

print_r($result);<br>

/* returns the array ('bacon and eggs', 'roast beef',
 'lasagna') with numeric indices */<br>

$result = array_values($menu);<br>

print_r($result);<br></p>