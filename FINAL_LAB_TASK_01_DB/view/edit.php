<?php
	 
	include('header.php');
	require_once('../model/db.php');
?>

<?php

	// retrive data from database
	$id = $_GET['id'];
	$connection = getConnection();
	$sql = "select * from registration where id='{$id}'";
	$result = mysqli_query($connection,$sql);
	$row = mysqli_fetch_assoc($result);
?>

<div id="page_title">
	<h1>Edit Page</h1>
</div>
 

<div id="main_content">
	<form method="post" action="">
		<fieldset>
			<legend>Create New</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo $row['username'] ?>"> </td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?php echo $row['password'] ?> "> </td>
				</tr>
			
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?php echo $row['email'] ?> "> </td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="update" value="Update">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>

<?php 
	include('footer.php');

	if(isset($_POST['update']))
	{
		 
	 	$sql = "update registration set username='{$_POST['username']}' where id='{$id}'";
	 	$result = mysqli_query($connection,$sql);
	 	$sql = "update registration set password='{$_POST['password']}' where id='{$id}'";
	 	$result = mysqli_query($connection,$sql);
	 	$sql = "update registration set email='{$_POST['email']}' where id='{$id}'";
	 	$result = mysqli_query($connection,$sql);
	 	echo " update";
	}
?>