<?php
session_start(); //เปิด seesion เพื่อทำงาน
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
//กำหนดภาษาของเอกสารให้เป็น UTF-8
$username = $_POST['username'];
//ประกาศซตัวแปรชื่อ username โดยการรับค่ามาจากกล่อง username ที่หน้า Login
$password = $_POST['password'];
//ประกาศซตัวแปรชื่อ password โดยการรับค่ามาจากกล่อง password ที่หน้า Login
if($username == "") {                    //ถ้ายังไม่ได้กรอกข้อมูลที่ชื่อผู้ใช้ให้ทำงานดังต่อไปนี้
echo "คุณยังไม่ได้กรอกชื่อผู้ใช้ครับ";
} else if($password == "") {        //ถ้ายังไม่ได้กรอกรหัสผ่านให้ทำงานดังต่อไปนี้
echo "คุณยังไม่ได้กรอกรหัสผ่านครับ";
} else {                                               //ถ้ากรอกข้อมูลทั้งหมดแล้วให้ทำงานดังนี้
require'../Connect/dbConnect.php';
	$sql="select * from login";           //เรียก function สำหรับติดต่อฐานข้อมูลจากหน้า connect.php ขึ้นมา
$check_log = mysqli_query($con, "select * from login where username ='$username' and password ='$password' ");   
$num = 0;
if ($check_log != false) {                       //ใช้ภาษา SQL ตรวจสอบข้อมูลในฐานข้อมูล
$num = mysqli_num_rows($check_log);
//ให้เอาค่าที่ได้ออกมาประกาศเป็นตัวแปรชื่อ $num
} else {
printf("error: %s/n", mysqli_error($con));
}
if($num <=0) {                                                           //ถ้าหากค่าที่ได้ออกมามีค่าต่ำกว่า 1
echo "Username หรือ Password อาจจะผิดกรุณา Login ใหม่อีกครั้ง <br /><a href='index.php'>Back</a>";
} else {
while ($data = mysqli_fetch_array($check_log)) {
//ถ้าค่ามีมากกว่า 0 ขึ้นไป ให้ดึงข้อมูลออกมาทั้งหมด
//echo "$data[0]"; ค่อยมาตกเเต่งหน้าloading
echo "<meta http-equiv='refresh' content='1;URL=homeadmin.php'>";
}
}
}
?>