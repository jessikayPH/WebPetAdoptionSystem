<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	$sql = "SELECT * FROM `employee` where id = '$id'";
	$result = mysqli_query($conn, $sql);
	$employee = mysqli_fetch_array($result);
	$empName = ($employee['firstName']);
	//echo "$id";
?>

<html>
<head>
	<title>Animal Adoption System</title>
	<link rel="stylesheet" type="text/css" href="styleapply.css">
</head>
<body bgcolor="#F0FFFF">
	
	<header>
		<nav>
			<h1>Animal Adoption System</h1>
			<ul id="navli">
				
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>"">My Profile</a></li>
				
				<li><a class="homered" href="applyleave.php?id=<?php echo $id?>"">Request Application</a></li>
				<li><a class="homeblack" href="aloginwel.php">Home</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"><center>Schedule for Interview</center></h2>
                    <form action="process/applyleaveprocess.php?id=<?php echo $id?>" method="POST">


                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Subject" name="reason">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            	<p>Date</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="start" name="start">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                            	<p>Interview Date</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="end" name="end">
                                   
                                </div>
                            </div>
                        </div>
						<div class="col-2">
                            	<p>Time</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="time"  name="time">
                                   
                                </div>
                            </div>
                        



                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
		
















	







</body>
</html>