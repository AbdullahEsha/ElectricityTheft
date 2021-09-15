<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$company = getByComID($_GET['id']);	
	}else{
		header('location: all_companies.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Company</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Delete Company</legend>
			<table>
				<tr>
					<td>Company Name</td>
					<td><?=$company['company_name']?></td>
				</tr>
				<tr>
					<td>Profile Description</td>
					<td><?=$company['profile_description']?></td>
				</tr>
				<tr>
					<td>Industry</td>
					<td><?=$company['industry']?></td>
				</tr>
				<tr>
					<td>Website</td>
					<td><?=$company['company_website']?></td>
				</tr>
				<tr>
					<td>Logo</td>
					<td><?=$company['company_logo']?></td>
				</tr>
				<tr>
					<td>Account ID</td>
					<td><?=$company['user_account_id']?></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<font size="3" color="red">Are you sure that you want to delete the row!!</font><br>
						<input type="hidden" name="id" value="<?=$company['id']?>">
						<input type="submit" name="C_delete" value="Confirm"> 
						<a href="all_companies.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>