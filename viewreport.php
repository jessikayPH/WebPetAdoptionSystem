<?php

require_once ('process/dbh2.php');
$sql = "SELECT * from `employee` , `rank` WHERE employee.id = rank.eid";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Animal Adoption System</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>Lost and Found Database</h1>
			<ul id="navli">
			<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="viewemp.php">View Adoptee</a></li>
				
				<li><a class="homered" href="viewreport.php">View Report</a></li>
				<li><a class="homeblack" href="empleave.php">Request</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

		<table>
			<tr>

				<th align = "center">ID</th>
				<th align = "center">Photo</th>
				<th align = "center">First Name</th>
				<th align = "center">Last Name</th>
				<th align = "center">Type of Report</th>
				
				<th align = "center">Status</th>
				
				
			
				
				<th align = "center">Options</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td><img src='process/".$employee['pic']."' height = 60px width = 60px></td>";
					echo "<td>".$employee['firstName']." </td>";
					echo "<td>".$employee['lastName']."</td>";
					echo "<td><b>".$employee['report']."</b></td>";
					
					echo "<td><b>".$employee['degree']."</b></td>";
					
			



					echo "<td><a href=\"edit2.php?id=$employee[id]\">View</a> or <a href=\"delete2	.php?id=$employee[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>

		</table>
		
		
	
</body>
</html>