<?php
	$fruits_1 = array ("Apple", "Mango", "Banana");
	$fruits_2 = array (
						0 => "Appple",
						1 => "Mango",
						2 => "Banana"
					);
	
	$fruits_3[] = "Apple";
	$fruits_3[] = "Mango";
	$fruits_3[] = "Banana";
	
	print "<br>Fruits 1<br>";
	print "<pre>";
	print_r($fruits_1);
	print "</pre>";
	
	print "<br><br>Fruits 2<br>";
	print "<pre>";
	print_r($fruits_2);
	print "</pre>";
	
	
	print "<br><br>Fruits 3<br>";
	print "<pre>";
	print_r($fruits_3);
	print "</pre>";
		

?>