<?php
/*********************
Version: 0.1
Release: August 1, 2013
Company: Socrata, Inc (Matthew Vanden Boogart)
*********************/

// SET THESE VARIABLES
$colmax = 7; // total number of columns
$rowmax = 5; // total number of rows
$download = true; //true: CSV will download | false: onscreen results
// END SETUP


// variables
$stored_value = "";


if ($download){ //download loop

	// set header row
	for ($i = 1; $i <= $colmax; $i++) {

		$stored_value .= "a" . $i ;
		if ($i < $colmax) {
			    $stored_value .=  ", ";
		}
	}

	    $stored_value .=  "\n";

	// set data rows
	for ($i = 1; $i <= $rowmax; $i++) {
		for ($j = 1; $j <= $colmax; $j++) {
		        $stored_value .=  rand(1, 100000);
			if ($j < $colmax) {
				    $stored_value .=  ", ";
			}
			else{
				    $stored_value .=  "\n";
			}
		}
	}

	// download file
	header("Content-type: text/csv");
	header("Content-Disposition: attachment; filename=data.csv");
	echo $stored_value;
	
}
else{ //on-screen loop

	// set header row
	for ($i = 1; $i <= $colmax; $i++) {
	    echo "a" . $i ;
		if ($i < $colmax) {
			echo ", ";
		}
	}

	echo "<br>";

	// set data rows
	for ($i = 1; $i <= $rowmax; $i++) {
		for ($j = 1; $j <= $colmax; $j++) {
		    echo rand(1, 100000);
			if ($j < $colmax) {
				echo ", ";
			}
			else{
				echo "<br>";
			}
		}
	}
	
	echo $stored_value;
	
}



?>