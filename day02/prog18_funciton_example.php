<?php
function adder($var1, $var2){
	$sum = $var1+$var2;
	return $sum;
}
?> 
<html>
<head>
<title>Function with PHP an example</title>
</head>
<body>
<?php
$a=10;
$b=15;
$added = adder($a, $b);
?>

The sum of <?=$a?> and <?=$b?>  is <?=$added?>.
</body>
</html>