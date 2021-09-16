<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if(isset($_POST['submit'])){

		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($email) || empty($password)){
			header('location: ../views/login.php?error=null_value');
		}else{

			$user = [
				'email'=>$email,
				'password'=>$password,
			];
			
			$status = validate($user);

			$id       = $status['id'] ;
			$name     = $status['name'] ;
			$phone    = $status['phone'] ;
			$img      = $status['img'];
			$userType = $status['userType']; 


			if($status){
				$status['id'] = $id;
				$status['name'] = $name;
				if($status['userType'] == "consumer"){
					$_SESSION['name'] = $name;
					$_SESSION['email'] = $email;
					$_SESSION['id'] = $id;
					$_SESSION['img'] = $img;
					$_SESSION['userType'] = $userType;

					header('location: ../views/consumerPage.php');
				} 
				else if($status['userType'] == "distributor"){
					$_SESSION['name'] = $name;
					$_SESSION['email'] = $email;
					$_SESSION['id'] = $id;
					$_SESSION['img'] = $img;
					$_SESSION['userType'] = $userType;
					
					header('location: ../views/distributorPage.php');
				}
				else{
					echo "sorry!!!";
				}
			}else{
				header('location: ../views/login.php?error=invalid_user');
			}
		}
	}
?>