<html>
<head>
<title>A Registration Form | User Register</title>
</head>

<body>
<form name="user_add" method="post" action="test_submit.php">
  <table width="550" border="1">
    <tr>
      <td width="192">User Login:</td>
      <td width="342"><input type="text" name="user_login" id="user_login"></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input type="password" name="pass_word" id="pass_word"></td>
    </tr>
    <tr>
      <td>Address:</td>
      <td><textarea name="address" id="address" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>E-Mail Address:</td>
      <td><input type="text" name="email" id="email"></td>
    </tr>
    <tr>
      <td>Gender:</td>
      <td><input type="radio" name="gender" id="gender_m" value="Male" checked="checked">
        Male 
        <input type="radio" name="gender" id="gender_f" value="Female">
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
      <td><input type="checkbox" name="newsletter" id="newsletter" value="Yes"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit"> <input type="reset" name="Reset" id="Reset" value="Reset"></td>
    </tr>
  </table>
</form>
</body>
</html>
