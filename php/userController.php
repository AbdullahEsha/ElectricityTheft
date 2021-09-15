<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');


	//add user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/register.php?error=null_value');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email
			];

			$status = insert($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/create.php?error=db_error');
			}
		}
	}

	//add company
	if(isset($_POST['create_com'])){

		$name 	       = $_POST['name'];
		$description   = $_POST['description'];
		$contactNumber = $_POST['contactNumber'];
		$password 	   = $_POST['password'];
		$photo 		   = $_POST['photo'];
		$adminId 	   = $_POST['adminId'];

		if(empty($name) || empty($description) || empty($contactNumber) || empty($password) || empty($photo) || empty($adminId)){
			header('location: ../views/creat_company.php?error=null_value');
			echo "null_value";
		}else{

			$author = [
				'name'         => $name,
				'description'  => $description,
				'contactNumber'=> $contactNumber,
				'password'     => $password,
				'photo'        => $photo,
				'adminId'      => $adminId
			];

			$status = insertAuthor($author);

			if($status){
				header('location: ../views/all_companies.php?success=done');
			}else{
				header('location: ../views/create_company.php?error=db_error');
			}
		}
	}

	//update user
	if(isset($_POST['edit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/edit.php?id={$id}');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = update($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
	}

	//update company
	if(isset($_POST['C_edit'])){

		$name 	       = $_POST['name'];
		$description   = $_POST['description'];
		$contactNumber = $_POST['industry'];
		$password 	 = $_POST['website'];
		$photo 		 = $_POST['logo'];
		$adminId 	 = $_POST['userid'];
		$id          = $_POST['id'];

		if(empty($com_name) || empty($description) || empty($industry) || empty($website) || empty($logo) || empty($userid)){
			header('location: ../views/edit_com.php?id={$id}');
		}else{

			$author = [
				'name'         => $name,
				'description'  => $description,
				'contactNumber'=> $contactNumber,
				'password'     => $password,
				'photo'        => $photo,
				'adminId'      => $adminId,
				'id'           => $id
			];

			$status = updateCom($author);

			if($status){
				header('location: ../views/all_companies.php?success=done');
			}else{
				header('location: ../views/edit_com.php?id={$id}');
			}
		}
	}
	

	if(isset($_POST['delete'])){

		$id = $_POST['id'];

		if(empty($id)){
			header('location: ../views/delete.php?id={$id}');
		}else{

			$user = [
				'id'=> $id
			];

			$status = delete($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/delete.php?id={$id}');
			}
		}
	}

	if(isset($_POST['C_delete'])){
		$id = $_POST['id'];

		if(empty($id)){
			header('location: ../views/delete_com.php?id={$id}');
		}else{

			$company = [
				
				'id'=> $id
			];

			$status = deleteAuthor($author);

			if($status){
				header('location: ../views/all_companies.php?success=done');
			}else{
				header('location: ../views/delete_com.php?id={$id}');
			}
		}
	}

?>