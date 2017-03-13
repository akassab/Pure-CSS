<html>
	<body>
		<?php
		// The following code shows the danger of trusting data supplied by web browsers.
		// The example includes sales tax as a hidden field in an HTML form.
		// The user can load the page, view the HTML source and copy it to a text editor,
		// 		change the hidden value, and submit the form from the modified web page.
		
		// Similarly, the user can modify Javascript or any other client side script to 
		//		override client side input validation.
			if (isset ($_POST['price'])) {
				$price = $_POST['price'];
				$tax = $_POST['tax'];
				if (filter_var($price, FILTER_VALIDATE_INT)) {
					echo "Price: $price<br>\n";
					echo "Tax: $tax<br>\n";
					echo "Total: " . $price * (1 + $tax/100) . "<br>\n";
				}
			}
		?>
	
		<form method="post" action="HiddenData.php">
			 <input type="hidden" name="tax" value="13">
			 Enter a price: <input type="text" name="price">
			 <input type="submit">
		</form>
	</body>
</html>