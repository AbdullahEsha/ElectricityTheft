<?php
	session_start();

	if(!isset($_SESSION['email'])){
		header('location: ../views/login.php?error=invalid_request');
	}
?>