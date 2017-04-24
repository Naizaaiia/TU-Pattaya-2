<!-- <!DOCTYPE html> -->
<html>

<head>
  <meta charset="utf-8" />
  <title>Thammasart University Pattaya</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
  <link rel="stylesheet" href="CSS/TU-PattayaCSS.css" />
</head>
<body>

<!--manu bar-->
<div class="tavi">
  <div class="logoTU">
    <a href="mainEN.php">
        <br><img src="image/iconTU.jpg" style="width: 70px;height: 70px;">
      </a>
    <div class="langTH">
      <a href="DepartmentTH.php">
        <img src="image/iconTH2.png" alt="Thailand" style="width: 40px;height: 30px;">
      </a>
      <div class="langEN">
        <a href="DepartmentEN.php">
          <img src="image/iconEN2.png" alt="Thailand" style="width: 40px;height: 30px;">
      </a>
      </div>
    </div>
  </div>
  <h6>Faculty of Engineering Thammasart University Pattaya Campus</h6>
  <p class="ma">คณะวิศวกรรมศาสตร์ มหาวิทยาลัยธรรมศาสตร์ ศูนย์พัทยา</p>
<a href="NewandEventEN.php" class="selected">NEW AND EVENTS</a>

  <a href="DepartmentEN.php" class="navi">DEPARTMENT</a>

  <li class="dropdown" >
    <a class="nav" >PROGRAMS</a>
    <div class="dropdown-content" >
    <a href="ProgramSoftEN.php" >SOFTWARE ENGINEER</a>
    <a href="ProgramAutoEN.php" >AUTOMOTIVE ENGINEER</a>
    </div>
  </li>

  <a href="Student'sLifeEN.php" class="nav">STUDENT'S LIFE</a>

  <li class="dropdown">
    <a class="nav">ABOUT</a>
    <div class="dropdown-content" >
    <a href="HistoryEN.php" >HISTORY</a>
    <a href="AdminstrativeBoardEN.php" >ADMINSTRATIVE BOARD</a>
    <a href="AddressAndMapEN.php" >ADDRESS AND MAP</a>
    </div>
    </li>

  <a href="mainEN.php" class="nav">HOME</a>
  </div>

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

  <br><br><br><br><br>
	<?php
	
	$db = mysqli_connect("localhost","root","","cn342");
				$sql = "SELECT *FROM depaen";
				$result = mysqli_query($db, $sql);
				$css = 'TU-PattayaCss.css';
        
        while($row = mysqli_fetch_array($result)){
        
        
          echo "<div class='ui1'>";           
              echo "<div class='ui1_box'>";
                echo "<div class='ui1_box__inner'>";

                  echo "<div id ='one'>";
                     echo "<div class='departmenteng2'>";
                  
                       echo "<img class='departmentgalleryBox' src = 'name/".$row['Image']." align='left'> 
                         <div id='inner'>";

                           echo "<p>".$row['Header']."</p><br>";
                              echo "<p>".$row['Detail']."</p>";
                    
                              echo "</div><br><br>";        
                            echo "</div>";
                        echo "</div>";
                      echo "</div>";
                  echo "</div>";
                echo "</div>";
              echo "</div>";
            
          echo "</div>";						
					
				}
			
			?> 

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="JS/slider.js"></script>
  <script src="JS/textBox.js"></script>
</body>

</html>