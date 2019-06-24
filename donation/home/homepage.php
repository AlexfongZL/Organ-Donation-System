<!DOCTYPE html>

<html lang="en">
<head>
	<title> Organ Donation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../include/css/title.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/topdirectory.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/header.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/downdirectory.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/centerdirectory.css" />
	<script type="text/javascript" src="../include/js/overview.js"></script>	


</head>

<body style="background-color:HoneyDew;">
	<div class="threetop">
		<div class="logo">
			<img class="img1" src="..\img\heart.jpg" style="max-width:15%;height:auto;">
		</div>
		<div class="title">
			<h1 class="header1">Online Organ Donation</h1>
		</div>
		<div class="loginsignup">
			<a href="../login\login.php">LogIn<a/>
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
		</div>
	</div>

	<div>
		<nav class="top">
			<ul class="topdirectory">
				<li><a class="active1" href="../home/homepage.php">Home</a></li>
				<li><a href="../open_resource/open_resources.php">Open Resources</a></li>
				<li><a href="../help_map/">Help/Maps</a></li>
				<li><a href="../contact_us/contact_us.php">Contact Us</a></li>
			</ul>
		</nav>
	</div>
	
	<div class="centerdirectory">
	
		<input type="radio" name="images" id="i1" checked>
		<input type="radio" name="images" id="i2">
		<input type="radio" name="images" id="i3">
		<input type="radio" name="images" id="i4">
		
		<div class="slide_img" id="one">
			<img src="..\img\pic1.jpg">
			
			<label for="i4" class="pre"></label>
			<label for="i2" class="nxt"></label>
			
		</div>
		<div class="slide_img" id="two">
			<img src="..\img\pic2.jpg">
			
			<label for="i1" class="pre"></label>
			<label for="i3" class="nxt"></label>
			
		</div>
		<div class="slide_img" id="three">
			<img src="..\img\pic3.png">
			
			<label for="i2" class="pre"></label>
			<label for="i4" class="nxt"></label>
			
		</div>
		<div class="slide_img" id="four">
			<img src="..\img\pic4.jpg">
			
			<label for="i3" class="pre"></label>
			<label for="i1" class="nxt"></label>
			
		</div>
		
		<div class="nav">
			<label class="dots" id="dot1" for="i1"></label>
			<label class="dots" id="dot2" for="i2"></label>
			<label class="dots" id="dot3" for="i3"></label>
			<label class="dots" id="dot4" for="i4"></label>
		</div>
	</div>
	
	<div class="div2">
		<div class="column menu">
			<ul class="bottomdirectory">
				<li name="tab" onclick="openTab(this)">Overview</li>
				<li name="tab" onclick="openTab(this)">About Us</li>
				<li name="tab" onclick="openTab(this)">Info</li>
			</ul>
		</div>
						
		<div id="Overview" class="column_content">
			<h1 class="title1">OVERVIEW</h1>
			<p id="text1"> The online Organ Donation is an improvement of the manual and web based
				organ donation management system. The current system has features of giving 
				information and donor/recepient registration with additional overview of organ
				donation history, reports, and organization involved.</p>
			<p id="text1"> The users who registered can access their medical information online and report
				while other users can cruise through the website and learn more about what 
				organ donation and what it benefits to the current society</p>
			<p id="text1"> Organ transplantation is the replacement if diseased and damaged organs which 
				can be obtain from living or deceased donors. For those who register under the Online
				Organ Donation Website, they will have a chance to become a member of the donor who
				will have permit to donate organ and recepient who will be receiving the donated
				organs</p>
			<img src="..\img\overview1.jpg">
		</div>
		<div id="About Us" class="column_content">
			<h1 class="title2">ABOUT US</h1>
			<p id="text1"> The Online Organ Donation is a platform where users will have easy time to register and
				take part in the organ donation. Mostly ,in Malaysia, organ donation usually require
				users to go to the hospital and manually filled in the form in order to donate organs.</p>
			<p id="text1"> In order to ease donor and recepient, the Online Organ Donation help them to establish
				a platform for them to register without the need to travel to hospital. Once register, 
				the donor/recepient will receive an email, notifying their appointment time and which nearest
				hospital.</p>
			<img class="imgaboutus" src="..\img\aboutus1.png">
			<p id="text1"> This Online Organ Donation is to help ease the process of registering and appointment
				rather than have to wait a long queue just to get the paperwork. Looking forward on this
				project, users will be free to locate other donors/recepient using the maps which will 
				allow easy contacting other users.</p>
		</div>
		<div id="Info" class="column_content">
			<h1 class="title4">INFO</h1>
			<p id="text1"> Organ donation is a surgical procedure for the removal of organs from donor to the purpose
				of transplantation. Organ donation saves lives and improves quality of life.</p>
			<p id="text1"> Organ donation in Malaysia is voluntary where expressed consent is required.</p>
			<p id="text1"> Two type of organ donation: <br/>
				- Deceased organ donation<br/>
				- Living organ donation<p/>
			<p id="text1"> Mortality risk (Donor)<br/>
				Kidney donation = 0.031%<br/>
				Liver donation = right lobe liver(0.5%) / left lobe liver(0.1%)</p>
			<img class="imginfo" src="..\img\info.png">
		</div>
	</div>
</body>

</html>