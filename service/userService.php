<?php
	require_once('../db/db.php');

	function getByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM users WHERE id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getByComID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from companies where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllUser(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}

	function getAllAuthor(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from authors";
		$result = mysqli_query($conn, $sql);
		$authors = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($authors, $row);
		}

		return $authors;
	}


	function validate($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where email='{$user['email']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 ){
			return $user;
		}else{
			return $user;
		}
	}

	function insert($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into users values('', '{$user['name']}','{$user['email']}', '{$user['password']}', 'consumer', '{$user['nid']}', '{$user['img']}', '{$user['phone']}')";
	
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	

	function update($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateCom($author){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}
		$sql = "UPDATE authors SET name ='{$author['name']}', description='{$author['description']}', contactNumber ='{$author['contactNumber']}', password ='{$author['password']}',  photo ='{$author['photo']}', adminId ={$author['adminId']} WHERE id={$author['id']}";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function delete($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "DELETE FROM `users` WHERE id='{$user['id']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteAuthor($author){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "DELETE FROM authors WHERE id='{$author['id']}'";
		//echo $sql;
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>