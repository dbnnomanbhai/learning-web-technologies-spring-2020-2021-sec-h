<?php  
	
	require_once('../model/db.php');
	require_once('../model/userModel.php');

	if(isset($_POST['register']))
	{
		$id = $_POST['id'];
		$password = $_POST['password'];
		$confirmPassword= $_POST['confirmPassword'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$type = $_POST['type'];

		if($id == "" || $password == "" || $confirmPassword == "" || $name == "" || $email == "")
		{
			echo " there has no value inserted";
		}else
		{

			if($password == $confirmPassword)
			{
				$userDetails = array('id' => $id, 'password' => $password, 'name' => $name, 'email' => $email, 'type' => $type);
				$check = insertUser($userDetails);
				if($check)
				{
					echo "User added!";
					header('location: ../view/login.php');
				}
				else
				{
					echo "Error!";
				}
			}
			else
			{
				echo "password & confirm password not same or mismatch";
			}
		}

	}
?>
