<?php	
	$target = "name/".basename($_FILES['image']['name']);
	require'../Connect/dbConnect.php';//เชื่อมต่อฐานข้อมูล
	//รับค่าจากFormมาใส่ในฐานข้อมูล
	$Image = $_FILES['image']['name'];
	$Header =$_POST['Header'];
	$Detail =$_POST['Detail'];

	$sql="insert into homeen(Header,Detail,Image) values('$Header','$Detail','$Image')";
	$result=mysqli_query($con,$sql);
	
	if($result){
	echo"success";
	echo "<script> window.location.assign('TableHomeEN.php'); </script>";
	}else{
		echo mysqli_error($con);
	}
	

?>
