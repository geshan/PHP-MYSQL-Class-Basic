<?php  
$file_to_operate = fopen("textfile.txt","r");

while(!feof($file_to_operate)){
	$a_line = fgets($file_to_operate, 40);
	echo "<br>".$a_line;	
}
?>