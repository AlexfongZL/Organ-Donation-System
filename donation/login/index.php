<!DOCTYPE html>

<html lang="en">
<head>
	<title>Glossary Organ Donation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../include/css/title.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/topdirectory.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/header.css" />
	<link rel="stylesheet" type="text/css" href="../include/css/downdirectory.css" />
	<script src="../include/js/overview.js"></script>
	<script src="../include/js/login.js"></script>
	

</head>

<style>
	.button-div{
		/*margin-left:10%;
	    margin-top:5%;
	    margin-right:65%;
	    padding:1px 16px;
	    height:1000px;
	    background-color: grey;*/

	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    width: 15%;
	    /*background-color: #c6e2ff;*/
	    position: fixed;
	    height: 100%;
	    overflow: auto;
	    size:50px;
	    font: 23px arial, sans-serif;

	}

	.button{
		margin-top:10%;
		margin-left:30%;
		display: inline-block;
	  padding: 10px 20px;
	  font-size: 20px;
	  cursor: pointer;
	  text-align: center;
	  text-decoration: none;
	  outline: none;
	  color: #fff;
	  background-color: #4CAF50;
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
		margin-left:25%;
	    margin-right:3%;
	    padding:1px 16px;
	    height:1000px;
	}
</style>

<body style="background-color:HoneyDew;">
	<div class="threetop">
		<div class="logo">
			<img class="img1" src="../img\heart.jpg" style="max-width:10%;height:auto;">
		</div>
		<div class="title">
			<h1 class="header1">Glossary Organ Donation</h1>
		</div>
		<div class="loginsignup">
			<a href="../login\login.php">LogIn<a/>
		</div>
	</div>
	
	<div>
		<section class="1">
			<nav class="top">
				<ul class="topdirectory">
					<li><a href="../home/homepage.php">Home</a></li>
					<li><a href="../open_resource/open_resources.php">Open Resources</a></li>
					<li><a class="active1" href="help_maps.php">Help/Maps</a></li>
					<li><a href="contact_us.php">Contact Us</a></li>>
				</ul>
					
			</nav>
		</section>
	</div>
		
	<div class="button-div">
		<button class="button" onClick="location.href = 'hospital_list.php';">Hospital list</button><br/>
		<button class="button" onClick="location.href = 'match.php';">Search for matching organ</button><br/>
		<button class="button" onClick="location.href = 'ngo.php';">Other NGO's Organ Donation</button><br/>
	</div>

	<div class="main_img">
		<img src="../img/map_img.jpg" style="margin-top:3%;margin-right:3%;width:1086px;height:756px;">
	</div>
</body>

</html>