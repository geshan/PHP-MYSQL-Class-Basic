<?php
	require("db_conn.php");
	
	$number_of_rows = 0;

	function get_users(){
		global $connection;
		
		$tbl_name ="tbl_user_test";
		$query = "SELECT
					tu.user_id,
					tu.user_login as name,
					tu.address,
					tu.email,
					tu.gender,
					tu.heard_from,
					tu.newsletter,
					tu.created_on,
					tu.modified_on
				FROM
					$tbl_name as tu";
			//ORDER BY tu.user_login DESC
					
		$result = mysql_query($query, $connection);
		if (!$result) {
			return 0;
			
		}
		else {
			return $result;
		} 
	}
	
	
	function show_users($user_records){
		global $number_of_rows;
		$number_of_rows = mysql_num_rows($user_records);
		
		if($number_of_rows > 0){
			$user_table = "<tr>\n";
			$user_table .= "<th>User ID</th>\n";
			$user_table .= "<th>Login Name</th>\n";
			$user_table .= "<th>Email</th>\n";
			$user_table .= "<th>Actions</th>\n";
			$user_table .= "</tr>\n";
			//print_r($user_records);
			while($row=mysql_fetch_array($user_records)){
				$user_id = $row['user_id'];
				$user_name = $row['name'];
				$user_email = $row['email'];
				
				$user_table .= "<tr>\n";
				$user_table .= "<td>$user_id</td>\n";
				$user_table .= "<td>$user_name</td>\n";
				$user_table .= "<td>$user_email</td>\n";
				$user_table .= "<td>";
				$user_table .= "<a href=\"user_detail.php?id=$user_id\">Detail</a> - ";
				$user_table .= "<a href=\"user_edit.php?id=$user_id\">Edit</a> - ";
				$user_table .= "<a href=\"user_delete.php?id=$user_id\"";
				$user_table .= ' onclick="javascript:return confirm(\'Do you really want to delete?\');"';
				$user_table .= ">Delete</a> - ";
				$user_table .= "</td>\n";
				$user_table .= "</tr>\n"; 	
			} 
			print $user_table;
		}
	}
 		
	$user_records = get_users();
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Branches
Version    : 1.0
Released   : 20081010
Description: A two-column, fixed-width and lightweight template ideal for 1024x768 resolutions. Suitable for blogs and small websites.

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Branches by Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="#">Branches<sup></sup></a></h1>
		<h2>Designed by FreeCSSTemplates</h2>
	</div>
	<div id="menu">
		<ul>
			<li class="active"><a href="#">homepage</a></li>
			<li><a href="#">photo gallery</a></li>
			<li><a href="#">about us</a></li>
			<li><a href="#">links</a></li>
			<li><a href="#">contact us</a></li>
		</ul>
	</div>
</div>
<!-- end header -->
</div>

<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title">Displaying Users</h1>
			<div class="entry">
				<p>Users in the system</p>
				<table name="user_table" width="70%" border="1">
						<?php 
							if($user_records){
								show_users($user_records);	
							}
						?>
				</table>
				<br>
				<?php
					if($number_of_rows > 0) {
				?>
					Total Number of rows: <?=$number_of_rows?>
				<?php } ?>
			</div>
			<div class="meta">
				<p class="links"><a href="#" class="more">Read full article</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;<a href="#" class="comments">View Comments (32)</a></p>
			</div>
		</div>
		<div class="post">
			<h2 class="title">Lorem Ipsum Dolor Volutpat</h2>
			<div class="entry">
				<p>Curabitur tellus. Phasellus tellus turpis, iaculis in, faucibus lobortis, posuere in, lorem. Donec a ante. Donec neque purus, adipiscing id, eleifend a, cursus vel, odio. Vivamus varius justo sit amet leo. Morbi sed libero. Vestibulum blandit augue at mi. Praesent fermentum lectus eget diam. Nam cursus, orci sit amet porttitor iaculis, ipsum massa aliquet nulla, non elementum mi elit a mauris. In hac habitasse platea.</p>
				<p>Donec a ante. Donec neque purus, adipiscing id, eleifend a, cursus vel, odio. Vivamus varius justo sit amet leo. Morbi sed libero. Vestibulum blandit augue at mi. Praesent fermentum lectus eget diam. Nam cursus, orci sit amet porttitor iaculis, ipsum massa aliquet nulla, non elementum mi elit a mauris. In hac habitasse platea.</p>
				</div>
			<div class="meta">
				<p class="links"><a href="#" class="more">Read full article</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;<a href="#" class="comments">View Comments (32)</a></p>
			</div>
		</div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<div id="sidebar">
		<ul>
			<li id="search">
				<h2><b class="text1">Search</b></h2>
				<form method="get" action="">
					<fieldset>
					<input type="text" id="s" name="s" value="" />
					<input type="submit" id="x" value="Search" />
					</fieldset>
				</form>
			</li>
			<li>
				<h2><strong>Lorem</strong> Ipsum</h2>
				<ul>
					<li><a href="#">Fusce dui neque fringilla</a></li>
					<li><a href="#">Eget tempor eget nonummy</a></li>
					<li><a href="#">Magna lacus bibendum mauris</a></li>
					<li><a href="#">Nec metus sed donec</a></li>
					<li><a href="#">Magna lacus bibendum mauris</a></li>
					<li><a href="#">Velit semper nisi molestie</a></li>
					<li><a href="#">Eget tempor eget nonummy</a></li>
				</ul>
			</li>
			<li>
				<h2><b>Volutpat</b> Dolore</h2>
				<ul>
					<li><a href="#">Nec metus sed donec</a></li>
					<li><a href="#">Magna lacus bibendum mauris</a></li>
					<li><a href="#">Velit semper nisi molestie</a></li>
					<li><a href="#">Eget tempor eget nonummy</a></li>
					<li><a href="#">Nec metus sed donec</a></li>
					<li><a href="#">Magna lacus bibendum mauris</a></li>
					<li><a href="#">Velit semper nisi molestie</a></li>
				</ul>
			</li>
			<li>
				<h2><b>Volutpat</b> Dolore</h2>
				<ul>
					<li><a href="#">Nec metus sed donec</a></li>
					<li><a href="#">Magna lacus bibendum mauris</a></li>
					<li><a href="#">Velit semper nisi molestie</a></li>
					<li><a href="#">Eget tempor eget nonummy</a></li>
					<li><a href="#">Nec metus sed donec</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
	<p id="legal">(c) 2008 YourSite. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
<!-- end footer -->
</body>
</html>
