<?php  
	session_start();
	require_once('../model/db.php');
	require_once('../model/userModel.php');
	$currUser = getUserById($_SESSION['currUserId']);
?>

 
<html>
<head>
	<title>User Profile</title>
</head>
<body>
	<center>
	<h1>
		Welcome 
		<?php 
			echo $currUser['name'];	
		?>
	</h1>
	<a href="userProfile.php">Profile</a>
	<br/>
	
	<a href="userChangePassword.php">Change Password</a>
	<br/>
 
</center>
</body>
</html>