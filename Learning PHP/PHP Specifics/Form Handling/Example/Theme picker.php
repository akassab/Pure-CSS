<!DOCTYPE>
<html lang='en'>
<head>
<meta charset='utf-8'>
<title>Cosplay Happenings</title>
</head>
<body>
	<?php
		if (isset ($_POST['theme'])) {
			$theme = $_POST['theme'];
			switch ($theme) {
				case "Dark":
					echo "<body style=";
					echo "\"background-color: black; color: white;\">";
					echo "</body>";
					break;
				case "Light":
					echo "<body style=";
					echo "\"background-color: grey; color: white;\">";
					echo "</body>";
					break;
				case "Reset":
					echo "<body style=";
					echo "\"background-color: white; color: black;\">";
					echo "</body>";
					break;
			}
		}
	?>
		<div>
		<h3>Theme Settings</h3>
		<div class='modal-content'>                    
		    <!-- THEME PICK -->	                                                    
			<form method="post" action="Settings.php">
          	
          		<fieldset> Style:
            		<!-- <label class='form-label' for='type'>CC Type</label> -->
           			 <select name='theme'>
		              	<option value='Dark'>Dark</option>
		             	 <option value='Light'>Light</option>
		             	 <option value='Reset'>Reset</option>
           			 </select>
          		</fieldset>
          		<input type="submit">
			</form>
		</div>
	</div>
</body>
</html>
