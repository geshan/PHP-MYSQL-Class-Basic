<?php
	require("db_conn.php");
	
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
	

	$user_data = get_user($user_id);
	
	$number_of_rows = mysql_num_rows($user_data);
		
		if($number_of_rows > 0){
			
			//print_r($user_records);
			//or could do mysql_fetch_row($user_records);
			while($row=mysql_fetch_array($user_data)){

				$user_id = $row['user_id'];
				$user_name = $row['name'];
				$email = $row['email'];
				$address = $row['address'];
				$gender = $row['gender'];
				$heard_from = $row['heard_from'];
				$newsletter = $row['newsletter'];
			}
		}
	
	
?>

<html>
<head>
<title>This site | User Edit</title>
</head>

<body>
<form name="user_edit" method="post" action="edit_user_process.php">
  <table width="550" border="1">
    <tr>
      <td width="192">User Login:</td>
      <td width="342"><?=$user_name?>
		<input type="hidden" name="user_id" value="<?=$user_id?>">
	  </td>
    </tr>
    <tr>
      <td>Address:</td>
      <td><textarea name="address" id="address" cols="45" rows="5"><?=$address?></textarea></td>
    </tr>
    <tr>
      <td>E-Mail Address:</td>
      <td><input type="text" name="email" id="email" value="<?=$email?>"></td>
    </tr>
    <tr>
      <td>Gender:</td>
      <td><input type="radio" name="gender" id="gender_m" value="Male" 
		<?php if($gender == "Male"){
					print ' checked="checked"';
				} ?>
	  >
        Male 
        <input type="radio" name="gender" id="gender_f" value="Female"
			<?php if($gender == "Female"){
					print ' checked="checked"';
				} ?>
		>
        Female</td>
    </tr>
    <tr>
      <td>Heard about us from:</td>
      <td><select name="heard_from" id="heard_from">
        <option value="Google" selected="selected">Google</option>
        <option value="Other Search Engine">Other Search Engine</option>
        <option value="Other Website">Other website</option>
        <option value="Friends or Family">Friends or Family</option>
        <option value="This website user">This website user</option>
      </select>      </td>
    </tr>
    <tr>
      <td>Would you like to get our newsletter:</td>
      <td><input type="checkbox" name="newsletter" id="newsletter" value="Yes"
		<?php if($newsletter == "Yes"){
					print 'checked="checked"';
				} ?>
	  ></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Edit"> </td>
    </tr>
  </table>
</form>
<br>
<br><br>Go to User List Page <a href="show_users_with_actions.php">here</a>.
</body>
</html>
