<html>
	<body>
		<?php
		// The preceding form examples always return the user to the same page and redisplay the form.
		// An entire web site can consist of a single PHP script, but the script will become complex and 
		//		unmanageable as the functionality of the web site grows.
		//  A simple solution is to allow a script to pass control to another script by using HTTP 
		//		to redirect the browser.
		
		// The header function allows PHP to set HTTP headers that the server will send to the browser.
		//The following code accepts input from the user and redirects the user to another script if the input is valid:
		
			if (isset ($_POST['somenum'])) {
				$somenum = filter_var($_POST['somenum'], FILTER_SANITIZE_NUMBER_INT);
				header ("Location: HiddenData.php");
			}
		?>
	
		<form method="post" action="Redirection.php">
			 Enter an integer: <input type="text" name="somenum">
			 <input type="submit">
		</form>
	</body>
</html>