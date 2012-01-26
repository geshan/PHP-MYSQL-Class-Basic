<?php
session_start();

require_once("check_login_function.php");//included to check login

	/**
	$user_name = $_GET['user_name'];
	$pass_word = $_GET['pass_word'];
	*/
	
	$user_name = $_POST['user_name'];
	$pass_word = $_POST['pass_word'];
	
	//processing code
	$user_ok = check_login($user_name, $pass_word); //called from check_login_function.php
	
	if($user_ok){
		header("Location: logged_in.php"); /* Redirect browser */
	
	}
	else {
		header("Location: not_logged_in.php");
	
	}
			

?>