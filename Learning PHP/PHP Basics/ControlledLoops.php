<?php
echo "Controlled Loops<br>";

####### while Loop
echo "<br>####### while Loop<br>";

// Constants:
$init = 1;
$limit = 10;

// Example 1:
$i = $init;

while (++$i <= $limit) {
	echo "$i "; 			// prints: "2 3 4 5 6 7 8 9 10 ".
}

echo "<br>";

// Example 2:
$i = $init;

while ($i++ <= $limit) {
	echo "$i "; 			// prints: "2 3 4 5 6 7 8 9 10 11 ".
}

echo "<br>";

// Example 3:
$i = $init;

while ($i <= $limit) {
	echo ++$i . " "; 		// prints: "2 3 4 5 6 7 8 9 10 11 ".
}

echo "<br>";

// Example 4:
$i = $init;

while ($i <= $limit) {
	echo $i++ . " "; 		// prints: " 1 2 3 4 5 6 7 8 9 10 ".
}

echo "<br>";
##############################

####### do-while Loop
echo "<br>####### do-while Loop<br>";

// Do statements first, then while loop.

// Constants:
$init = 1;
$limit = 10;

// Example 1:
$i = $init;

do {
	echo "$i "; 			// prints: "1 2 3 4 5 6 7 8 9 10 ".
	++$i;
} while ($i <= $limit);

echo "<br>";

// Example 2:
$i = $init;

do {
	echo "$i "; 			// prints: "1 2 3 4 5 6 7 8 9 10 ".
} while (++$i <= $limit);

echo "<br>";

// Example 3:
$i = $init;

do {
	echo "$i "; 			// prints: "1 2 3 4 5 6 7 8 9 10 11 ".
} while ($i++ <= $limit);

echo "<br>";

// Example 4:
$i = $init;

do {
	echo ++$i . " "; 		// prints: "2 3 4 5 6 7 8 9 10 11 ".
} while ($i <= $limit);

echo "<br>";

// Example 5:
$i = $init;

do {
	echo $i++ . " "; 		// prints: "1 2 3 4 5 6 7 8 9 10 ".
} while ($i <= $limit);

echo "<br>";
##############################

####### for Loop
echo "<br>####### for Loop<br>";

// Constants:
$init = 1;
$limit = 10;

// Increment included in for statement:
for ($i = $init; $i <= $limit; $i++) {
	echo "$i "; 			// prints: "1 2 3 4 5 6 7 8 9 10 ".
}

echo "<br>";

// Increment not included in for statement:
for ($i = $init; $i <= $limit;) {
	echo "$i "; 			// prints: "1 2 3 4 5 6 7 8 9 10 ".
	$i++;
}

echo "<br>";
##############################

####### Defining Limits
echo "<br>####### Defining Limits<br>";
//When the boundary limits are fixed as in the previous examples,
//		constants are more efficient.
// The difference is not measurable within the scope of this course.

// Constants:
define ('INIT', 1); 
define ('LIMIT', 10); 

$i = INIT;

while ($i <= LIMIT) {
	echo "$i "; 			// prints: "1 2 3 4 5 6 7 8 9 10 ".
	++$i;
}

echo "<br>";
##############################

####### Logical Connectives and operators
//(not, and, or, xor) operators have lower precedence than 
// 		the operators (!, &&, ||) and lower precedence than
// 		the ternary conditional (?:) and assignment operators.
// This causes confusion for some developers.

//  A      B    | !(not)A 	A(&&)(and) B    A ||(or) B   A xor B
//false  false  |  true      false           false        false
//false  true   |  true      false           true         true
//true   false  |  false     false           true 	   	  true
//true   true   |  false     true            true  	      false
##############################

####### Compound Conditions
echo "<br>####### Compound Conditions<br>";

// Conditionally controlled loop where condition is a logical
// 		conjunction:
$i = 1;
$j = 15;

while ($i < 5 && $j > 10) {
	echo "\$i=" . $i++ . "  \$j=" . $j-- . "<br>";
							// prints: "$i=1 $j=15" and
							//		   "$i=2 $j=14" and
							//		   "$i=3 $j=13" and
							//		   "$i=4 $j=12".
}

echo "<br>";

// Conditionally controlled loop where condition is a logical
// 		disjunction:
$i = 1;
$j = 15;

while ($i < 5 || $j > 10) {
	echo "\$i=" . $i++ . "  \$j=" . $j-- . "<br>";
							// prints: "$i=1 $j=15" and
							//		   "$i=2 $j=14" and
							//		   "$i=3 $j=13" and
							//		   "$i=4 $j=12" and
							//		   "$i=5 $j=11".
}

echo "<br>";

// Conditionally controlled loop where condition is a exclusive
// 	disjunction:
$i = 1;
$j = 15;

while ($i < 5 xor $j > 15) {
	echo "\$i=" . $i++ . "  \$j=" . $j++ . "<br>";
							// prints: "$i=1 $j=15".
}

echo "<br>";
##############################
?>