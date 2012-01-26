<?php

	$beer = 'Heineken';
	echo "<br>$beer's taste is great."; // works, "'" is an invalid character for varnames
	echo "<br>He drank some $beers.";   // won't work, 's' is a valid character for varnames
	echo "<br>He drank some ${beer}s."; // works
	echo "<br>He drank some {$beer}s."; // works
	
?> 
