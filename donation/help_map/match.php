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
	    width: 45%;
	    /*background-color: #c6e2ff;*/
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
					<li><a href="../home/homepage.php">Home</a></li>
					<li><a href="../open_resource/open_resources.php">Open Resources</a></li>
					<li><a class="active1" href="index.php">Help/Maps</a></li>
					<li><a href="../contact_us/contact_us.php">Contact Us</a></li>>
				</ul>
					
			</nav>
		</section>
	</div>
		
	<div class="button-div">

		<h4>Select the desired organ</h4>
		<form action="match.php" method="post">
		<select name="organ">
			<option>Select</option>
		  <option name="eye" value="eye">Eyes</option>
		  <option name="heart" value="heart">Heart</option>
		  <option name="kidney" value="kidney">Kidney</option>
		  <option name="brain" value="brain">Brain</option>
		</select>
		<input type="submit" name="search" value="Search">
	</form>
	</div>

	<div class="table-div">
		<table border="1">
		<?php
			if(isset($_POST['search']) && $_POST['organ'] != 'Select'){
		?>
			
				<tr>
					<td>Organ</td>
					<td>Blood Group</td>
					<td>Hospital</td>
					<td>Address</td>
					<td>Postcode</td>
					<td>Country</td>
				</tr>

		<?php
			$organ = $_POST['organ'];

			$sql = mysqli_query($db, "SELECT organ.organ,organ.blood_group, organ.hospital_id, hospital.name,hospital.postcode,hospital.address,hospital.country FROM  organ 
									LEFT JOIN hospital ON organ.hospital_id = hospital.id
									WHERE organ.organ = '" .$organ. "' ");
			
			while($result = mysqli_fetch_assoc($sql)){
		?>
			<tr>
				<td><?php echo $result['organ']; ?></td>
				<td><?php echo $result['blood_group']; ?></td>
				<td><?php echo $result['name']; ?></td>
				<td><?php echo $result['address']; ?></td>
				<td><?php echo $result['postcode']; ?></td>
				<td><?php echo $result['country']; ?></td>
			</tr>

			
		<?php
			}
			}

		?>
		</table>
		<br/><br/><button onClick="location.href = 'index.php';">Back</button>
	</div>

	<div class="main_img">
		<img src="../img/organ.jpg" style="margin-top:3%;margin-right:3%;width:543;height:378;">
	</div>

</body>

</html>