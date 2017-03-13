<?php
echo "Scalar Variables<br>";

####### Variable Names  
// Case sensitive.
// Prefixed with dollar sign ($).
// Contains alphanumeric and underscores.
##############################

####### Constants
define("SALESTAX", "13");
##############################

####### Typecasting 
echo "<br>####### Typecasting<br>";

// PHP is weakly typed; type is determined at invocation, and value can be recast.
$a = 5;         							// This is an integer.
$b = 5.1;     					    		// This is a floating point number.
$c = TRUE;      							// This is a boolean value.
$e = "5.1";     							// This is a string.
$f = "TRUE";    							// This is a string.

echo "$a is an integer<br>";  				// prints: "5 is an integer".
echo "$b is floating point<br>";			// prints: "5.1 is a floating point".
echo "$c is boolean<br>"; 					// prints: "1 is a boolean".
echo "$e is a string<br>"; 					// prints: "5.1 is a string".
echo "$f is a string<br>"; 					// prints: "TRUE is a string".

// This casts the assigned value explicitly.
$f1 = (boolean) $f;

echo "$f1 = $f<br>"; 						// prints: "1 = TRUE".

// This casts the assigned value implicitly.
$f2 = $f;

echo "$f2 = $f<br>"; 						// prints: "TRUE = TRUE".
##############################

####### Pass by Value/Pass by Reference
echo "<br>####### Pass by Value/Pass by Reference<br>";

// Differences between passing by value and passing by reference:
$a = 5;
$c = 1;
$b = $a;      								// Assign by value.
$d = &$c;     								// Assign by reference.

echo "$a = $b<br>$c = $d<br>"; 				// prints: "5 = 5" and "1 = 1".

$a = 4;
$c = 2;

echo "$a = $b<br>$c = $d<br>"; 				// prints: "4 = 5" and "2 = 2".

$b = 7;
$d = 9;

echo "$a = $b<br>$c = $d<br>"; 				// prints: "4 = 7" and "9 = 9".
##############################

####### Assignment Operators
echo "<br>####### Assignment Operators<br>";

$a = 11;
$b = 3;
$c = $a + $b;
$c += $b;

echo "$c<br>"; 								// prints: "17".
##############################

####### Chained Assignment
echo "<br>####### Chained Assingment<br>";

$a = $b = $c = 2 + 2;

echo "$a, $b, $c" . "<br>";    				// prints: "4, 4, 4".
##############################

####### Increment and Decrement Operators
echo "<br>####### Increment and Decrement Operators<br>";

// Increment: prefix ++$a, postfix $a++.
// decrement: prefix --$a, postfix $a--.
$a = 1;
$a = $a + 1;
$a += 1; 									// a is now 3.
++$a;										// a is now 4.
$a++;										// a is now 5.

echo ++$a . "<br>";      					// prints: "6", a is now 6.
echo $a++ . "<br>";							// prints: "6", a is now 7.
echo $a . "<br>";							// prints: "7".

$a = $a - 1;								// a is now 6.
$a -= 1;									// a is now 5.

echo "$a<br>";  							// prints: "5".
	
--$a;										// a is now 4.

echo "$a<br>"; 								// prints: "4".

$a--;										// a is now 3.

echo "$a<br>";  		 					// prints: "3".
echo --$a . "<br>";							// a is now 2, prints: "2".
echo $a-- . "<br>";				 			// prints: "2", a is now 1.
echo $a . "<br>";				   			// prints: "1".
##############################

####### String Concatenation
echo "<br>####### String Concatenation<br>";

// Explicit concatenation operator "dot" (.).
$a = 'hello';
$b = 'world';

echo $a, $b . "<br>"; 						// prints: "helloword".
echo '$a, $b<br>'; 							// prints: "$a, $b".
echo "$a, $b<br>";			 				// prints: "hello, world".

$c = '$a, $b';

echo "$c<br>";			 					// prints: "$a, $b".

$c = "$a, $b";

echo "$c<br>";			 					// prints: "hello, world".

$c = $a . $b;

echo "$c<br>";			 					// prints: "helloworld".

$c .= $a;		

echo $c . "<br>";							// prints: "helloworldhello"

##############################
####### Escape Character
echo "<br>####### Escape Character<br>";

// \n linefeed
// \r carriage return
// \t horizontal tab
// \v vertical tab
// \f form feed
// \\ backslash
// \$ dollar sign
// \" double quote
// \' single quote

$a = 5;

echo "The value of \$a is $a<br>"; 			// prints "The value of $a is 5"
##############################
?>