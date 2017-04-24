<html>
	<head>
		<meta charset="UTF-8">
		<title>AddForm</title>
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
  
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
	</head>
	<body>
		<form method="post" action='AddTwoNewTH.php' enctype="multipart/form-data">
		<input type="file" name="image" id="fileToUpload" value='<?php echo $row['Image']?>'><br><br>
			Enter Your Header:<br><textarea rows="8" cols="50" type="text" name='Header'></textarea><br><br>
			Enter Your Detail:<br><textarea rows="8" cols="50" type="text" name='Detail'></textarea><br><br>
			<br>
			<br><br>
			
			<input type="submit" value="Save">
		</form>
		</div>
	</body>
</html>