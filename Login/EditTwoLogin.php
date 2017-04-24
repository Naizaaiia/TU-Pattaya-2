<?php

	require'../Connect/dbConnect.php';//เชื่อมต่อฐานข้อมูล
	//รับค่าจากFormมาใส่ในฐานข้อมูล
	
	$username =$_POST['username'];
	$password =$_POST['password'];

	$id_select=$_POST['id_select'];
	$sql="update Login set username='$username',password='$password' where id=$id_select";
	$result=mysqli_query($con,$sql);
	
	if($result){
	echo"success";
	echo "<script> window.location.assign('TableLogin.php'); </script>";
	}else{
		echo "เกิดข้อผิดพลาด".mysqli_error($con);
	}
?>