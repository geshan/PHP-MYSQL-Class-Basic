<?php
$input  = array("php", 4.0, "green", "red");
$result = array_reverse($input);
$result_keyed = array_reverse($input, true);

print "<br> Original array: ";
print_r($input);

print "<br><br>Array reversed non keyed: <br>";
print_r($result);

print "<br><br> Array Reversed keyed: <br>";
print_r($result_keyed);
?> 

