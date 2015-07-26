<?php  

	$person = array("jodu", "modu", "kodu", "jodu", "modu");

	// asort($person);

	// echo "<br/>";

	// $mymap = array();
	// foreach ($person as $value) {
	// 	if(isset($mymap[$value])) {
	// 		// echo "Yes<br/>";
	// 		$mymap[$value]++;
	// 	} else {
	// 		// echo "No<br/>";
	// 		$mymap[$value] = 1;
	// 	}
	// }


	// echo "<br/>";

	// ksort($mymap);

	// foreach ($mymap as $key => $value) {
	// 	echo $key." => ".$value."<br/>";
	// }

	var_dump(array_count_values( $person )); // you can do this with php build-in function

?>
