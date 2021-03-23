<?php
	
	require_once('../model/userModel.php');
	require_once('../model/db.php');
	if(isset($_POST['change']))
	{
		
		if($_POST['confirmPass'] == "" || $_POST['newPass'] == "" || $_POST['rPass'] == "")
		{
			echo "null submission...";
		}
		elseif($_POST['newPass'] != $_POST['rPass'])
		{
			echo "  password mismatch!";
		}
		else
		{
			session_start();
			$currUser = getUserById($_SESSION['currUserId']);
			$id = $currUser['id'];
			$password = $currUser['password'];
			$newPass = $_POST['newPass'];
			if($_POST['cPass'] != $password)
			{
				echo "invalid";
			}
			else
			{
				$check = updateUserPassword($id, $newPass);
				if($check)
				{
					echo "Password changed!";
				}
				else
				{
					echo "Error!";
				}
			}
		}

	}
 
?>