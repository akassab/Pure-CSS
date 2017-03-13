<?php 
echo "Array Handling<br>";

####### Indexed Arrays
echo "<br>####### Indexed Arrays<br>";

// Composite data type; multiple scalar elements.
// PHP implements an array as a map (key-value pair(integer, any-data)).

// Initialize with "array" keyword
$food = array ('beef<br>', 'potatoes<br>', 'carrots<br>');

// Calling
echo $food[0]; 										// prints: "beef"
echo $food[1]; 										// prints: "potatoes"
echo $food[2]; 										// prints: "carrots"
##############################

####### foreach Loop
echo "<br>####### foreach Loop<br>";

// Basic Method:
$food = array ('beef', 'potatoes', 'carrots', 'turnips', 'beets');

$max = count ($food) - 1;  							// find the number of elements and 
						   							// 		 subtract 1 to correct the 
						   							//		 offset.
						   					
for ($i = 0; $i <= $max; $i++) {
	echo "$food[$i]<br>"; 							// prints: "beef" and "potatoes" and "carrots" and
						  							// 		 "turnips" and "beets". 
}

echo "<br>";

// Foreach loop method:
$food = array ('beef', 'potatoes', 'carrots', 'turnips', 'beets');

foreach ($food as $bite) {
	echo "$bite<br>";	  							// prints: "beef" and "potatoes" and "carrots" and
						  							// 		 "turnips" and "beets". 
}
##############################

####### Queues
echo "<br>####### Queues<br>";

// The queue operates on a "first in first out" (FIFO) 
//		or a "last in last out" (LILO) basis.

$food = array ('beef', 'potatoes', 'carrots', 'turnips', 'beets');

array_push ($food, 'fish');
array_push ($food, 'venison');

foreach ($food as $bite) {
	echo "$bite<br>";								// prints: "beef" and "potatoes" and "carrots" and
													//			"turnips" and "beets" and "fish" and 
													//			"venison".
}

echo "<br>";

$taste = array_shift ($food);
$sample = array_shift ($food);

foreach ($food as $bite) {
	echo "$bite<br>";								// prints: "carrots" and "turnips" and "beets" and 
													// 			"fish" and "venison".
}

echo "<br>";
echo "$sample<br>$taste<br>";						// prints: "potatoes" and "beef".
##############################

####### Stacks
echo "<br>####### Stacks<br>";

// The stack operates on a "last in first out" (LIFO)
//		or a "first in last out" (FILO) basis.

$food = array ('beef', 'potatoes', 'carrots', 'turnips', 'beets');

array_push ($food, 'fish');
array_push ($food, 'venison');

foreach ($food as $bite) {
	echo "$bite<br>";								// prints: "beef" and "potatoes" and "carrots" and
													//			"turnips" and "beets" and "fish" and 
													//			"venison".
}

echo "<br>";

$taste = array_pop ($food);					
$sample = array_pop ($food);				

foreach ($food as $bite) {		
	echo "$bite<br>";								// prints: "beef" and "potatoes" and "carrots" and
}													//			"turnips" and "beets".

echo "<br>";
echo "$taste<br>$sample<br>";						// prints: "venison" and "fish".
##############################

####### Exploding and Imploding Arrays
echo "<br>####### Exploding and Imploding Arrays<br>";

// "explode" turns a string into an array. In the following example, a
//		string of words separated by spaces is converted into an array.
$ingredients = 'beef potatoes carrots turnips beets';
$food = explode (' ', $ingredients);

foreach ($food as $bite) {
	echo "$bite<br>";								// prints: "beef" and "potatoes" and "carrots" and 
													//			"turnips" and "beets".
}

echo "<br>";

// "implode" turns an array into a string. In the following example, an
//		array is converted into a string of words separated by spaces.
$food = array ('beef', 'potatoes', 'carrots', 'turnips', 'beets');
$ingredients = implode (' ', $food);

echo $ingredients . "<br>";							// prints: "beef potatoes carrots turnips beets".
##############################

####### Multi-dimensional Arrays
echo "<br>####### Multi-dimensional Arrays<br>";

// An array can consist of other arrays. Each of those arrays may be 
//		composed of other arrays that may consist of other arrays. 

// Example of a two dimensional array can be expanded to multiple dimensions:
$meat = array ('beef', 'mutton', 'poultry', 'venison');
$fruits = array ('apples', 'oranges', 'peaches', 'pears');
$veggies = array ('potatoes', 'carrots', 'turnips', 'beets');
$dairy = array ('yogurt', 'curds', 'whey', 'ice cream');
$grain = array ('barley', 'rice', 'oats', 'maize');

$food =array($meat,$fruits,$veggies,$dairy,$grain);  // Now 2 dimensional.

echo "<table border=\"1\">\n";
echo "  <tr><th>Meats</th><th>Fruits</th><th>Veggies</th>";
echo "<th>Dairy</th><th>Grains</th></tr>\n";

for ($i = 0; $i <= 3; $i++) {          				 // rows.
	echo "  <tr>";
	for ($j = 0; $j <= 4; $j++) {       			 // columns.
		
		echo "\n    <td>";
		echo $food[$j][$i];             			 // cells.
		echo "</td>";
	}
	echo "\n  </tr>\n";
}

echo "</table>\n";
##############################

####### Associative Arrays
echo "<br>####### Associative Arrays<br>";

// An associative array is a type of array in which the 
// 		index key does not have to be numerical. 

// The following script lists every Tom, Dick, and Harry who 
//		has been president of the United States:
$president = array ('tom' => 'Thomas Jefferson',
		'harry' => 'Harry Truman',
		'dick' => 'Richard Nixon');

echo $president['tom'] . "<br>"; 					 // prints: "Thomas Jefferson".
echo $president['dick'] . "<br>";					 // prints: "Harry Truman".
echo $president['harry'] . "<br>";					 // prints: "Richard Nixon".

echo "<br>";

// After our impoverished neighbour becomes our eleventh province,
//		we can appoint one of our own as president:
$president = array ('tom' => 'Thomas Jefferson',
		'harry' => 'Harry Truman',
		'dick' => 'Richard Nixon');

$president['sid'] = 'Sidney Crosby';
foreach ($president as $nickname => $fullname) {
	echo "$nickname: $fullname<br>";				// prints: "tom: Thomas Jefferson" and
													//			"harry: Harry Truman" and
													//			"dick: Richard Nixon" and
													//			"sid: Sidney Crosby".
}

echo "<br>";

// The array can be sorted by keys:
ksort ($president);

foreach ($president as $nickname => $fullname) {
	echo "$nickname: $fullname<br>";				// prints: "dick: Richard Nixon" and 
													//			 "harry: Harry Truman" and 
													//			 "sid: Sidney Crosby" and 
													//			 "tom: Thomas Jefferson".
}
##############################

####### Superglobal Variables
echo "<br>####### Superglobal Variables<br>";

// Superglobal variables are pre-defined variables that provide scripts
// 		with information such as the web server's operating environment 
// 		and information received by the server from the browser. 
// PHP makes superglobal variables available to scripts via associative arrays.
// The multi-dimensional associative array $GLOBALS lists the current script's
//		global variables including the superglobal variables.

foreach ($_SERVER as $key => $value) {
	echo "$key: $value<br>";						// prints: .... A LOT.
}
##############################

####### Exposing Server Configuration
// The "$_SERVER" superglobal variable provides information that helps the developer
//		to debug scripts and manage client interaction. The script also provides 
//		information that helps the attacker to formulate an attack.

// "phpinfo" function provides developers and administrators indispensable data on
//		system configuration. The same information is indispensable to attackers.


// Administrators may take the additional step of disabling some features via php.ini.

// The disable_functions directive lists functions that the administrator wishes to disable.
// For example, disable_functions = phpinfo will prevent scripts from using the phpinfo function.
// Additionally, administrators may attempt to hide the fact the PHP is in use by disabling 
//		expose_php and display_errors in php.ini.
##############################
?>