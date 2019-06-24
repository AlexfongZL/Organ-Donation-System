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
	<script src="../include/js/overview.js"></script>
	<script src="../include/js/login.js"></script>
	

</head>

<style>
	.button-div{
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    width: 15%;
	    /*background-color: #c6e2ff;*/
	    position: absolute;
	    height: 100%;
	    overflow: auto;
	    size:50px;
	    font: 23px arial, sans-serif;
	    
	}

	.table-div{
	    list-style-type: none;
	    margin-top: 10%;
	    padding: 0;
	    width: 20%;
	    position: absolute;
	    height: 100%;
	    overflow: auto;
	    size:50px;
	    font: 15px arial, sans-serif;
	    
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
	    position:relative;
	    left:30%;
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
					<li><a href="homepage.php">Home</a></li>
					<li><a href="open_resources.php">Open Resources</a></li>
					<li><a class="active1" href="index.php">Help/Maps</a></li>
					<li><a href="contact_us.php">Contact Us</a></li>>
				</ul>
					
			</nav>
		</section>
	</div>
		
	<div class="button-div">

		<h4>Country</h4>
		<form action="ngo.php" method="post">
		<select name="country">
		  <option>Select</option>
		  <option>Malaysia</option>
		  <option>Brunei</option>
		  <option>Singapore</option>
		  <option>Indonesia</option>
		</select>
		<input name="search" value="Search" type="submit">
	</form>
	</div>

	<div class="table-div">
		<table border="1">
		<?php
			if(isset($_POST['search']) && $_POST['country'] != 'Select'){
		?>
			
				<tr>
					<td>Name</td>
					<td>Country Base</td>
					<td>Motto</td>
				</tr>

		<?php
			$country = $_POST['country'];

			$sql = mysqli_query($db, "SELECT * FROM ngo WHERE country =  '" .$country. "'");
			
			while($result = mysqli_fetch_assoc($sql)){
		?>
			<tr>
				<td><?php echo $result['name']; ?></td>
				<td><?php echo $result['country']; ?></td>
				<td><?php echo $result['motto']; ?></td>
			</tr>

			
		<?php
			}
			}

		?>
		</table>
		<br/><br/><button onClick="location.href = 'index.php';">Back</button>
	</div>

	<div class="main_img">
		<img src="../img/ngo.jpg" style="margin-top:3%;margin-right:3%;width:543px;height:378px;">
	</div>
</body>

</html>