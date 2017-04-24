<?php	
	$target = "name/".basename($_FILES['image']['name']);
	require'../Connect/dbConnect.php';//เชื่อมต่อฐานข้อมูล
	//รับค่าจากFormมาใส่ในฐานข้อมูล
	$Image = $_FILES['image']['name'];
	$Header1 =$_POST['Header1'];
	$Header2 =$_POST['Header2'];
	$Header3 =$_POST['Header3'];
	$Header4 =$_POST['Header4'];
	$Header5 =$_POST['Header5'];
	$Header6 =$_POST['Header6'];
	$Detail1 =$_POST['Detail1'];
	$Detail2 =$_POST['Detail2'];
	$Detail3 =$_POST['Detail3'];
	$Detail4 =$_POST['Detail4'];
	$Detail5 =$_POST['Detail5'];
	
	
	$sql="insert into soften(Header1,Header2,Header3,Header4,Header5,Header6,Detail1,Detail2,Detail3,Detail4,Detail5,Image) values('$Header1','$Header2','$Header3','$Header4','$Header5','$Header6','$Detail1','$Detail2','$Detail3','$Detail4','$Detail5','$Image')";
	$result=mysqli_query($con,$sql);
	
	if($result){
	echo"success";
	echo "<script> window.location.assign('TableSoftEN.php'); </script>";
	}else{
		echo mysqli_error($con);
	}
	

?>