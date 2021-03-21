<?php
	session_start();
	require_once('../model/dbConnection.php');
	if(isset($_POST['submit'])){
		
		if($_POST['username'] == "" || $_POST['password'] == ""){
			echo "null submission...";
		}else{

			$connection = getConnection();
			$sql = "select * from registration";
			$result = mysqli_query($connection, $sql);

			$check = false;
			while($row = mysqli_fetch_assoc($result))
			{
				$username = $row['username'];
				$password = $row['password'];
				if($username == $_POST['username'] && $password == $_POST['password'])
				{
					$check = true;
					$_SESSION['flag'] = true;
					$_SESSION['currUsername'] = $username;
					$_SESSION['currPassword'] = $password; 
					header('location: ../view/home.php');
				}
			}

			if($check == false)
			{
				echo "Invalid User";
			}
		}

	}
?>
