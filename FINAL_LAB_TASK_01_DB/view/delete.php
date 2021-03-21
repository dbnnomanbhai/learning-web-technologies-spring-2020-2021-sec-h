<?php
	$title= "Delete  ";
	include('header.php');
	require_once('../model/db.php');
	$id = $_GET['id'];
	$connection = getConnection();
	$sql = "select * from registration where id='{$id}'";
	$result = mysqli_query($connection,$sql);
	$row = mysqli_fetch_assoc($result);
?>

<div id="page_title">
	<h1>Delete Page</h1>
</div>

 

<div>
	<form method="post" action="#">
		<table>
			<tr>
				<td> <?php echo " you want  to delete {$row['username']}'s account?" ?> </td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="delete" value="Delete">
				</td>
			</tr>
		</table>
	</form>
</div>

<?php 
	include('footer.php');
	if(isset($_POST['delete']))
	{
		$id = $_GET['id'];
		$connection = getConnection();
		$sql = "delete from registration where id='{$id}'";
		$result = mysqli_query($connection,$sql);
		header('location: user_list.php');
	}
?>