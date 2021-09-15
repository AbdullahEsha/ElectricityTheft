<?php
	require_once('../php/session_header.php');
	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Author</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Create New User</legend>
			<table>
				<tr>
					<td>Author Name</td>
					<td><input type="text" name="name" required></td>
				</tr>
				<tr>
					<td>Description</td>
					<td><input type="text" name="description" required></td>
				</tr>
				<tr>
					<td>Contuct Number</td>
					<td><input type="text" name="contactNumber" required></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="Password" name="password" required></td>
				</tr>
				<tr>
					<td>Photo</td>
					<td><input type="file" name="photo" required></td>
				</tr>
				<tr>
					<td>ID</td>
					<td><input type="text" name="adminId" required></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="create_com" value="Create"> 
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>