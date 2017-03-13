<?php
// The previous examples return a blank form to the browser at each iteration.
// If a form with many fields was returned to the user blank because of an error in one field, 
//		the user would have to enter all fields again instead of only correcting the error.

// The following example serves a blank form on the first iteration and retains data on re-iterations:
// The script performs basic sanitization to avoid sending unclean HTML code back to the user.

	if (isset ($_POST['sometext'])) {
		$sometext = htmlentities ($_POST['sometext']);
		echo "You entered: <em>$sometext</em><br>\n";
	}
	
	echo "<form method=\"post\" action=\"Retention.php\">\n";
	echo " Enter some text: ";
	echo " <input type=\"text\" name=\"sometext\"" . (isset ($sometext) ? " value=\"$sometext\">\n" : ">\n");
	echo " <input type=\"submit\">\n";
	echo "</form>\n";
?>