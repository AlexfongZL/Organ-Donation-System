<?php
	session_start();
?>

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
	    height:450px;
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
					<li><a href="../home/homepage.php">Home</a></li>
					<li><a href="../open_resource/open_resources.php">Open Resources</a></li>
					<li><a href="../help_map/">Help/Maps</a></li>
					<li><a href="../contact_us/contact_us.php">Contact Us</a></li>>
				</ul>
					
			</nav>
		</section>
	</div>
		
	<div class="main_img">
		<img src="../img/login-main.jpg">
	</div>

	<div class="login-div">
		<div class="textbox-div">
			<form action="action.php" method="POST">
				<?php 
					if(isset($_SESSION['error'])){
						$error = $_SESSION['error'];
						echo '<p style="color:red;">' .$error. '</p>';
					}
				?>
				<input class="login-textbox" placeholder="Username" name="username"></input><br/>
				<input class="login-textbox" placeholder="Password" name="password"></input><br/><br/>

				<td><input class="button-login" type="submit" name="login" value="Login"/></td><br/><br/><br/>
			</form>

			Not a member yet?<a href="sign_up.php"> Sign up</a>
		</div>
	</div>
</body>
<?php
    unset($_SESSION["error"]);
?>

</html>