<?php

session_start();

session_destroy();

header("Location: logged_out.php");

?>
