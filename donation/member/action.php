<?php
	session_start();
	include '../include/server.php';

if(isset($_POST['submit'])){
	
	$path = "../request/edit_profile/".$_SESSION['username'];
	if(!file_exists($path) && !is_dir($path))
	{
		mkdir("../request/edit_profile/".$_SESSION['username'] , 0700);
	}
	
	$target_dir = "../request/edit_profile/".$_SESSION['username']."/";
	$front = $target_dir.basename($_FILES["front_ic"]["name"]);
	
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($front,PATHINFO_EXTENSION));
	
	if(isset($_POST["submit"])){
		$check = getimagesize($_FILES["front_ic"]["tmp_name"]);
		
		if($check !== false){
			//echo "File is an image - " . $check["mime"]. ".";
			$uploadOk = 1;
		}
		else{
			//echo "File is not an image";
			$uploadOk = 0;
		}
		
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"){
			//echo "File type not supported!";
			$uploadOk = 0;
		}
		
		if($uploadOk == 0){
			//echo "File wasn't uploaded";
		}
		else if(move_uploaded_file($_FILES["front_ic"]["tmp_name"],$front)){
			//echo "File uploaded successful!";
		}
		else{
			//echo "File wasn't uploaded!";
		}
		
		if($uploadOk == 1){
			$new_name = $target_dir."ic_front.".$imageFileType;
			rename($front,$new_name);
			
			$f_name = $_POST['f_name'];
			$l_name = $_POST['l_name'];
			$gender = $_POST['gender'];
			$email = $_POST['email'];
			$phone_no = $_POST['phone_no'];
			$age = $_POST['age'];
			$address = $_POST['address'];
			$nationality = $_POST['nationality'];
			$state = $_POST['state'];
			$postcode = $_POST['postcode'];
			$blood_group = $_POST['blood_group'];
			
			//echo $sql_line = "SELECT first_name FROM users WHERE username = '" .$_SESSION['username']. "'";
			$sql = mysqli_query($db,"SELECT * FROM users WHERE username = '" .$_SESSION['username']. "'");
			$result = mysqli_fetch_assoc($sql);
			//echo $_SESSION['username'];
			
			$file_path = $target_dir."request.txt";
			$file = fopen($file_path,"w");
			//$file = $target_dir."request.txt";
			//echo $file;
			//echo $file = $target_dir.$request_file;
			
			$text = "(First Name): " .$result['first_name']. " --> " .$f_name."

(Last Name): " .$result['last_name']. " --> " .$l_name."

(Gender): " .$result['gender']. " --> " .$gender."

(E-mail): " .$result['email']. " --> " .$email. "

(Phone No.):" .$result['phone_no']. " --> " .$phone_no. "

(Age):" .$result['age']. " --> " .$age."

(Address):" .$result['address']. " --> " .$address. "

(Nationality): " .$result['nationality']. " --> " .$nationality."

(State): " .$result['state']. " --> " .$state. "

(Postcode): " .$result['postcode']. " --> " .$postcode. "

(Blood Group): " .$result['blood_group']. " --> " .$blood_group;
			fwrite($file,$text);
			fclose($file);
			
			}
		header('location: my_profile.php'); //redirect to member's homepage
		}
	}
/*---------------------------------------------END OF SUBMIT FUNCTION--------------------------------------------*/

/*---------------------------------------------START OF DONATE FUNCTION--------------------------------------------*/
		if(isset($_POST['donate'])){
			$f_name = $_POST['f_name'];
			$l_name = $_POST['l_name'];
			$gender = $_POST['gender'];
			$email = $_POST['email'];
			$phone_no = $_POST['phone_no'];
			$age = $_POST['age'];
			$address = $_POST['address'];
			$nationality = $_POST['nationality'];
			$state = $_POST['state'];
			$postcode = $_POST['postcode'];
			$blood_group = $_POST['blood_group'];
			$organ = $_POST['organ'];

			/*echo $f_name. "<br/>";
			echo $l_name. "<br/>";
			echo $gender. "<br/>";
			echo $email. "<br/>";
			echo $phone_no. "<br/>";
			echo $age. "<br/>";
			echo $address. "<br/>";
			echo $nationality. "<br/>";
			echo $state. "<br/>";
			echo $postcode. "<br/>";
			echo $blood_group. "<br/>";
			echo $organ. "<br/>";*/

//---------------------------------- WRITE FILE ---------------------------------
			$path = "../request/donate/".$_SESSION['username'];
			if(!file_exists($path) && !is_dir($path))
			{
				mkdir("../request/donate/".$_SESSION['username'] , 0700);
			}
			
			$target_dir = "../request/donate/".$_SESSION['username']."/";


			$file_path = $target_dir."request.txt";
			$file = fopen($file_path,"w");
			//$file = $target_dir."request.txt";
			//echo $file;
			//echo $file = $target_dir.$request_file;
			
			$text = "(First Name): " .$f_name."

(Last Name): " .$l_name."

(Gender): "  .$gender."

(E-mail): "  .$email. "

(Phone No.):"  .$phone_no. "

(Age):"  .$age."

(Address):" .$address. "

(Nationality): " .$nationality."

(State): " .$state. "

(Postcode): " .$postcode. "

(Blood Group): " .$blood_group."

(Organ):" .$organ;
			
		fwrite($file,$text);
		fclose($file);

		//redirect to member's homepage
		header('location: my_profile.php');
	}
//---------------------------------- WRITE FILE ---------------------------------
?>