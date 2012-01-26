<?php  
$filename = "myfile.txt";
$handle = fopen($filename, "w");

if(!$handle){
	print ("<br>Error, ");
	print ("$filename could not be created.");
	die ("Check write properties in folder.");
}

for($i=1;$i<=5;$i++){
	fputs($handle, "Writing to file at line $i.\n");
}
fclose($handle);

//now reading from the file just written on

$handle_r = fopen ($filename, "r");
if(!$handle_r){
	print ("<br>Error, ");
	print ("$filename could not be read.");
	exit();
}

while(!feof($handle_r)){
	$line_print = fgets($handle_r, 250);
	//print ("$line_print<br>\n");
	print nl2br($line_print);
}

fclose($handle_r);
?>