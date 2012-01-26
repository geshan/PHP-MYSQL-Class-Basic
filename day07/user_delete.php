<?php
	require("db_conn.php");
	
	if(empty($_GET['id'])){
		print "<h3>No ID submitted, ERROR. </h3>";
		exit();
	}
	
	$user_id = $_GET['id'];
	
	
	function delete_user($user_id){
	
		global $connection;
		$tbl_name ="tbl_user_test";
		$query = "DELETE FROM $tbl_name WHERE $tbl_name.user_id = '$user_id';";
		//print $query;		
		
		$result = mysql_query($query, $connection);
		
		if (!$result) {
			return 0;
		}
		else {
			return 1;
		}   
	}
	
	$user_deleted = delete_user($user_id);
	
	if($user_deleted){
		print "User has been successfully Deleted from the database.";
		//or redirect to success page.
	}
	else {
		print "<br>Error in deleting user.";
		//or redirect to failure page.
	}
?>

<br><br>Go to User List Page <a href="show_users_with_actions.php">here</a>.