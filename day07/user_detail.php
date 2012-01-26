<?php
	require("db_conn.php");
	if(!$_GET['id']){
		print "User ID not supplied, ERROR.";
		exit();
	}
	$number_of_rows = 0;
	$user_id = $_GET['id'];

	function get_user($user_id){
		global $connection;
		
		$tbl_name ="tbl_user_test";
		$query = "SELECT
					tu.user_id,
					tu.user_login as name,
					tu.address,
					tu.email,
					tu.gender,
					tu.heard_from,
					tu.newsletter,
					tu.created_on,
					tu.modified_on
				FROM
					$tbl_name as tu
				WHERE
					tu.user_id = $user_id";
		$result = mysql_query($query, $connection);
		if (!$result) {
			return 0;
		}
		else {
			return $result;
		} 
	}
	
	
	function show_user($user_records){
		global $number_of_rows;
		$number_of_rows = mysql_num_rows($user_records);
		
		if($number_of_rows > 0){
			
			//print_r($user_records);
			//or could do mysql_fetch_row($user_records);
			while($row=mysql_fetch_array($user_records)){

				$user_id = $row['user_id']; //$user_id = $row[0]; //if mysql_fetch_row is used.
				$user_name = $row['name'];
				$user_email = $row['email'];
				$address = nl2br($row['address']);
				$gender = $row['gender'];
				$heard_from = $row['heard_from'];
				$newsletter = $row['newsletter'];
				
				$user_table .= "<tr><td width=150>User ID: </td> <td>$user_id</td> </tr>\n";
				$user_table .= "<tr><td>User Login:</td><td>$user_name</td></tr>\n";
				$user_table .= "<tr><td>Email Address:</td><td>$user_email</td></tr>\n";
				$user_table .= "<tr><td>Address:</td><td>$address</td></tr>\n";
				$user_table .= "<tr><td>Gender:</td><td>$gender</td></tr>\n";
				$user_table .= "<tr><td>Heard From:</td><td>$heard_from</td></tr>\n";
				$user_table .= "<tr><td>Receives NewsLetter:</td><td>$newsletter</td></tr>\n";
			} 
			print $user_table;
		}
	}
 		
	$user_records = get_user($user_id);
	
	
?>

<html>
<head>
	<title> Show users page </title>
</head>
<body>

	<h3> Displaying User with id <?=$user_id?></h3>
	
	<table name="user_table" width="400px" border="1">
		<?php 
			if($user_records){
				show_user($user_records);	
			}
		?>
	</table>
	<br>
	Go back to show users page <a href="show_users_with_actions.php">Click here</a>.
</body>
</html>