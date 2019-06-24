<!DOCTYPE html>

<html lang="en">
<head>
	<title>Admin Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../include/css/title.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/topdirectory.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/header.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/downdirectory.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/centerdirectory.css" />
	<script src="../include/js/overview.js"></script>	


</head>

<body style="background-color:HoneyDew;">
	<div class="threetop">
		<div class="logo">
			<img class="img1" src="..\img\heart.jpg" style="max-width:15%;height:auto;">
		</div>
		<div class="title">
			<h1 class="header1">Admin Page</h1>
		</div>
		<div class="loginsignup">
			<a href="logout.php">Logout<a/>
		</div>
	</div>

	<div>
		<nav class="top">
			<ul class="topdirectory">
				<li><a href="admin_home.php">Admin Home</a></li>
				<li><a class="active1" href="request_comment.php">Request and Donate</a></li>
			</ul>
		</nav>
	</div>

	<div align="center">
		<div class="div2">
			<h3>Request for Edit Profile</h3>
			
			<tr class="column menu">
				<td>Username</td>
				<td>Description</td>
				<td align="center">Action</td>
			</tr>
			
			<div class="column menu">
				<ul>
					<li name="tab" onclick="openTab(this)">Username</li>
					<li name="tab" onclick="openTab(this)">Description</li>
				</ul>
				

			<?php
				$counter = 2;
				$file_name = array_diff(scandir("../request/edit_profile/"),array('..','.'));

				$array_length = count($file_name)+2;

				for($x=2; $x < $array_length; $x++)
				{
					$file = "../request/edit_profile/" .$file_name[$x]."/request.txt";
					$handler = fopen($file,"r");
					$size = filesize($file);

					echo "<tr>";
						echo "<td>" .$file_name[$x]. "</td>";
						echo "<td>Edit Profile</td>";
						echo "<td>" .fread($handler,$size). "</td>";
					echo "</tr>";



					//echo fread($handler,$size);
					//return file_get_contents($file);
				}
			?>
			</div>
		</div>
	</div>

	<div align="center">
		<table border="1">
			<h3>Request for Donate Organ</h3>
			<tr>
				<td>Username</td>
				<td>Description</td>
				<td align="center">Action</td>
			</tr>

			<?php
				$counter = 2;
				$file_name = array_diff(scandir("../request/donate/"),array('..','.'));

				$array_length = count($file_name)+2;

				for($x=2; $x < $array_length; $x++)
				{
					$file = "../request/donate/" .$file_name[$x]."/request.txt";
					$handler = fopen($file,"r");
					$size = filesize($file);

					echo "<tr>";
						echo "<td>" .$file_name[$x]. "</td>";
						echo "<td>Request for Donate Organ</td>";
						echo "<td>" .fread($handler,$size). "</td>";
					echo "</tr>";



					//echo fread($handler,$size);
					//return file_get_contents($file);
				}
			?>
		</table>
	</div>
</body>

</html>