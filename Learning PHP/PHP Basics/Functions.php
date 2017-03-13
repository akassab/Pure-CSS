<?php
echo "Array Handling<br>";

####### Function Definition
echo "<br>####### Function Definition<br>";

// Function definition:
function hello1() {
	echo "hello, world<br>";
}

// Call:
hello1(); 						// prints "hello, world".
##############################

####### Arguments
// Programs can pass information to functions as arguments.

// Function definition:
function hello2($a) {   		// The parameter is $a.
	echo "hello, $a<br>";
}

// Calls:
hello2('world');        		// prints: "hello, world".
hello2('universe');     		// prints: "hello, universe".
##############################

####### Variable Scope
echo "<br>####### Variables Scope<br>";

// A variable can be given global scope by declaring the variable with
// 		the global keyword.

// Function definition:
function hello3($a) {
	global $h;
	$greeting = "$h, $a";
	echo $greeting . "<br>";
	echo "$h, $w <br>";
}

// Calls:
$h = 'hello';
$w = 'world';
$u = 'universe';

hello3($w); 					// prints: "hello, world" and "hello, ".
echo $greeting; 				// prints: "".
hello3($u); 					// prints: "hello, universe" and "hello, ".
echo $a; 						// prints: "".
##############################

####### Static Variables
echo "<br>####### Static Variablels<br>";

// Each time a function ends, all information that was local to the 
//		function is lost.
// Use static variables to save information in functions.
// Information will be  lost when main program ends.

// Function definition:
function counter() {		
	static $i = 1;
	echo $i . "<br>";
	$i++;
}

// Calls:
counter(); 						// prints: "1".
counter(); 						// prints: "2".
counter(); 						// prints: "3".
counter(); 						// prints: "4".
counter(); 						// prints: "5".
counter(); 						// prints: "6".
counter(); 						// prints: "7".
counter(); 						// prints: "8".
counter(); 						// prints: "9".
counter(); 						// prints: "10".
##############################

####### Call by Value/Call by Reference
echo "<br>####### Call by Value/Call by Reference<br>";

// Same as passing varaible by value or reference,
//		variable can be passed to a function in the same manner.
// Calling by reference makes the function more portable than using
//		using global variable does.

// Function definition:
function stringer1 (&$str1, $str2, $str3) {
	$str1 .= $str2 .= $str3;
}

// Calls:
$a = 'abc';
$b = 'def';
$c = 'ghi';

stringer1($a, $b, $c);

echo "$a<br>$b<br>$c<br>"; 		// prints: "abcdefghi" and "def" and "ghi".
##############################

####### Return
echo "<br>####### Return<br>";

// Used when function is intended to pass a value back to calling script
// 		essentially returning value to the caller.

// Function definition:
function stringer2 ($str1, $str2, $str3) {
	return $str1 . $str2 . $str3 . "<br>";
}

// Call:
$a = 'abc';
$b = 'def';
$c = 'ghi';

echo stringer2 ($a, $b, $c); 	// prints: "abcdefghi".
##############################

####### Recursion
echo "<br>####### Recursion<br>";

// Loops are iterative, anything computed by iteration can also
//		be computer by recurseive.
// Recursion can be done easier than iteration.
// The following replaces the first while loop from week 4.

// Constants:
define ('INIT', 1);
define ('LIMIT', 10);

// Function definition:
function fun1($i) {
	if ($i <= LIMIT) {
		echo "$i\n";
		fun1(++$i); 			// Recursive function call.
	}
}

// Call:
fun1(INIT); 					// prints: "1 2  3 4 5 6 7 8 9 10".
##############################

####### Include and require
echo "<br>####### Include and require<br>";

// Loading functions that are stored in a separate file (a library) using "include".
// If the library cannot be loaded, the calling script cannot function correctly.
// Require statement works the same way as the include, except is mandatory otherwise 
// 		program will fail.
// If a script requires two files and both those files require the same fourth file, 
// 		errors may occur due to attempting to load the same file twice hence use
//		"include_once" and "require_once"

// include 'main.php';
// include_once 'main.php';

// require 'main.php';
// require_once 'main.php';

##############################
?>