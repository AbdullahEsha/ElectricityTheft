<?php 
	session_start();
	require_once('../service/userService.php');

	if(isset($_POST['submit'])){

		$name 	  = $_POST['name'];
		$email    = $_POST['email'];
		$phone    = $_POST['phone'];
		$password = $_POST['password'];
		$nid      = $_POST['nid'];
		$img      = $_POST['img'];

		if(empty($name) || empty($email) || empty($phone) || empty($password) || empty($nid) || empty($img)){
			header('location: ../views/register.php?error=null_value1');
		}else{

			$user = [
				'name'=> $name,
				'email'=> $email,
				'phone'=> $phone,
				'password'=> $password,
				'nid'=> $nid,
				'img'=> $img
			];

			$status = insert($user);

			if($status){
				header('location: ../views/login.php?success=registration_done');
			}else{
				header('location: ../views/register.php?error=db_error');
			}
		}
	}



?>