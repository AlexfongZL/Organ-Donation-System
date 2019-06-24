<!DOCTYPE html>

<html lang="en">
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../include/css/title.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/topdirectory.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/header.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/downdirectory.css" />
	<script src="../include/js/overview.js"></script>
	<script src="../include/js/login.js"></script>
	

</head>

<style>
	.button-login{
		margin: auto;
		margin-top: 10%;
		display: inline-block;
	  padding: 10px 20px;
	  font-size: 20px;
	  cursor: pointer;
	  text-align: center;
	  text-decoration: none;
	  outline: none;
	  color: #fff;
	  background-color: red;
	  border: none;
	  border-radius: 15px;
	  box-shadow: 0 9px #999;
	}

	.button_login:hover {background-color: #3e8e41}

	.button_login:active {
	  background-color: #3e8e41;
	  box-shadow: 0 5px #666;
	  transform: translateY(4px);
	}

	.main_img{
		margin-left:10%;
		margin-top:1%;
	    padding:1px 1px;
	    height:0px;
	    width:0px;
	    
	}

	.login-div{
		margin-left:50%;
		margin-right:3%;
		margin-top:0%;
	    padding:1px 16px;
	    height:950px;
	    width:500px;
	    background-color: pink;
	}

	.login-textbox{
		margin: auto;
		margin-top: 10%;
		width: 100%;
	}

	.textbox-div{
		margin: auto;
		margin-top: 10%;
	    width: 50%;
	    padding: 10px;
	}

</style>

<body style="background-color:HoneyDew;">
	<div class="threetop">
		<div class="logo">
			<img class="img1" src="../img/heart.jpg" style="max-width:10%;height:auto;">
		</div>
		<div class="title">
			<h1 class="header1">Glossary Organ Donation</h1>
		</div>
		<div class="loginsignup">
			<a href="../login/login.php">LogIn<a/>
		</div>
	</div>
	
	<div>
		<section class="1">
			<nav class="top">
				<ul class="topdirectory">
					<li><a href="homepage.php">Home</a></li>
					<li><a href="open_resources.php">Open Resources</a></li>
					<li><a href="help_maps.php">Help/Maps</a></li>
					<li><a href="contact_us.php">Contact Us</a></li>>
				</ul>
					
			</nav>
		</section>
	</div>
		
	<div class="main_img">
		<img src="../img/login-main.jpg">
	</div>

	<div class="login-div">
		<div class="textbox-div">
			<form id="registrations" action="register_action.php" method="post"> <!-- php file to save data -->
			<p style="color:red;">* indicates input that must be filled</p>
			Identification Card (IC)*:<br>
			<input type="number" name="ic" id="ic" required><br><br>

			First Name*:<br>
			<input onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" type="text" name="f_name" id="button" required><br><br>

			Last Name*:<br>
			<input onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" type="text" name="l_name" id="button" required><br><br>

			Gender:<br>
			<input type="radio" name="gender" id="rad" value="male" checked>Male<br>
			<input type="radio" name="gender" id="rad" value="female">Female<br><br>
			
			Username*:<br>
			<input type="text" 	name="username" id="button" required><br><br>			
			
			User password*:<br>
			<input type="password" name="psw" id="button" required><br><br><br><br>

			E-mail*:
			<input type="email" name="email" id="button" required><br><br>

			Phone No.*:
			<input type="text" name="phone" id="button" required><br><br>
			
			Age*:
			<input type="number" name="age" id="button" required><br><br>

			Address*:
			<input onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" type="text" name="address" id="button" required><br><br>

			Nationality:
				<select name="nationality">
				  <option>Select</option>
				  <option>MALAYSIAN</option>
				  <option>INDONESIAN</option>
				  <option>SINGAPOREAN</option>
				</select>
				<br/><br/>

			State:
			<input onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" type="text" name="state" id="button"><br><br>

			Postcode:
			<input type="text" name="postcode" id="button"><br><br>

			Blood group:
			<input onblur="this.value=this.value.toUpperCase();" onkeyup="this.value=this.value.toUpperCase();" type="text" name="blood" id="button"><br><br>

			<input type="submit" value="Submit" id="register" name="register">
			<input type="reset" id="reset">

		</form>

			<br/><br/>Already a member? <a href="login.php">Sign in</a>
		</div>
	</div>
</body>

</html>	