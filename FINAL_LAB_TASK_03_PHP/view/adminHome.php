<?php  
	session_start();
	require_once('../model/db.php');
	require_once('../model/userModel.php');
	$currUser = getUserById($_SESSION['currUserId']);
?>

 
<html>
<head>
	<title>Admin Profile</title>
</head>
<body>
	<center>
	<h1>Welcome
		<?php
			echo $currUser['name']; 
		?>
	!</h1>
	<a href="adminProfile.php">Profile</a>
	<br/>
	<a href="adminChangePassword.php">Change Password</a>
	<br/>
	<a href="allUserList.php">View Users</a>
	<br/>
	 
</center>
</body>
</html>