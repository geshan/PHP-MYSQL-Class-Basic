<?php
	require("db_conn.php");
	
	if(empty($_POST)){
		print "<h3>No data submitted via form.</h3>";
		exit();
	}
	
	$fdata  = array();
	$fdata = $_POST;
	
	unset($fdata['submit']);
	$user_id = $fdata['user_id']; //user_id is a hidden field in the form
	unset($fdata['user_id']);
	
	if(!isset($fdata['newsletter'])){ //if newsletter not checked
		$fdata['newsletter'] = "No";
	}
	//2008-12-22 06:27:10
	$fdata['modified_on'] = date('Y-m-d H:i:s');
	//string mysql_escape_string ( string $unescaped_string )
	
	function edit_user($user_id, $fdata){
	
		global $connection;
		//dynamci query construciton
		$tbl_name ="tbl_user_test";
		//"UPDATE Persons SET Age = '36' WHERE FirstName = 'Peter' AND LastName = 'Griffin'";
		$query = "UPDATE $tbl_name SET";
		
		foreach($fdata as $key => $value){
			if($key == "modified_on"){
				$query .= " $key = '".$value."' ";
			}
			else{
				$query .= " $key = '".$value."' ,";
			}
		}
		
		$query .= "WHERE $tbl_name.user_id = '$user_id';";
		
		//print $query;		
		
		
		  $result = mysql_query($query, $connection);
		
		if (!$result) {
			return 0;
		}
		else {
			return 1;
		}  
	}
	
	$user_edited = edit_user($user_id, $fdata);
	
	if($user_edited){
		print "User has been successfully Edited in the database";
		//or redirect to success page.
	}
	else {
		print "<br>Error in editing user.";
		//or redirect to failure page.
	}
?>

<br><br>Go to User List Page <a href="show_users_with_actions.php">here</a>.