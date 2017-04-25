<?php
	require'../Connect/dbConnect.php';

	include("../LoginHome/check.php");	
	

	$sql="select * from addren";
	$result= mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>

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
  <table border='1'>
			<tr>
				<th>ID</th>
				<th>Header</th>
				<th>Detail</th>

		
				<th>Delete</th>
				<th>Edit</th>
			</tr>
			<?php while($row=mysqli_fetch_row($result)){?>
			<tr>
				<td><?php echo $row[0]?></td>
				<td><?php echo $row[1]?></td>
				<td><?php echo $row[2]?></td>

				
				<td><a href="DeleteAddrEN.php?id=<?php echo $row[0]?>">Delete</a></td>
				<td><a href="EditOneAddrEN.php?id=<?php echo $row[0]?>">Edit</a></td>
			</tr>
			<?php }?>
		</table>
		<form action="AddOneAddrEN.php" method="post">
		<br>
	
	<input type="submit" value="add" >
	</form>
</div>

</body>
</html>
