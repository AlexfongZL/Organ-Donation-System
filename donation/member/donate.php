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
	.input_readonly{
		background-color:#d8d8d8;
	}
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
				<li><a href="my_profile.php">My Profile</a></li>
				<li><a class="active1" href="donate.php">Donate</a></li>
			</ul>
		</nav>
	</div>
	
	<div class="centerdirectory">
		<form action="action.php" method="post">
		<table>
			<tr>
				<!--<td>First Name:</td>-->
				<td><input type="hidden" name="f_name" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_readonly" value="<?php echo $_SESSION['first_name']; ?>"></input></td>
			</tr>

			<tr>
				<!--<td>Last Name:</td>-->
				<td><input type="hidden" name="l_name" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_readonly" value="<?php echo $_SESSION['last_name']; ?>"></input></td>
			</tr>

			<tr>
				<!--<td>Gender:</td>-->
				<td><input type="hidden" name="gender" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_readonly" value="<?php echo $_SESSION['gender']; ?>"></input></td>
			</tr>

			<tr>
				<!--<td>E-mail:</td>-->
				<td><input type="hidden" name="email" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_readonly" value="<?php echo $_SESSION['email']; ?>"></input></td>
			</tr>

			<tr>
				<!--<td>Phone No.:</td>-->
				<td><input type="hidden" name="phone_no" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_readonly" value="<?php echo $_SESSION['phone_no']; ?>"></input></td>
			</tr>

			<tr>
				<!--<td>Age:</td>-->
				<td><input type="hidden" name="age" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_readonly" value="<?php echo $_SESSION['age']; ?>"></input></td>
			</tr>

			<tr>
				<!--<td>Address:</td>-->
				<td><input type="hidden" name="address" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_readonly" value="<?php echo $_SESSION['address']; ?>"></input></td>
			</tr>

			<tr>
				<!--<td>Nationality:</td>-->
				<td><input type="hidden" name="nationality" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_readonly" value="<?php echo $_SESSION['nationality']; ?>"></input></td>
			</tr>

			<tr>
				<!--<td>State:</td>-->
				<td><input type="hidden" name="state" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_readonly" value="<?php echo $_SESSION['state']; ?>"></input></td>
			</tr>

			<tr>
				<!--<td>Postcode:</td>-->
				<td><input type="hidden" name="postcode" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_readonly" value="<?php echo $_SESSION['postcode']; ?>"></input></td>
			</tr>

			<tr>
				<!--<td>Blood Group:</td>-->
				<td><input type="hidden" name="blood_group" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_readonly" value="<?php echo $_SESSION['blood_group']; ?>"></input></td>
			</tr>

			<tr>
				<td>I want to donate*:</td>
				<td>
				<select name="organ">
				  <option>Eyes</option>
				  <option>Heart</option>
				  <option>Kidney</option>
				  <option>Brain</option>
				</select>
			</td>
			</tr>

			<tr><td><input name="donate" type="submit" value="Submit"/></td></tr>
		</table>
		</form>
	</div>
	 
</body>

</html>