<?php
echo "Conditional Statements<br>";

####### Relational Operators
// $a == $b $a is equal to $b.
// $a != $b $a is not equal to $b.
// $a <> $b $a is not equal to $b.
// $a < $b $a is strictly less than $b.
// $a <= $b $a is less than or equal to $b.
// $a > $b $a is strictly greater than $b.
// $a >= $b $a is greater than or equal to $b.

// A single equal assigns the right side value to the left side variable.
// A double equal compares the values on the left and right sides.

// $a === $b $a is equal to $b and of the same type .
// $a !== $b $a is not equal to $b or not the same type .
##############################

####### if-else Statement
echo "<br>####### if Statement<br>";

// One statement in the if branch:
$a = 6;
$b = 5;

if ($a > $b) echo "$a is greater than $b" . "<br>"; 		// prints "6 is greater than 5".

// Multiple statements in the if branch, requires block:
$a = 6;
$b = 5;

if ($a > $b) { 
	echo $a;												// prints: "6 is greater than 5".
	echo " is greater than ";
	echo $b . "<br>";
}
elseif ($a == $b) {
	echo "$a is equal to $b<br>";							// if called: prints "5 is equal to 6".
}
else {
	echo "$a is less than $b<br>"; 							// if called: prints "5 is less than 6".
}
##############################

####### ?:
echo "<br>####### ?:<br>";
// Ternary conditional operator "?:" an alternative to  the if-else statement.

// Example longer code:
$a = 5;
$b = 6;

if ($a < 0) {
	echo "$a is negative<br>";
}
else {
	echo "$a is not negative<br>"; 						 	// is called, prints: "5 is not negative".
}

// Same as above! shorter
echo($a < 0)?"$a is negative<br>":"$a is not negative<br>"; // prints: "5 is not negative".

// The following shows a "?:" expression as part of another expression:
$ch = 100 + (($a < $b) ? $a : $b) * 15;

echo "$ch<br>";  											// prints: "175".
##############################

####### Switch Statement
echo "<br>####### Switch Statement<br>";

// Example code, long version:
$a = 5;

if ($a == 1) {
	echo "\$a is equal to 1";
}
elseif ($a == 2) {
	echo "\$a is equal to 2";
}
elseif ($a == 3) {
	echo "\$a is equal to 3";
}
elseif ($a == 4) {
	echo "\$a is equal to 4";
}
elseif ($a == 5) { // is called
	echo "\$a is equal to 5<br>"; 							 // prints: "$a is equal to 5".
}
else {
	echo "\$a is greater than 5";
}

// Same as above, shorter version:
// Must include "break" after every case.

switch ($a) {
	case 1:
		echo "\$a equals 1";
		break;
	case 2:
		echo "\$a equals 2";
		break;
	case 3:
		echo "\$a equals 3";
		break;
	case 4:
		echo "\$a equals 4";
		break;
	case 5: 												 // is called.
		echo "\$a equals 5<br>"; 							 // prints: "$a is equal to 5".
		break;
	default:
		echo "\$a is greater than 5";
}
##############################
?>