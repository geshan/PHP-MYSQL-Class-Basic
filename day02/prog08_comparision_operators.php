<?php
$a=10;
$b=17;

/*
$a=17;
$b=10;
*/

print "<br>A is : ".$a;
print "<br>B is : ".$b;

print "<br><br>";

if($a==$b)
	{
	print "<br>A equals B.";//it wont be true
	}

if($a != $b){
	print "<br>A is not equals to B.";//it will be true
	}

if($a < $b){
	print "<br>A is less than B;";
}

if($a > $b){
	print "<br>A is greater than B;";
}

if($a <= $b){
	print "<br>A is less than or equals to B;";
}

if($a >= $b){
	print "<br>A is greater than or equals to B;";
}

?>