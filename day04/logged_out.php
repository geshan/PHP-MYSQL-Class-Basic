<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logged Out</title>
</head>

<body>
<h3>You have logged out successfully.</h3>

<a href="prog34_simple_form.php"> Login Here Again</a>

<br>
<br>
<?php
	print ('<br>$_SESSION has: <br>');
	print "<pre>";
	print_r($_SESSION);
	print "</pre>";
?>

</body>
</html>
