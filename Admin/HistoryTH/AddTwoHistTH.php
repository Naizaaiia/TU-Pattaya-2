<?php	

	require'../Connect/dbConnect.php';//เชื่อมต่อฐานข้อมูล
	//รับค่าจากFormมาใส่ในฐานข้อมูล

	$Header =$_POST['Header'];
	$Detail =$_POST['Detail'];
	
	
	$sql="insert into histth(Header,Detail) values('$Header','$Detail')";
	$result=mysqli_query($con,$sql);
	
	if($result){
	echo"success";
	echo "<script> window.location.assign('TableHistTH.php'); </script>";
	}else{
		echo mysqli_error($con);
	}
	

?>