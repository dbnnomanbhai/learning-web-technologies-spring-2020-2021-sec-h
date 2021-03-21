<?php
	require_once('../model/db.php');
	require_once('../model/productModel.php');
	$id = $_GET['id'];
	$connection = getConnection();
	$selectedProduct = getProductById($id);
?>

<div id="main_content">
	<form method="post" action="">
		<fieldset>
			<legend>Edit</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo $selectedProduct['name'] ?>"> </td>
				</tr>
				<tr>
					<td>Buying Price</td>
					<td><input type="text" name="bPrice" value="<?php echo $selectedProduct['buyingPrice'] ?> "> </td>
				</tr>
			
				<tr>
					<td>Selling Price</td>
					<td><input type="text" name="sPrice" value="<?php echo $selectedProduct['sellingPrice'] ?> "> </td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="update" value="Update">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>

<?php 
	if(isset($_POST['update']))
	{
		// update database
		$name = $_POST['name'];
		$bPrice = $_POST['bPrice'];
		$sPrice = $_POST['sPrice'];
		$productDetails = array('name' => $name, 'buyingPrice' => $bPrice, 'sellingPrice' => $sPrice);
		$connection = getConnection();
		$check = updateProduct($productDetails);
		if($check)
		{
			echo "Product updated!";
		}
		else
		{
			echo "Error occured!";
		}
	}
?>