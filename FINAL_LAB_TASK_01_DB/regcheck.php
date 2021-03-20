<?php 
session_start();
$_SESSION['Name']=$_POST['name'];
	    $_SESSION['Email']=$_POST['email'];
		  $_SESSION['Gender']=$_POST['gender'];
	  $_SESSION['Password']=$_POST['password'];

?>

 
<html>
<body>

<form action="db.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>




</body>
</html>