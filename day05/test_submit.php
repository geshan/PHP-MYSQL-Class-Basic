<?php

	$fdata['user_login'] = $_POST['user_login'];
	$fdata['pass_word'] = $_POST['pass_word'];
	$fdata['address'] = $_POST['address'];
	$fdata['email'] = $_POST['email'];
	$fdata['gender'] = $_POST['gender'];
	$fdata['heard_from'] = $_POST['heard_from'];
	$fdata['newsletter'] = $_POST['newsletter'];
	/*
	$fdata  = array();
	$fdata = $_POST;
	*/
	print "<h3>Data Got from the previous form:</h3>";
	foreach($fdata as $key => $value){
		print "<br>".$key." - Has ---------------> ".$value;
	}
	
	Print "<h3> Thats all we got</h3>";
	


?>