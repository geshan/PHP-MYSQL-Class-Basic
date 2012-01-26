<?php
$sentence = "Pick one or more random entries out of an array";
$input = explode(" ",$sentence);
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo "<br>";
echo $input[$rand_keys[1]] . "\n";
?> 

