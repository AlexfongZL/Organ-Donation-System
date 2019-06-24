<?php
	session_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<title>My Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../include/css/title.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/topdirectory.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/header.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/downdirectory.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/centerdirectory.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/footer.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/login.css" />
	<script src="../include/js/overview.js"></script>
	<script src="../include/js/login.js"></script>
	

</head>

<style>
	.centerdirectory{
		background-color: white;
	}
	.loginsignup
	{
		grid-column: 3;
		grid-row: 1;
		text-align: right;
		margin-top: 50px;
		position: relative;
		bottom:50px;
	}
</style>
<body style="background-color:HoneyDew;">
	<div class="threetop">
		
		<div class="title">
			<h1 class="header1">Member's page</h1>
		</div>
		
		<div class="loginsignup">
			<p>Welcome, <?php echo $_SESSION['username']; ?></p>
			<a href="logout.php">Log Out<a/>
		</div>
	</div>
<br/><br/><br/>
	<div>
		<nav class="top">
			<ul class="topdirectory">
				<li><a class="active1" href="my_profile.php">My Profile</a></li>
				<li><a href="donate.php">Donate</a></li>
			</ul>
		</nav>
	</div>
	
	<div class="centerdirectory">
		<table>
			<tr>
				<td>Username:</td><td><?php echo $_SESSION['username']; ?></td>
			</tr>

			<tr>
				<td>First Name:</td><td><?php echo $_SESSION['first_name']; ?></td>
			</tr>

			<tr>
				<td>Last Name:</td><td><?php echo $_SESSION['last_name']; ?></td>
			</tr>

			<tr>
				<td>Username:</td><td><?php echo $_SESSION['username']; ?></td>
			</tr>

			<tr>
				<td>Gender:</td><td><?php echo $_SESSION['gender']; ?></td>
			</tr>

			<tr>
				<td>E-mail:</td><td><?php echo $_SESSION['email']; ?></td>
			</tr>
			<tr>
				<td>Phone No.:</td><td><?php echo $_SESSION['phone_no']; ?></td>
			</tr>
			<tr>
				<td>Age:</td><td><?php echo $_SESSION['age']; ?></td>
			</tr>
			<tr>
				<td>Address:</td><td><?php echo $_SESSION['address']; ?></td>
			</tr>
			<tr>
				<td>Nationality:</td><td><?php echo $_SESSION['nationality']; ?></td>
			</tr>
			<tr>
				<td>State:</td><td><?php echo $_SESSION['state']; ?></td>
			</tr>
			<tr>
				<td>Postcode:</td><td><?php echo $_SESSION['postcode']; ?></td>
			</tr>

			<tr>
				<td>Blood Group:</td><td><?php echo $_SESSION['blood_group']; ?></td>
			</tr>

			<tr>
				<td><input type="button" class="back-btn" value="Edit my profile" width="93" height="25" onclick="window.location.href='edit_profile.php'"/></td>
			</tr>
		</table>
	</div>
	 
</body>

</html>