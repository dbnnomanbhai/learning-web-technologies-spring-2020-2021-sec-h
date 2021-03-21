<?php
	session_start();

	require_once('../model/UserModel.php');

	if(isset($_POST['save_btn'])){
		$name = $_POST['name'];
		$Bprice = $_POST['Bprice'];
		$Sprice = $_POST['Sprice'];


		if($name=""||$Bprice=="" ||$Sprice==""){
			echo "*Null Submission....";
		}else{
			$user = [	
						'name'=>$name, 
						'Bprice'=>$Bprice, 
						'Sprice'=> $Sprice
					];

			$status = insertUser($user);

			if($status){
				echo "Success...";
			}else{
				echo "Error...";
			}
		}
	}
?>
