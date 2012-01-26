<?php
//include dtatbase and do things accrodingly with query

function check_login($user_name, $pass_word){
		if(($user_name=="admin") && ($pass_word === "test")){
			//set session
			$_SESSION['user_name'] = $user_name;
			$_SESSION['user_logged_in'] = true;
			return 1;
		
		}
		else{
			return 0;
		}
	}
?>