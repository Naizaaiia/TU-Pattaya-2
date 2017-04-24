<?php	

	require'../Connect/dbConnect.php';//เชื่อมต่อฐานข้อมูล
	//รับค่าจากFormมาใส่ในฐานข้อมูล

	$username =$_POST['username'];
	$password =$_POST['password'];
	
	
	$sql="insert into login(username,password) values('$username','$password')";
	$result=mysqli_query($con,$sql);
	
	if($result){
	echo"success";
	echo "<script> window.location.assign('TableLogin.php'); </script>";
	}else{
		echo mysqli_error($con);
	}
	

?>