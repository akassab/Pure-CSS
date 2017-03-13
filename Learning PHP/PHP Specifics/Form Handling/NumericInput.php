<html>
	<body>
		<?php
		// Web servers send all form data to scripts as text. 
		// A string containing numeric values can be cast as a numeric type automatically. 
		// However, validating field data can verify if the data is integer or 
		//		floating point or if the value falls within a specified range of numbers.
		
		// The following code tests if the value of a field is an integer:
		$min = 1;
		$max = 5;
			if (isset ($_POST['somenum'])) {
				$somenum = $_POST['somenum'];
				if (filter_var($somenum, FILTER_VALIDATE_INT, array("options" => 
						array("min_range"=>$min, "max_range"=>$max))) == true) {
					echo "$somenum is valid\n<br>\n";
				}
				else {
					echo htmlentities ($somenum) . " is not valid\n<br>\n";
					echo "Try again\n<br>\n";
				}
			}
		?>
		<form method="post" action="NumericInput.php">
		 	Enter an integer: <input type="text" name="somenum">
		  	<input type="submit">
		</form>
	</body>
</html>