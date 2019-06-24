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
	.input_{
		background-color:#d8d8d8;
	}
</style>
<body style="background-color:HoneyDew;">
	<div class="threetop">
		
		<div class="title">
			<h1 class="header1">Member's page</h1>
		</div>
		<div class="loginsignup">
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
	<form action="action.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td><h2>Edit Profile</h2></td>
			</tr>
			<tr>
				<td>First Name:</td><td><input name="f_name" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_" value="<?php echo $_SESSION['first_name']; ?>" ></input></td>
			</tr>

			<tr>
				<td>Last Name:</td><td><input name="l_name" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_" value="<?php echo $_SESSION['last_name']; ?>" ></input></td>
			</tr>

			
			<tr>
				<td>Gender:</td>
				<td>
					<select name="gender">
					  <option value="male">MALE</option>
					  <option value="female">FEMALE</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>E-mail:</td><td><input name="email" class="input_" value="<?php echo $_SESSION['email']; ?>" ></input></td>
			</tr>

			<tr>
				<td>Phone No.:</td><td><input name="phone_no" class="input_" value="<?php echo $_SESSION['phone_no']; ?>" ></input></td>
			</tr>

			<tr>
				<td>Age:</td><td><input name="age" class="input_" value="<?php echo $_SESSION['age']; ?>" ></input></td>
			</tr>

			<tr>
				<td>Address:</td><td><textarea name="address" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_" ><?php echo $_SESSION['address']; ?></textarea></td>
			</tr>

			<tr>
				<td>Nationality:</td><td><input name="nationality" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_" value="<?php echo $_SESSION['nationality']; ?>" ></input></td>
			</tr>

			<tr>
				<td>State:</td><td><input name="state" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_" value="<?php echo $_SESSION['state']; ?>" ></input></td>
			</tr>

			<tr>
				<td>Postcode:</td><td><input name="postcode" class="input_" value="<?php echo $_SESSION['postcode']; ?>" ></input></td>
			</tr>

			<tr>
				<td>Blood Group:</td><td><input name="blood_group" onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" class="input_" value="<?php echo $_SESSION['blood_group']; ?>" ></input></td>
			</tr>
			
			<tr><td><h3>Upload IC Image</h3></td></tr>
			<tr>
				<td>Front <input type="file" name="front_ic" id="front_ic"></td>
			</tr>
			
			<!--<tr>
				<td>Back <input type="file" name="back_ic" id="back_ic"></td>
			</tr>-->
			
			<tr>
				<td><input type="submit" name="submit" class="submit-btn" value="Submit" width="93" height="25" onclick="window.location.href='submit.php'"/></td>
			</tr>
		</table>
	</form>
		<table><tr><td><input type="button" class="back-btn" value="Back" width="93" height="25" onclick="window.location.href='my_profile.php'"/></td></tr></table>
	</div>
	 
</body>

</html>