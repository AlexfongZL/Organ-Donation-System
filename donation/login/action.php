<?php
	session_start();
	include '../include/server.php';

	if (isset($_POST['login']))
	{
		$error_message = '**Invalid username and password';
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		
			//if($username == "admin" && $password == "1234"){
			//	header('location: ../admin/admin_home.php'); //redirect to member's homepage
			//}
			
			$password = md5($password);  // encrypted password before comparing with database
			$querry = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db, $querry);
			$session_data = mysqli_fetch_assoc($result);
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['username'] = $username;
				$_SESSION['first_name'] = $session_data['first_name'];
				$_SESSION['last_name'] = $session_data['last_name'];
				$_SESSION['gender'] = $session_data['gender'];
				$_SESSION['email'] = $session_data['email'];
				$_SESSION['phone_no'] = $session_data['phone_no'];
				$_SESSION['age'] = $session_data['age'];
				$_SESSION['address'] = $session_data['address'];
				$_SESSION['nationality'] = $session_data['nationality'];
				$_SESSION['state'] = $session_data['state'];
				$_SESSION['postcode'] = $session_data['postcode'];
				$_SESSION['blood_group'] = $session_data['blood_group'];


			if($username == "admin"){
				header('location: ../admin/admin_home.php'); //redirect to member's homepage
			}

			else{
				header('location: ../member/my_profile.php'); //redirect to member's homepage
			}
				
			}
			else{
				$_SESSION['error'] = $error_message;
				header('location: login.php');
			}
			}

?>