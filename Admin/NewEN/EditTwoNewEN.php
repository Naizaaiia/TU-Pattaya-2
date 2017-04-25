<?php
	$target = "name/".basename($_FILES['image']['name']);
	require'../Connect/dbConnect.php';//เชื่อมต่อฐานข้อมูล
	//รับค่าจากFormมาใส่ในฐานข้อมูล
	$Image = $_FILES['image']['name'];
	$Header =$_POST['Header'];
	$Detail =$_POST['Detail'];

	$id_select=$_POST['id_select'];
	$sql="update newen set Image="."'$Image',Header='$Header',Detail='$Detail' where id=$id_select";
	$result=mysqli_query($con,$sql);
	
	if($result){
	echo"success";
	echo "<script> window.location.assign('TableNewEN.php'); </script>";
	}else{
	echo "เกิดข้อผิดพลาด".mysqli_error($con);
	}
?>
