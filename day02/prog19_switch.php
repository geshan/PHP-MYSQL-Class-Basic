<?php
$engDay =date ("l");
switch ($engDay)
{
	case "Friday";
		print "Thank god its Friday";
	break;
	case "Saturday";
		print "Oh its week end Saturday";
	break;
	default:                           
		print "Its just another working day of the week.";
}
?>
