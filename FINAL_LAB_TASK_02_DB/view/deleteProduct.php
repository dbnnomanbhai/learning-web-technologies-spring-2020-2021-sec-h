<?php
	require_once('../model/db.php');
	require_once('../model/productModel.php');
	$id = $_GET['id'];
	$connection = getConnection();
	$selectedProduct = getProductById($id);
?>

<div id="main_content">
	<form method="post" action="">
		<table>
			<tr>
				<td> <?php echo "Are you sure to delete {$selectedProduct['name']}?" ?> </td>
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
	if(isset($_POST['delete']))
	{
		$id = $_GET['id'];
		$connection = getConnection();
		$check = deleteProduct($id);
		if($check)
		{
			echo "Product deleted!";
		}
		else
		{
			echo "Error occured!";
		}
	}
?>