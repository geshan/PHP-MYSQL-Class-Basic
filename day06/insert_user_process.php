<?php
	require("db_conn.php");
	
	if(empty($_POST)){
		print "<h3>No data submitted via form.</h3>";
		exit();
	}
	
	$fdata  = array();
	$fdata = $_POST;
	unset($fdata['submit']);
	if(!isset($fdata['newsletter'])){ //if newsletter not checked
		$fdata['newsletter'] = "No";
		
		
	}
	//2008-12-22 06:27:10
	$fdata['created_on'] = date('Y-m-d H:i:s');
	$fdata['modified_on'] = date('Y-m-d H:i:s');
	//string mysql_escape_string ( string $unescaped_string )
	
	function insert_user_to_db($fdata){
	
		global $connection;
		//dynamci query construciton
		$tbl_name ="tbl_user_test";
		//INSERT INTO tbl_name (col1,col2) VALUES(15,col1*2);
		$query = "INSERT into $tbl_name (";
		
		foreach($fdata as $key => $value){
			if($key == "modified_on"){
				$query .= $key.")";
			}
			else{
				$query .= $key.", ";
			}
		}//could have done it with array_keys($fdata);
		
		$query .= " VALUES (";
		
		foreach($fdata as $key => $value){
			if($key == "modified_on"){
				$query .= "'$value'".");";
			}
			else{
				$query .= "'$value'".", ";
			}
		}
		
		//print $query;
		
		//or could have simply done;
		/*
		$q= "INSERT INTO tbl_user_test
								( 	user_login, 
									pass_word, 
									address, 
									email, 
									gender, 
									heard_from, 
									newsletter, 
									created_on, 
									modified_on 
								)
						VALUES 
								(
									'".$fdata['user_login']."', 
									'".$fdata['pass_word']."', 
									'".$fdata['address']."', 
									'".$fdata['email']."', 
									'".$fdata['gender']."', 
									'".$fdata['heard_from']."', 
									'".$fdata['newsletter']."', 
									'".$fdata['created_on']."', 
									'".$fdata['modified_on']."'
								);"; */
								
		
		
		
		 $result = mysql_query($query, $connection);
		
		if (!$result) {
			return 0;
		}
		else {
			return 1;
		} 
	}
	
	$user_inserted = insert_user_to_db($fdata);
	
	if($user_inserted){
		print "User has been successfully added to database";
		//or redirect to success page.
	}
	else {
		print "Error in adding user.";
		//or redirect to failure page.
	}
?>

<br><br>Go to User List Page <a href="show_users.php">here</a>.