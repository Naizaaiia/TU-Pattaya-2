<?php
	require'../Connect/dbConnect.php';;
	$idSelect=$_GET['id'];
		$sql="delete from admiEN where id =$idSelect";
		$result=mysqli_query($con,$sql);
	if($result){
	echo"success";
	echo "<script> window.location.assign('TableAdmiEN.php'); </script>";
		
	}else{
		echo"เกิดข้อผิดพลาด";
	}

?>