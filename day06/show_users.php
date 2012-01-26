<?php
	require("db_conn.php");
	
	$number_of_rows = 0;

	function get_users(){
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
					$tbl_name as tu";
					
		$result = mysql_query($query, $connection);
		if (!$result) {
			return 0;
			
		}
		else {
			return $result;
		} 
	}
	
	
	function show_users($user_records){
		global $number_of_rows;
		$number_of_rows = mysql_num_rows($user_records);
		
		if($number_of_rows > 0){
			
			$user_table = "<tr>\n";
			$user_table .= "<th>User ID</th>\n";
			$user_table .= "<th>Login Name</th>\n";
			$user_table .= "<th>Email</th>\n";
			$user_table .= "</tr>\n";
			
			//print_r($user_records);
			
			while($row=mysql_fetch_array($user_records)){

				$user_id = $row['user_id'];
				$user_name = $row['name'];
				$user_email = $row['email'];
				
				$user_table .= "<tr>\n";
				$user_table .= "<td>$user_id</td>\n";
				$user_table .= "<td>$user_name</td>\n";
				$user_table .= "<td>$user_email</td>\n";
				$user_table .= "</tr>\n"; 	
			} 
			print $user_table;
		}
	}
 		
	$user_records = get_users();
	
	
?>

<html>
<head>
	<title> Show users page </title>
</head>
<body>

	<h3> Displaying Users</h3>
	
	<table name="user_table" width="70%" border="1">
		<?php 
			if($user_records){
				show_users($user_records);	
			}
		?>
	</table>
	<br>
	<?php
		if($number_of_rows > 0) {
	?>
		Total Number of rows: <?=$number_of_rows?>
	<?php } ?>

</body>
</html>