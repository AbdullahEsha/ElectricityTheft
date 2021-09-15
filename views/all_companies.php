<?php
	require_once('../php/session_header.php');
	require_once('../service/userservice.php');
?>


<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="../assets/Js/search.js"></script>
	<title>Author List</title>
</head>
<body>

	<a href="home.php">Back</a> |
	<a href="../php/logout.php">Logout</a> <br>
	<input type="text" name="search" placeholder="search" id="search" onkeyup="load();">
	<br>
	<hr>
	<div id="searchdata">search items: </div>
	<hr>
	
	<h3>Author list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Author Name</td>
			<td>Description</td>
			<td>Contuct Number</td>
			<td>Password</td>
			<td>Photo</td>
			<td>Admin Id</td>
			<td>Action</td>
		</tr>

		<?php  
			$author = getAllAuthor();
			for ($i=0; $i != count($author); $i++) {  ?>
		<tr>
			<td><?=$author[$i]['id']?></td>
			<td><?=$author[$i]['name']?></td>
			<td><?=$author[$i]['description']?></td>
			<td><?=$author[$i]['contactNumber']?></td>
			<td>****</td>
			<td><img height="128px" src="<?=$author[$i]['photo']?>"></td>
			<td><?=$author[$i]['adminId']?></td>
			<td>
				<a href="edit_com.php?id=<?=$author[$i]['id']?>">Edit</a> |
				<a href="delete_com.php?id=<?=$author[$i]['id']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>
				