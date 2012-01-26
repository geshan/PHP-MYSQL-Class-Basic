<?php
/* example 1 */

$i = 1;
while ($i <= 10) {
    echo $i++;  
}

/* example 2 - Alternative syntax*/

$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
?> 

