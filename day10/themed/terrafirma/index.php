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

Name       : TerraFirma
Version    : 1.0
Released   : 20080425

-->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>TerraFirma by Free CSS Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="default.css" />
</head>
<body>

<div id="outer">

	<div id="upbg"></div>

	<div id="inner">

		<div id="header">
			<h1><span>terra</span>firma</h1>
			<h2>by nodethirtythree + fct</h2>
		</div>
	
		<div id="splash"></div>
	
		<div id="menu">
			<ul>
				<li class="first"><a href="#">Home</a></li>
				<li><a href="#">Archives</a></li>
				<li><a href="#">Links</a></li>
				<li><a href="#">Resources</a></li>
				<li><a href="#">Contact</a></li>
			</ul>

		<div id="date">April 25, 2008</div>
		</div>
	

		<div id="primarycontent">
		
			<!-- primary content start -->
		
			<div class="post">
				<div class="header">
					<h3>Diplaying Users with PHP</h3>
					<div class="date">April 25, 2008</div>
				</div>
				<div class="content">
					<p><strong>User List</strong>, ot the system</p>
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
				<div class="footer">
					<ul>
						<li class="printerfriendly"><a href="#">Printer Friendly</a></li>
						<li class="comments"><a href="#">Comments (18)</a></li>
						<li class="readmore"><a href="#">Read more</a></li>
					</ul>
				</div>
			</div>
		
			<div class="post">
				<div class="header">
					<h3>Vivamus tortor sed aenean</h3>
					<div class="date">April 23, 2008</div>
				</div>
				<div class="content">
					<p>Volutpat at varius sed sollicitudin et, arcu. Vivamus viverra. Nullam turpis. Vestibulum sed etiam. Lorem ipsum sit amet dolore. Nulla facilisi. Sed tortor. Aenean felis. Quisque eros. Cras lobortis commodo metus. Vestibulum vel purus. In eget odio in sapien adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit vitae, cursus sed, arcu lorem ipsum dolor sit amet.</p>
					<p>Fermentum at, varius pretium, elit. Mauris egestas scelerisque nunc. Mauris non ligula quis wisi laoreet malesuada. In commodo. Maecenas lobortis cursus dolor.</p>
				</div>			
				<div class="footer">
					<ul>
						<li class="printerfriendly"><a href="#">Printer Friendly</a></li>
						<li class="comments"><a href="#">Comments (18)</a></li>
						<li class="readmore"><a href="#">Read more</a></li>
					</ul>
				</div>
			</div>

			<div class="post">
				<div class="header">
					<h3>Vivamus tortor sed aenean</h3>
					<div class="date">April 15, 2008</div>
				</div>
				<div class="content">
					<p>Volutpat at varius sed sollicitudin et, arcu. Vivamus viverra. Nullam turpis. Vestibulum sed etiam. Lorem ipsum sit amet dolore. Nulla facilisi. Sed tortor. Aenean felis. Quisque eros. Cras lobortis commodo metus. Vestibulum vel purus. In eget odio in sapien adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit vitae, cursus sed, arcu lorem ipsum dolor sit amet.</p>
					<p>Fermentum at, varius pretium, elit. Mauris egestas scelerisque nunc. Mauris non ligula quis wisi laoreet malesuada. In commodo. Maecenas lobortis cursus dolor.</p>
				</div>			
				<div class="footer">
					<ul>
						<li class="printerfriendly"><a href="#">Printer Friendly</a></li>
						<li class="comments"><a href="#">Comments (18)</a></li>
						<li class="readmore"><a href="#">Read more</a></li>
					</ul>
				</div>
			</div>

			<!-- primary content end -->
	
		</div>
		
		<div id="secondarycontent">

			<!-- secondary content start -->
		
			<h3>About Me</h3>
			<div class="content">
				<img src="images/pic2.jpg" class="picB" alt="" />
				<p><strong>Nullam turpis</strong> vestibulum et sed dolore. Nulla facilisi. Sed tortor. lobortis commodo. <a href="#">More ...</a></p>
			</div>
			
			<h3>Topics</h3>
			<div class="content">
				<ul class="linklist">
					<li class="first"><a href="#">Accumsan congue (32)</a></li>
					<li><a href="#">Dignissim nec augue (14)</a></li>
					<li><a href="#">Nunc ante elit nulla (83)</a></li>
					<li><a href="#">Aliquam suscipit (74)</a></li>
					<li><a href="#">Cursus sed arcu sed (14)</a></li>
					<li><a href="#">Eu ante cras at risus (24)</a></li>
					<li><a href="#">Donec mollis dolore (39)</a></li>
					<li><a href="#">Aliquam suscipit (74)</a></li>
				</ul>
			</div>

			<!-- secondary content end -->

		</div>
	
		<div id="footer">
		
			&copy; My Website. All rights reserved. Design by <a href="http://www.nodethirtythree.com/">NodeThirtyThree</a> + <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.
		
		</div>

	</div>

</div>

</body>
</html>
