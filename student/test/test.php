<?php
	
	$db = mysqli_connect("localhost","root","12345","dbtest");
				$sql = "SELECT *FROM contact";
				$result = mysqli_query($db, $sql);
				
				while(($row = mysqli_fetch_array($result))){
				
				
					echo "<div id='news-each'>";
						echo "<div id='img'>";
							echo "<img src = 'name/".$row['image']."' width='200px''>";
						echo "</div>";
						echo "<div id='paragraph'><br><br>" ;
						
							echo "<div id='inner-paragraph'>";
								echo "<h4>".$row['fname']."</h4><br>";
								echo "<p>".$row['lname']."</p><br><br>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
					
					
				}
			?> 