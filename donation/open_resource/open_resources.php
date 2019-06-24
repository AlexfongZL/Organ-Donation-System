<?php
	include '../include/server.php';
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
	<link rel="stylesheet" type="text/css" href="../include/css/video.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/popup1.css" />
	<script src="../include/js/overview.js"></script>	
	<script src="../include/js/popup1.js"></script>	

</head>

<body style="background-color:HoneyDew;">
	<div class="threetop">
		<div class="logo">
			<img class="img1" src="..\img\heart.jpg" style="max-width:10%;height:auto;">
		</div>
		<div class="title">
			<h1 class="header1">Glossary Organ Donation</h1>
		</div>
		<div class="loginsignup">
			<a href="..\login\login.php">LogIn<a/>
		</div>
	</div>
	
	<div>
		<nav class="top">
			<ul class="topdirectory">
			<li><a href="../home/homepage.php">Home</a></li>
			<li><a class="active1" href="../open_resource/open_resources.php">Open Resources</a></li>
			<li><a href="../help_map/">Help/Maps</a></li>
			<li><a href="../contact_us/contact_us.php">Contact Us</a></li>
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
	
	<div class="div2">
		<div class="column menu">
			<ul class="bottomdirectory">
				<li name="tab" onclick="openTab(this)">Picture/Video</li>
				<li name="tab" onclick="openTab(this)">Donor/Recepient Feedback</li>
				<li name="tab" onclick="openTab(this)">News</li>
				<li name="tab" onclick="openTab(this)">Other NGO`s</li>
				<li name="tab" onclick="openTab(this)">5W</li>
				<li name="tab" onclick="openTab(this)">Take a survey</li>
			</ul>
		</div>
		
		<div id="Picture/Video" class="column_content">
			<h1>Picture/Video</h1>
			<div class="video">
				<video class="vid" controls>
					<source src="../vid/donation.mp4" type="video/mp4">
				</video>
				<img class="pic1" src="../img/picture1.png">
			</div>
		</div>
		<div id="Donor/Recepient Feedback" class="column_content">
			<h1>Donor/Recepient Feedback</h1>
			<div>
				<?php
					$find_comments = mysqli_query($db, "SELECT * FROM feedback");
					while($row = mysqli_fetch_assoc($find_comments))
					{
						echo $row['username']."<br/>";
						echo $row['email']."<br/>";
						echo $row['feedback_message']."<br/><br/><br/>";
					}
				?>
			</div>
		</div>
		<div id="News" class="column_content">
			<h1>News</h1>
			<div class="gallery">
					<img src="../img/news1.jpg" width="300" height="200">
			</div>

			<div class="gallery">
					<img src="../img/news2.jpg" width="300" height="200">
			</div>

			<div class="gallery">
					<img src="../img/news3.jpg" width="300" height="200"><br/><br/>
			</div>
			<ul>
				<li class="liname"><a class="ulname" href="http://www.mst.org.my/articles/islamview.html">Islam and Organ Donation</a></li>
				<li class="liname"><a class="ulname" href="https://www.thestar.com.my/news/nation/2010/01/06/ijn-does-lung-transplant-again/">IIJN does lung transplant again </a></li>
			</ul>
		</div>
		<div id="Other NGO`s" class="column_content">
			<h1> Government and NGo's Involved</h1>
			<a href="http://www.mst.org.my/">1. Malaysia Society of Transplantation</a><br/><br/>
			<a href="http://www.nkf.org.my/National">2. Kidney Foundation (NKF)</a>
		</div>
		<div id="5W" class="column_content">
			<h1>5W's</h1>
			<p class="text2"><a href="https://www.mayoclinic.org/healthy-lifestyle/consumer-health/in-depth/organ-donation/art-20047529">Why should I donate organ?</a></p>
			<p class="text"> By donating your organs after you die, you can save or improve as many as 
							 50 lives. Many families say that knowing their loved one helped save other 
							 lives helped them cope with their loss. ... 
							 Because matching blood type is usually necessary for transplants, 
							 the need for minority donor organs is especially high.</p>
			<p class="text2"><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3675206/">Who do I help or save?</a></p>
			<p class="text"> Organ donation provides a life-giving, life-enhancing opportunity
							 to those who are at the end of the line for hope. And the need for
							 organ donors is growing.</p>
			<p class="text2"><a href="https://www.kidney.org/transplantation/livingdonors/what-expect-after-donation">What happen after donating organ?</a></p>
			<p class="text"> The length of stay in the hospital will vary depending on the individual
							 donor's rate of recovery and the type of procedure performed 
							 (traditional vs laparoscopic kidney removal) although the usual stay 
							 is 4 to 6 days. Since the rate of recovery varies greatly among individuals,
							 be sure to ask the transplant center for their estimate of your particular 
							 recovery time.</p>
			<p class="text2"><a href="http://www.donorrecovery.org/learn/frequently-asked-questions/">When can I donate organ?</a></p>
			<p class="text"> At the time of death, the potential donor's organs are evaluated to 
							 determine their suitability for donation. Individuals in their 80s and 90s 
							 have successfully donated organs including liver and kidneys to save the 
							 lives of others. You must be 18 years of age to register through the state's 
							 Donate life Registry.</p>
			<p class="text2"><a href="https://says.com/my/lifestyle/organ-donation-in-malaysia">Where do I have to go to donate organ?</a></p>
			<p class="text">Hospital Kuala Lumpur            (Kidney transplant)<br/>
							Hospital Selayang                (Kidney and Liver transplant)<br/>
							University Malaya Medical Centre (Kidney transplant)<br/>
							National Heart Institute         (Heart and Lungs transplant)</p>
		</div>
		<div id="Take a survey" class="column_content">
			<h1>Survey</h1>
			<form id="myForm">
				<p class="text" style="text-decoration:none;">Is this website helpful?</p>
				<input type="radio" name="option" checked>Yes
				<input type="radio" name="option">Maybe
				<input type="radio" name="option">No<br/><br/>

				<p class="text" style="text-decoration:none;">Were the information helpfull?</p>
				<input type="radio" name="option2" checked>Yes
				<input type="radio" name="option2">Maybe
				<input type="radio" name="option2">No<br/><br/>
	
				<p class="text" style="text-decoration:none;">Is this website easy to navigate?</p>
				<input type="radio" name="option3" checked>Yes
				<input type="radio" name="option3">Maybe
				<input type="radio" name="option3">No<br/><br/>
				
				<p class="text" style="text-decoration:none;">Is there any issue with the website? Please state your reason below</p>
				<input type="radio" name="option4" checked>Yes
				<input type="radio" name="option4">Maybe
				<input type="radio" name="option4">No<br/><br/>
				
				<textarea name="" id="" cols="30" rows="10" placeholder="Type Your Message here"></textarea><br/>
				<div class="popup" style="text-decoration:underline; color: blue;" onclick="myPopup()">
					Submit<span class="popuptext" id="Popup">Thank you for your feedback</span></div>
			</form>
		</div>

</body>

</html>