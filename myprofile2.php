<?php

require_once ('process/dbh2.php');
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);


  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `employee` WHERE id=$id";
  $sql2 = "SELECT total from `salary` WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn , $sql2);
  $salary = mysqli_fetch_array($result2);
  $empS = ($salary['total']);
 
  if($result){
  while($res = mysqli_fetch_assoc($result)){
  $firstname = $res['firstName'];
  $lastname = $res['lastName'];
  $email = $res['email'];
  $password = $res['password'];
  $contact = $res['contact'];
  $descr = $res['descr'];
  $address = $res['address'];
  $gender = $res['gender'];
  $birthday = $res['birthday'];
  $nid = $res['nid'];
  $dept = $res['dept'];
  $degree = $res['degree'];
  $notif = $res['notif'];
  $pic = $res['pic'];
  $upsub = $res['upsub'];
  $upday = $res['upday'];
  $uptime = $res['uptime'];
  
}
}

?>

<html>
<head>
  <title>My Profile | Employee Management System</title>
  <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="styleapply.css">
</head>

<body>
<style>
h2 {
	color: green;
	
	
}


</style>
  <header>
    <nav>
      <h1>Animal Adoption System</h1>
      <ul id="navli">
       
        <li><a class="homered" href="myprofile2.php?id=<?php echo $id?>"">My Profile</a></li>
        
       
        <li><a class="homeblack" href="aloginwel.php">Home</a></li>
      </ul>
    </nav>
  </header>
  
  <div class="divider"></div>
  

    <!-- <form id = "registration" action="edit.php" method="POST"> -->
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"><center><b>My Profile</b></center></h2>
                    <form method="POST" action="myprofileup2.php?id=<?php echo $id?>" >

                        
                          <img src="process/<?php echo $pic;?>" height = 160px width = 150px>
                        <br>

						<br>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <p><b>Full Name</b></p>
                                     <input class="input--style-1" type="text" name="firstName" value="<?php echo $firstname;?>" readonly >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                  <p><b>Last Name</b></p>
                                    <input class="input--style-1" type="text" name="lastName" value="<?php echo $lastname;?>" readonly>
                                </div>
                            </div>
                        </div>





                        <div class="input-group">
                          <p><b>Email</b></p>
                            <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>" readonly>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <p><b>Date of Report</b></p>
                                    <input class="input--style-1" type="text" name="birthday" value="<?php echo $birthday;?>" readonly>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                  <p><b>Pet's Gender</b></p>
                                  <input class="input--style-1" type="text" name="gender" value="<?php echo $gender;?>" readonly>
                                </div>
                            </div>
                        </div>
						
						
                        <p><b>Contact Number</b></p>
                        <div class="input-group">
                       
                            <input class="input--style-1" type="number" name="contact" value="<?php echo $contact;?>" readonly>
                        </div>
						<p><b>Description</b></p>
                        <div class="input-group">
                       
                            <input class="input--style-1" type="text" name="descr" value="<?php echo $descr;?>" readonly>
                        </div>
						
						

                        <br>
						<br>

                        <h2><i><b><center> Shelter's Update </center></b></i></h2>
						<br>
						<br>
						
						<div class="input-group">
                          <p><b><i>STATUS OF YOUR REPORT</i></b></p>
                            <input class="input--style-1" type="text" placeholder= "Pending...." name="degree" value="<?php echo $degree;?>" readonly>
                        </div>
						<div class="input-group">
                          <p><b><i>Shelter's Update</i></b></p>
                            
							<input class="input--style-1" type="text"  placeholder= "Pending...." name="address" value="<?php echo $address;?>">
                        
						</div>
						
						<div class="input-group">
                          <p><b><i>Subject</i></b></p>
                            
							<input class="input--style-1" type="text"  placeholder= "Pending...." name="upsub" value="<?php echo $upsub;?>">
                        
						</div>
						
						<div class="input-group">
                          <p><b><i>Date of Pick-up</i></b></p>
                            
							<input class="input--style-1" type="text"  placeholder= "Pending...." name="upday" value="<?php echo $upday;?>">
                        
						</div>
						
						<div class="input-group">
                          <p><b><i>Time of Pick-up</i></b></p>
                            
							<input class="input--style-1" type="text"  placeholder= "Pending...." name="uptime" value="<?php echo $uptime;?>">
                        
						</div>
									


                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green"  name="send" >Update Info</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
	


     <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

   
    <script src="js/global.js"></script> -->
</body>
</html>
