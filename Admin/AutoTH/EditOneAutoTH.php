<?php
	$idSelect=$_GET['id'];
	require'../Connect/dbConnect.php';
	include("../LoginHome/check.php");
	$sql="select * from Autoth where id=$idSelect";
	$result= mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);
	
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>EditForm</title>
 <link rel="stylesheet" href="../css/admin.css">
	</head>
	<body>
	<ul>
 
  <li><a href="../Login/TableLogin.php">login</a></li>
  <li><a href="../HomeTH/TableHomeTH.php">HomeTH</a></li>
  <li><a href="../HomeEN/TableHomeEN.php">HomeEN</a></li>
  <li><a href="../HistoryTH/TableHistTH.php">HistoryTH</a></li>
  <li><a href="../HistoryEN/TableHistEN.php">HistoryEN</a></li>
  <li><a href="../AdmiTH/TableAdmiTH.php">AdminstrativeBoardTH</a></li>
  <li><a href="../AdmiEN/TableAdmiEN.php">AdminstrativeBoardEN</a></li>
  <li><a href="../AddrTH/TableAddrTH.php">AddressAndMapTH</a></li>
  <li><a href="../AddrEN/TableAddrEN.php">AddressAndMapEN</a></li>
  <li><a href="../StudTH/TableStudTH.php">Student'sLifeTH</a></li>
  <li><a href="../StudEN/TableStudEN.php">Student'sLifeEN</a></li>
  <li><a href="../SoftTH/TableSoftTH.php">ProgramSoftTH</a></li>
  <li><a href="../SoftEN/TableSoftEN.php">ProgramSoftEN</a></li>
  <li><a href="../AutoTH/TableAutoTH.php">ProgramAutoTH</a></li>
  <li><a href="../AutoEN/TableAutoEN.php">ProgramAutoEN</a></li>
  <li><a href="../DepaTH/TableDepaTH.php">DepartmentTH</a></li>
  <li><a href="../DepaEN/TableDepaEN.php">DepartmentEN</a></li>
  <li><a href="../NewTH/TableNewTH.php">NewandEventTH</a></li>
  <li><a href="../NewEN/TableNewEN.php">NewandEventEN</a></li>
  <li><a href="../LoginHome/logout.php">Logout</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
	</head>
	<body>
		<form method="post" action='EditTwoAutoTH.php' enctype="multipart/form-data">
			<input type="hidden" value="<?php echo $row["id"]?>" name='id_select'/>
			<input type="file" name="image" id="fileToUpload" value='<?php echo $row['Image']?>'><br><br>	
			Enter Your Header1:<input type="text" name='Header1' value='<?php echo $row['Header1']?>'><br><br>
			Enter Your Header2:<input type="text" name='Header2' value='<?php echo $row['Header2']?>'><br><br>
			Enter Your Header3:<input type="text" name='Header3' value='<?php echo $row['Header3']?>'><br><br>
			Enter Your Header4:<input type="text" name='Header4' value='<?php echo $row['Header4']?>'><br><br>
			Enter Your Header5:<input type="text" name='Header5' value='<?php echo $row['Header5']?>'><br><br>
			Enter Your Header6:<input type="text" name='Header6' value='<?php echo $row['Header6']?>'><br><br>
			Enter Your Detail1:<input type="text" name='Detail1' value='<?php echo $row['Detail1']?>'><br><br>
			Enter Your Detail2:<input type="text" name='Detail2' value='<?php echo $row['Detail2']?>'><br><br>
			Enter Your Detail3:<input type="text" name='Detail3' value='<?php echo $row['Detail3']?>'><br><br>
			Enter Your Detail4:<input type="text" name='Detail4' value='<?php echo $row['Detail4']?>'><br><br>
			Enter Your Detail5:<input type="text" name='Detail5' value='<?php echo $row['Detail5']?>'><br><br>
			
			
			
			
			<br>
			
			
			
			

			<br><br>
			
			<input type="submit" value="Edit">
		</form>
		</div>
	</body>
</html>
