<?php
	include '../include/server.php';
	
	if(isset($_POST['submit'])){
		$username = $_POST["username"];
		$email = $_POST["email"];
		$comment = $_POST["comment"];
		$date = new DateTime("now", new DateTimeZone('Asia/Kuala_Lumpur') );
        $id = $date->format('ymdHis');


		$comment_length = strlen($comment);
		
		if($comment_length > 100)
		{
			header("location: ../contact_us/contact_us.php?error=1");
		}
		else
		{
			$sql = "INSERT INTO feedback (feedback_id, username, email, feedback_message) VALUES ('$id', '$username', '$email', '$comment')";
			/*$sql = "INSERT INTO feedbsck SET
					username = '$username',
					email = '$email',
					feedback = '$comment '";*/
			mysqli_query($db, $sql);
			header("location: ../contact_us/contact_us.php");
		}
		
	}



?>

<!DOCTYPE html>

<html lang="en">
<head>
	<title>Glossary Organ Donation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../include/css/title.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/topdirectory.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/header.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/downdirectory.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/cont.css" />

</head>

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
		<nav class="top">
			<ul class="topdirectory">
			<li><a href="../home/homepage.php">Home</a></li>
			<li><a href="../open_resource/open_resources.php">Open Resources</a></li>
			<li><a href="../help_map/">Help/Maps</a></li>
			<li><a class="active1" href="../contact_us/contact_us.php">Contact Us</a></li>
		</ul>
				<div class="content">
					<?php if(isset($_SESSION['success'])): ?>
						<div class="error success">
							<h3>
								<?php	
									echo $_SESSION['success'];
									unset($_SESSION['success']);
								?>
							</h3>
						</div>
					<?php endif ?>
	
					<?php if (isset($_SESSION["username"])): ?>
						<p>Welcome<strong><?php echo ' ' .$_SESSION['username']; ?></strong></p>
						<p><a href="login.php?logout='1'" style="color: red;">Logout</a></p>
					<?php endif ?>
				</div>
		</nav>
	</div>
	
	<div class="divid">
		<div class="wrapper">
			<h2>Contact and Feedback</h2>
			<p>Responds from us is within 1-2 days working hour</p>
			<form action="contact_us.php" method="post">
			<input type="text" name="username" id="contact" placeholder="Enter your name">
			<input type="text" name="email" id="contact" placeholder="Enter your email">
			<input type="text" name="" id="" placeholder="Enter your phone number">
			<textarea name="comment" id="contact" cols="30" rows="10" placeholder="Type Your Message here"></textarea>
			<input type="submit" class="contact submit" value="SUBMIT" name="submit">
			</form>
			
		</div>
		<div class="info">
			<h3>The Online Donation</h3>
			<p>Helpline: 1800-2431-6857</p>
			<p>Email: info@onlinedonation.org</p>
			<p>Address:<br/>
				Wisma GODS, No 1 Hati<br/>Level 1-2 Paru-Paru<br/>Lorong Kidney HOS<br/>
				Taman Derma Organ Negara, 12345<br/>Wilayah Persekutuan Kuala Lumpur</p><br/>
		</div>
	</div>
</body>

</html>