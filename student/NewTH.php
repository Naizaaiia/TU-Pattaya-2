<!-- <!DOCTYPE html> -->
<html>

<head>
  <meta charset="utf-8" />
  <title>มหาวิทยาลัยธรรมศาสตร์ ศูนย์พัทยา</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
  <link rel="stylesheet" href="CSS/TU-PattayaCSS.css" />
</head>

<body>

<!--manu bar-->
<div class="tavi">
  <div class="logoTU">
    <a href="mainTH.html">
        <br><img src="image/iconTU.jpg" style="width: 70px;height: 70px;">
      </a>
    <div class="langTH">
      <a href="NewTH1.html">
        <img src="image/iconTH2.png" alt="Thailand" style="width: 40px;height: 30px;">
      </a>
      <div class="langEN">
        <a href="NewEN1.html">
          <img src="image/iconEN2.png" alt="Thailand" style="width: 40px;height: 30px;">
      </a>
      </div>
    </div>
  </div>
  <h6>คณะวิศวกรรมศาสตร์ มหาวิทยาลัยธรรมศาสตร์ ศูนย์พัทยา</h6>
  <p class="ma">Faculty of Engineering Thammasart University Pattaya Campus</p>
  
  <a href="NewandEventTH.html" class="selected">ข่าวสารและกิจกรรม</a>

  <a href="DepartmentTH.html" class="nav">หน่วยงาน</a>

  <li class="dropdown" >
    <a class="nav" >หลักสูตร</a>
    <div class="dropdown-content" >
    <a href="ProgramSoftTH.html" >วิศวกรรมซอฟต์แวร์</a>
    <a href="ProgramAutoTH.html" >วิศวกรรมยานยนต์</a>
    </div>
  </li>

  <a href="Student'sLifeTH.html" class="nav">ชีวิตนักศึกษา</a>

  <li class="dropdown">
    <a class="nav">เกี่ยวกับคณะ</a>
    <div class="dropdown-content" >
    <a href="HistoryTH.html" >ประวัติ</a>
    <a href="AdminstrativeBoardTH.html" >ผู้บริหารคณะ</a>
    <a href="AddressAndMapTH.html" >ที่อยู่เเละแผนที่</a>
    </div>
    </li>

  <a href="mainTH.html" class="nav">หน้าหลัก</a>
 </div>
<!--End manu bar-->

<!--Slider-->
  <div class="parent">
    <div class="slider">
      <ul class="slider-ul">
        <li class="slider-ul-li" data-slider="1"></li>
        <li class="slider-ul-li" data-slider="2"></li>
        <li class="slider-ul-li" data-slider="3"></li>
        <li class="slider-ul-li" data-slider="4"></li>
        <li class="slider-ul-li" data-slider="5"></li>
        <li class="slider-ul-li" data-slider="6"></li>
      </ul>
      <ol class="slider-ol">
        <li class="slider-ol-li slider-active" data-slider="1"><i class="fa fa-circle-thin"></i></li>
        <li class="slider-ol-li" data-slider="2"><i class="fa fa-circle-thin"></i></li>
        <li class="slider-ol-li" data-slider="3"><i class="fa fa-circle-thin"></i></li>
        <li class="slider-ol-li" data-slider="4"><i class="fa fa-circle-thin"></i></li>
        <li class="slider-ol-li" data-slider="5"><i class="fa fa-circle-thin"></i></li>
        <li class="slider-ol-li" data-slider="6"></li>
      </ol>
      <i class="fa fa-chevron-right fa-5x"></i>
      <i class="fa fa-chevron-left fa-5x"></i>
    </div>
  </div>
  <!--End Slider-->
<?php
$db = mysqli_connect("localhost","root","","cn342");
$sql = "select*from newth ORDER BY id DESC";

$result = mysqli_query($db,$sql);
while($row = mysqli_fetch_array($result)){
	if($_GET['IDnew']==$row['id']){
		echo "<div>";
		echo "<div class='ui1'>";
		echo "<div class='ui1_box'>";
		echo "<div class='ui1_box__inner'>";
			echo "<h1>".$row['Header']."</h1><br>";
			echo "<center><img src = 'name/".$row['Image']."'width='500px' height='500px;'></center>";
			echo '<p>'.$row['Detail'].'</p>';
			
		echo "</div>"; 	
		echo "</div>"; 
		echo "</div>"; 
		echo "</div>"; 
	}	
}
?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="JS/slider.js"></script>
  <script src="JS/textBox.js"></script>
</body>

</html>