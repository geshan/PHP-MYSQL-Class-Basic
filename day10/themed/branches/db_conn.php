<?php
	$db['host'] = "localhost";
	$db['user_name'] = "root";
	$db['pass_word'] = "";
	$db['name'] = "php_class_db";

	$connection = mysql_connect ($db['host'], $db['user_name'],$db['pass_word']);
	
	if(!$connection){
		die("Error connecting to the database server");
	}	
	$db_name = mysql_select_db($db['name'], $connection);
?>
