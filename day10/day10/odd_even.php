<?php
$number = 4;
	if($number%2){
		$odd = 1;
	}
	else {
		$odd = 0;
	}

	if($odd){
		printf ("%d is odd.",$number);
	}
	else {
		printf ("%d is even.", $number);
	}
?>