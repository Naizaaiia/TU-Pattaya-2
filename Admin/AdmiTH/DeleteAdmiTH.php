<?php
	require'../Connect/dbConnect.php';
	$idSelect=$_GET['id'];
		$sql="delete from admith where id =$idSelect";
		$result=mysqli_query($con,$sql);
	if($result){
	echo"success";
	echo "<script> window.location.assign('TableAdmiTH.php'); </script>";
		
	}else{
		echo"เกิดข้อผิดพลาด";
	}

?>