<?php
	$shop = array( array( Title => "rose", 
	                      Price => 1.25,
	                      Number => 15 
	                    ),
	               array( Title => "daisy", 
	                      Price => 0.75,
	                      Number => 25,
	                    ),
	               array( Title => "orchid", 
	                      Price => 1.15,
	                      Number => 7 
	                    )
	             );

	echo "<h1>Manual access to each element from associative array</h1>";

	for ($row = 0; $row < 3; $row++)
	{
	    echo $shop[$row]["Title"]." costs ".$shop[$row]["Price"]." and you get ".$shop[$row]["Number"];
	    echo "<br />";
	}

	echo "<h1>Using foreach loop to display elements</h1>";

	echo "<ol>";
	for ($row = 0; $row < 3; $row++)
	{
	    echo "<li><b>The row number $row</b>";
	    echo "<ul>";

	    foreach($shop[$row] as $key => $value)
	    {
	        echo "<li>".$value."</li>";
	    }

	    echo "</ul>";
	    echo "</li>";
	}
	echo "</ol>";
?>