<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `employee` , `rank` WHERE employee.id = rank.eid";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Database |  Animal Adoption System</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<style>
header {
	position:fixed;
  width: 96%;
	
	
	
}
table {
	margin-top: 4.5%;
	
	
	
}

</style>
<body>
	<header>
		<nav>
			<h1>Adoptee Database</h1>
			<ul id="navli">
				
				<li><a class="homeblack" href="aloginwel.php">Home</a></li>
				<li><a class="homered" href="viewemp.php">View Adoptee</a></li>
				
				<li><a class="homeblack" href="viewreport.php">View Report</a></li>
				<li><a class="homeblack" href="empleave.php">Request</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
				
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

		<table>
			<tr>

				<th align = "center">ID</th>
				<th align = "center">Picture</th>
				<th align = "center">Name</th>
				
				
				<th align = "center">Status</th>
				
				
			
				
				<th align = "center">Options</th>
			</tr>
			

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td><img src='process/".$employee['pic']."' height = 60px width = 60px></td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					
					echo "<td><b>".$employee['degree']."</b></td>";
					
			



					echo "<td><a href=\"edit.php?id=$employee[id]\">View</a> or <a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>
			

		</table>
		
		
		
	
</body>
</html>