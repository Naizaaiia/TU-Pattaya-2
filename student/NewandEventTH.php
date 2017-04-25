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
      <a href="mainTH.php">
        <br><img src="image/iconTU.jpg" style="width: 70px;height: 70px;">
      </a>
      <div class="langTH">
        <a href="NewandEventTH.php">
          <img src="image/iconTH2.png" alt="Thailand" style="width: 40px;height: 30px;">
        </a>
        <div class="langEN">
          <a href="NewandEventEN.php">
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
      <a class="nav">เกี่ยวกับคณะ</a>
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

  <br><br><br>

  <h1>
   &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; ข่าวสารและกิจกรรม
 </h1>
 <br><br><br>

 <?php
 
 require'./dbConnect.php';
 $sql = "SELECT *FROM newth ORDER BY id DESC";
 $result = mysqli_query($db, $sql);
 
 while($row = mysqli_fetch_array($result)){
  
  
   echo "<div class='ui1'>";
   echo "<form action='NewTH.php' method='get'>";
   echo "<div class='ui1_box'>";
   echo "<div class='ui1_box__inner'>";
   echo "<h2>".$row['Header']."</h2><br>";

   echo "<img class='newsandeventgalleryBox' src = 'name/".$row['Image']."' width='100px' height='100px;'>";

   echo "<p>".$row['Detail']."<div id='inner'></p>";

   echo "<button type='submit' value='read'>อ่านต่อ</button>";
   echo "<input type='hidden' name='IDnew' value='".$row['id']."'>";

   echo "</div><br><br>";

   echo "</div>";
   echo "</div>";
   echo "</form>";
   echo "</div>";
   
   
 }
 
 ?> 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="JS/slider.js"></script>
 <script src="JS/textBox.js"></script>
</body>

</html>
