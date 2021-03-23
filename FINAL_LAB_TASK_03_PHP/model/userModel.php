<?php  

	function insertUser($userDetails)
	{
		$conn = getConnection();
		$sql = "insert into users values('{$userDetails['id']}', '{$userDetails['password']}', '{$userDetails['name']}', '{$userDetails['email']}', '{$userDetails['type']}')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getAllUser()
	{
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($users, $row); 
		}

		return $users;
	}

	function getUserById($id)
	{

		$conn = getConnection();
		$sql = "select * from users where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function updateUserPassword($id, $password)
	{

		$conn = getConnection();
		$sql = "update users set password = '{$password}' where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
?>