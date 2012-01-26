
<?php include("class_person.php"); ?>
<html>
<head>
<title>PHP Class Implementation</title>
</head>

<body>

<?php
      $ram = new person("Ram Krishna Maharjan");

      $shyam = new person("Shayam Prashad Karki");


      $ram->set_name("Ram Kumar Maharjan");
      $shyam->set_name("Shyam Karki");

 

print "Ram's full name: " . $ram->get_name();
print "<br>Shyam's full name: " . $shyam->get_name();

?>

<?php
	
	
	//print "<h2>Private Attribute testing</h2>";
	//print "Tell me private stuff: " . $ram->pinn_number; //throws an error
	
	$ram->set_pinn_number("1234-5423-9873");
	print "<br><br>Showing Private variable: ". $ram->get_pinn_number();
	
?>

</body>
</html>