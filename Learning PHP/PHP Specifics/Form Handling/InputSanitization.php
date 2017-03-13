<html>
	<body>
		<?php
		// Having been designed as a web server scripting language, PHP makes sanitization of user input easy.
		// Sanitization removes hazardous material from user input or replaces the material with safer alternatives.
		
		// The following code sanitizes form data by replacing HTML tags with safe alternatives.
		
		// See for more:
		// https://www.w3schools.com/Php/php_ref_filter.asp For filter types
		// https://www.w3schools.com/php/php_filter.asp too
		
		 if (isset ($_POST['sometext'])) {
		 	// NEW
		 	// Try htmlentities
		 	// Try stripslashes
		 	// Try strip_tags
		 	// Use: <a href="https://www.w3schools.com">Go to w3schools.com</a>
		    $sometext = stripslashes($_POST['sometext']);
		    echo "You entered: \n";
		    echo $sometext;
		    echo "\n<br>\n";
		 }
		?>
	
		<form method="post" action="InputSanitization.php">
			 Enter some text: <input type="text" name="sometext">
			 <input type="submit">
		</form>
	</body>
</html>