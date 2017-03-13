<html>
	<body>
		<?php
		// As with sanitization, PHP makes validation of user input easy. 
		// Validation ensures that the data returned for each form field matches the type 
		//		of data the script expects for that field.
		
		// The following code checks if the data posted is a validly formed email address. 
		// Note that the code contains a major security flaw. 
		// It validates but does not sanitize the user input.
		
		// https://www.w3schools.com/Php/php_ref_filter.asp For filter types
		// https://www.w3schools.com/php/php_filter.asp too
		if (isset ($_POST['sometext'])) {
			$sometext = $_POST['sometext'];
			
			// Try FILTER_VALIDATE_URL
			if (filter_var($sometext, FILTER_VALIDATE_EMAIL) && filter_var($sometext, FILTER_SANITIZE_EMAIL)) {
				echo "$sometext is a valid email address\n<br>\n";
			}
			else {
				echo "$sometext is not a valid email address\n<br>\n";
				echo "Please re-enter\n<br>\n";
			}
		}
		?>
	
		<form method="post" action="InputValidation.php">
		 	Enter some text: <input type="text" name="sometext">
		 	<input type="submit">
		</form>
	</body>
</html>