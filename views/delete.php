<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$user = getByID($_GET['id']);	
	}else{
		header('location: all_users.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Delete User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><?=$user['username']?></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><?=$user['password']?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?=$user['email']?></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<font size="3" color="red">Are you sure that you want to delete the row!!</font><br>
						<input type="hidden" name="id" value="<?=$user['id']?>">
						<input type="submit" name="delete" value="Confirm"> 
						<a href="all_users.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>