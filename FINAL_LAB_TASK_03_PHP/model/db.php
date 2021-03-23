<?php  

	$host = 'localhost';
	$dbUser = 'root';
	$dbPass = '';
	$dbName = 'miniproject';

	function getConnection()
	{
		global $host, $dbUser, $dbPass, $dbName; 
		$connection = mysqli_connect($host, $dbUser, $dbPass, $dbName);
		return $connection;
	}
?>