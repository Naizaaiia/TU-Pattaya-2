﻿<!-- <!DOCTYPE html> -->
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
    <a href="mainTH.php">
        <br><img src="image/iconTU.jpg" style="width: 70px;height: 70px;">
      </a>
    <div class="langTH">
      <a href="AddressAndMapTH.php">
        <img src="image/iconTH2.png" alt="Thailand" style="width: 40px;height: 30px;">
      </a>
      <div class="langEN">
        <a href="AddressAndMapEN.php">
          <img src="image/iconEN2.png" alt="Thailand" style="width: 40px;height: 30px;">
      </a>
      </div>
    </div>
  </div>
  <h6>คณะวิศวกรรมศาสตร์ มหาวิทยาลัยธรรมศาสตร์ ศูนย์พัทยา</h6>
  <p class="ma">Faculty of Engineering Thammasart University Pattaya Campus</p>

  <a href="NewandEventTH.php" class="selected">ข่าวสารและกิจกรรม</a>

  <a href="DepartmentTH.php" class="nav">หน่วยงาน</a>

  <li class="dropdown" >
    <a class="nav" >หลักสูตร</a>
    <div class="dropdown-content" >
    <a href="ProgramSoftTH.php" >วิศวกรรมซอฟต์แวร์</a>
    <a href="ProgramAutoTH.php" >วิศวกรรมยานยนต์</a>
    </div>
  </li>

  <a href="Student'sLifeTH.php" class="nav">ชีวิตนักศึกษา</a>

  <li class="dropdown">
    <a class="navi">เกี่ยวกับคณะ</a>
    <div class="dropdown-content" >
    <a href="HistoryTH.php" >ประวัติ</a>
    <a href="AdminstrativeBoardTH.php" >ผู้บริหารคณะ</a>
    <a href="AddressAndMapTH.php" >ที่อยู่เเละแผนที่</a>
    </div>
    </li>

  <a href="mainTH.php" class="nav">หน้าหลัก</a>
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

  <!--Text box-->
  <div class='ui1'>
  <div class='ui1_box'>
    <div class='ui1_box__inner'>
      <h2>
 <?php
	
	$db = mysqli_connect("localhost","root","","cn342");
				$sql = "SELECT *FROM addrth";
				$result = mysqli_query($db, $sql);
				
				while(($row = mysqli_fetch_array($result))){
				
								echo "<h2>".$row['Header']."</h2><br>";
								echo "<p>".$row['Detail']."</p><br><br>";
	
				}
			?> 
      </h2>
      <br>
      
      <center>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1944.4265108765605!2d100.99503310642108!3d12.917166607029154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x14042f784f63e495!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LiY4Lij4Lij4Lih4Lio4Liy4Liq4LiV4Lij4LmMIOC4qOC4ueC4meC4ouC5jOC4nuC4seC4l-C4ouC4sg!5e0!3m2!1sth!2sth!4v1488110507784" width="100%" height="50%" frameborder="0" style="border:0" allowfullscreen>
		</iframe>
	</center>
	</div>
    </div>
  </div>
<!--End Text box-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="JS/slider.js"></script>
  <script src="JS/textBox.js"></script>
</body>

</html>