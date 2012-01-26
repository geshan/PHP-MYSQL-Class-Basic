<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login From</title>
</head>

<body>
<h2>Login</h2>
<form action="login_check.php" method="post" name="login_form">
<!-- <form action="prog35_login_check.php" method="post" name="login_form"> -->
<table width="360" border="1">
  <tr>
    <td width="90">Username:</td>
    <td width="254"><label>
      <input type="text" name="user_name" id="user_name" />
    </label></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input type="password" name="pass_word" id="pass_word" /></td>
  </tr>
  <tr>
    <td colspan="2">
    	<input type="submit" name="submit_form" id="submit_form" value="Submit" />
        <input type="Reset" name="Reset" id="Reset" value="Reset" />
     </td>
  </tr>
</table>
</form>
</body>
</html>
