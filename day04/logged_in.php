<?php  
session_start(); 
if($_SESSION['user_logged_in']){

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Login success</title>

</head>

<body>
<h3><?php 

print $_SESSION['user_name']. ", You have logged in successfully";
?></h3>

<h4><a href="logout.php">Logout</a></h4>

<br /><br />

<?php
	print ('<br>$_SESSION has: <br>');
	print "<pre>";
	print_r($_SESSION);
	print "</pre>";
?>
</body>
</html>
<?php

}//if close
else{
	print "<h4>You are not authorized to view this page.</h4>";
	print '<br><a href="prog34_simple_form.php"> Login Here</a>';
}
?>