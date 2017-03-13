<html>
	<body>
		<?php
		// The following code generates an HTML form consisting of a single field. 
		// The filename in the form action is the name of the page itself. 
		// For the code in this example to work as written, 
		//		the code should be saved in a file named gettext.php.
		
		// Fields from posted forms are returned via the $_POST superglobal array. 
		// Each field name used in the HTML form is the key to the associated value in $_POST. 
		
		// The first time a user loads the page, the page will contain no posted data since the
		//		user has not posted any data yet. The isset function tests if a value is set. 
		// If data has been posted, isset will return TRUE and the posted data will be displayed.
		
		// Since the input has not been either sanitized or validated, the code is a significant security risk.
		
		
			 if (isset ($_POST['sometext'])) {
			    $sometext = $_POST['sometext'];
			    echo "You entered: <em>$sometext</em><br>\n";
			    
			 }
		?>
	
		<form method="post" action="TextForms.php">
			 Enter some text: <input type="text" name="sometext">
			 <input type="submit" >
		</form>
	</body>
</html>