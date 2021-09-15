<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$company = getByComID($_GET['id']);	
	}else{
		header('location: all_company.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Company</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Edit Company</legend>
			<table>
				<tr>
					<td>Author Name</td>
					<td><input type="text" name="company_name" value="<?=$company['company_name']?>"></td>
				</tr>
				<tr>
					<td>Description</td>
					<td><input type="text" name="profile_description" value="<?=$company['profile_description']?>"></td>
				</tr>
				<tr>
					<td>Contuct Number</td>
					<td><input type="text" name="industry" value="<?=$company['industry']?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="company_website" value="<?=$company['company_website']?>"></td>
				</tr>
				<tr>
					<td>Photo</td>
					<td><p><input type="file" name="company_logo" value="<?=$company['company_logo']?>"></td><img height="90px" src="<?=$company['company_logo']?>"></p>
				</tr>
				<tr>
					<td>Admin ID</td>
					<td><input type="text" name="user_account_id" value="<?=$company['user_account_id']?>"></td>
				</tr>

				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$company['id']?>">
						<input type="submit" name="C_edit" value="Update"> 
						<a href="all_companies.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>