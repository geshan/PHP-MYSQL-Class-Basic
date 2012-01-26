<?php
$arr = array("zero" , "one" , "two" , "three" , "four" );
/*For each example 1 */
foreach ( $arr as $value ){
	print "<br>".$value;
}
print "<br>";
/*For each example 2 */
foreach ( $arr as $key => $value) {
	print "<br>At key ".$key." of the array, the value is ".$value;
}
?> 