<?php
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));
print "<br><br>";
$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));
?>