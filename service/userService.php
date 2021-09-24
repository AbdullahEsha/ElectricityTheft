<?php
	require_once('../db/db.php');

	function getById($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM consumer WHERE id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getByConId($nid){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM consumer WHERE nid={$nid}";
		$result = mysqli_query($conn, $sql);
		$conDetail = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($conDetail, $row);
		}

		return $conDetail;
	}

	function mainCheck(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from main";
		$result = mysqli_query($conn, $sql);
		$theft = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($theft, $row);
		}

		return $theft;
	}


	function verification($l, $s){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM theft where location='$l' and status='$s'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getTheftNotification(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$value = mainCheck();

		if($value){
			for($i=0; $i != count($value); $i++){
				$a = $value[$i]['mainCurr'];
				$b = $value[$i]['lineCurr1'];
				$c = $value[$i]['consumerCurr1'];
				$d = $value[$i]['lineCurr2'];
				$f = ($b - $c);

				$v = verification('L1', 'yes');

				if($a != $b && $v == ""){
					$sql1 = "insert into theft values('', 'L1','yes', CURRENT_TIMESTAMP )";
					mysqli_query($conn, $sql1);
				}

				$v = verification('L2', 'yes');

				if($d != $f && $v == ""){
					$sql2 = "insert into theft values('', 'L2','yes', CURRENT_TIMESTAMP )";
					mysqli_query($conn, $sql2);
				}
			}
		}
		
		$sql = "SELECT * FROM theft WHERE status='yes'";
		$result = mysqli_query($conn, $sql);
		$theft = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($theft, $row);
		}

		return $theft;
	}

	
	function getAllTheft(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from theft";
		$result = mysqli_query($conn, $sql);
		$theft1 = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($theft1, $row);
		}

		return $theft1;
	}

	function getAllMain(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from main";
		$result = mysqli_query($conn, $sql);
		$main = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($main, $row);
		}

		return $main;
	}


	function getAllUser(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where userType='consumer'";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
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

	function insertMain($arrayKey){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into main values('', '{$arrayKey['mainCurr']}','{$arrayKey['lineCurr1']}', '{$arrayKey['consumerCurr1']}', '{$arrayKey['lineCurr2']}', '{$arrayKey['consumerCurr2']}', '{$arrayKey['dateTime']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>