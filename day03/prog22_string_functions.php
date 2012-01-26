<?php
	$string_a = "This is a long string";
	$string_b = "This is a much longer string";
	
	$explode_arr = explode(" ", $string_a);
	print "<br>".$explode_arr[3];// will pirnt long
	
	$string_n = "This is line 1.\nThis is line 2";
	print "<br>".nl2br($string_n);
	
	$result = strcmp($string_a, $string_b);//can be useful for password comparision
	if($result == 0){
		print "<br>"."String A and B are equal";
	}
	elseif($result < 0){
		print "<br>"."String A is less than String B."; //this is printed
	}
	elseif($result > 0 ) {
		print "<br>"."String A is greater than String B.";
	}
	
	$length = strlen ($string_b);
	print "<br><br>"."String length of string '$string_b' is $length.";
	
	
	print "<br><br>"."Lower case of string $string_a is -> ".strtolower($string_a).".";
	print "<br><br>"."Uppder case of string $string_a is -> ".strtoupper($string_a).".";
	
	$sub_string_1 = substr ($string_b, -6);
	print "<br><br>Substring 1 ".$sub_string_1;
	
	$sub_string_2 = substr ($string_b, 0, 7);
	print "<br><br>Substring 2 ".$sub_string_2;
	//try some substring variations yourself
	
	$string_t = "    Trim Check   ";
	print "<br><br>String lenghth without trimming -".strlen($string_t)."- and String length after trim -".strlen(trim($string_t))."-.";
	//try ltrim and r trim youself.
	
?> 
