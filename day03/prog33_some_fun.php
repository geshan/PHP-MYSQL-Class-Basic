<?php

$str = "I want to learn PHP";

$str_arr = explode(" ", $str);
$str_rev = array_reverse($str_arr);

foreach($str_rev as $word){
	echo $word;
	echo " ";
}
echo ".";
?> 
