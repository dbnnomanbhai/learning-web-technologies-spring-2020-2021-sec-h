<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/userModel.php');
	$currUser = getUserById($_SESSION['currUserId']);
?>

<div id="main_content">
	<fieldset>
		<legend>Profile</legend>
		<?php
		echo "<table border = 1 cellspacing = 0>
			<tr>
				<td>ID</td>
				<td>{$currUser['id']}</td>
			</tr>
			<tr>
				<td>NAME</td>
				<td>{$currUser['name']}</td>
			</tr>
			<tr>
				<td>EMAIL</td>
				<td>{$currUser['email']}</td>
			</tr>
				<td>USER TYPE</td>
				<td>{$currUser['type']}</td>
			</tr>
			<tr>
				<td colspan=2 align = 'right'>
				<a href='userHome.php'> Go Home</a>
				</td>
			</tr>
		</table>";
	?>
	</fieldset>  
</div>