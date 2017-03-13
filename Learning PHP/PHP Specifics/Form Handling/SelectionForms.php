<?php
//The following code demonstrates using array keys to build a form with select tags.
// 		The script returns the associated value.
// The script contains the same security flaw as the preceding script.

	 $course = array ('Canadore' => 'CN-CEA927',
	                  'Confederation' => 'CF-OL328',
	                  'Durham' => 'DU-PROG3283',
	                  'Fleming' => 'SF-COMP437',
	                  'Loyalist' => 'LO-COMP8146',
	                  'Niagara' => 'NC-COMP1971',
	                  'Northern' => 'NO-TBA',
	                  'Sault' => 'SA-OEL1005',
	                  'Sheridan' => 'SH-PROG70020',
	                  'St.Lawrence' => 'SL-CSDU167');
	
	 if (isset ($_POST['school'])) {
	    $school = $_POST['school'];
	    echo ($school != "" ? "The course code at $school is $course[$school]<br>\n":"");
	 }
	
	 echo "<form method=\"post\" action=\"SelectionForms.php\">\n";
	 echo " Select your college: <select name=\"school\">\n";
	 echo  "<option value=\"$school\">$school</option>\n";
	 echo  "<option value=\"\"></option>\n";
	 foreach ($course as $college => $code) {
	 	if ($college != $school) {
	    echo "   <option value=\"$college\">$college</option>\n";
	 	}
	 }
	 echo " </select>\n";
	 echo " <input type=\"submit\">\n";
	 echo "</form>\n";
?>