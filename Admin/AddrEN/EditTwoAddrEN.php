<?php

	require'../Connect/dbConnect.php';//เชื่อมต่อฐานข้อมูล
	//รับค่าจากFormมาใส่ในฐานข้อมูล
	
	$Header =$_POST['Header'];
	$Detail =$_POST['Detail'];

	$id_select=$_POST['id_select'];
	$sql="update Addren set Header='$Header',Detail='$Detail' where id=$id_select";
	$result=mysqli_query($con,$sql);
	
	if($result){
	echo"success";
	echo "<script> window.location.assign('TableAddrEN.php'); </script>";
	}else{
		echo "เกิดข้อผิดพลาด".mysqli_error($con);
	}
?>