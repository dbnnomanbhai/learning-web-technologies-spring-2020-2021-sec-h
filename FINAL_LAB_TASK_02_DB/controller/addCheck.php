<?php
	
	require_once('../model/db.php');
	require_once('../model/productModel.php');
	if($_POST['save'])
	{
		$name = $_POST['name'];
		$bPrice = $_POST['buyingPrice'];
		$sPrice = $_POST['sellingPrice'];

		if($name == '' || $bPrice == '' || $sPrice == '')
		{
			echo "Null Submission";
		}
		else
		{
			$productDetails = array('name' => $name, 'buyingPrice' => $bPrice, 'sellingPrice' => $sPrice);
			$connection = getConnection();
			$check = insertProduct($productDetails);
			if($check)
			{
				echo "Product added!";
			}
			else
			{
				echo "Error occured!";
			}
		}
	}

?>