<?php
	include '../include/server.php';
	
	date_default_timezone_set('Asia/Kuala_Lumpur');

	if(isset($_POST['register'])){
		
		$ic = $_POST['ic'];
		$f_name = $_POST['f_name'];
		$l_name = $_POST['l_name'];
		
		$gender = $_POST['gender'];
		$username = $_POST['username'];
		$password = md5($_POST['psw']);

		$email = $_POST['email'];
		$phone_no = $_POST['phone'];
		$age = $_POST['age'];
		
		$address = $_POST['address'];

		if($_POST['nationality'] != 'Select'){
			$nationality = $_POST['nationality'];
		}
		else{
			$nationality = 'UNKNOWN';
		}
		$state = $_POST['state'];
		
		$postcode = $_POST['postcode'];
		$blood_group = $_POST['blood'];

		$date = new DateTime("now", new DateTimeZone('Asia/Kuala_Lumpur') );
        $user_id = $date->format('ymdHis');


        $sql_insert_user = mysqli_query($db, "INSERT INTO users SET 
        	user_id = '$user_id',
        	ic = '$ic',
        	first_name = '$f_name',
        	last_name = '$l_name',
        	gender = '$gender',
        	username = '$username',
        	password = '$password',
        	email = '$email',
        	phone_no = '$phone_no',
        	age = '$age',
        	address = '$address',
        	nationality = '$nationality',
        	state = '$state',
        	postcode = '$postcode',
        	blood_group = '$blood_group'");

        echo "<script>window.location = 'login.php'</script>";
	}

?>