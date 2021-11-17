<?php

require_once ('process/dbh.php');
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
  $address = $res['address'];
  $gender = $res['gender'];
  $birthday = $res['birthday'];
  $nid = $res['nid'];
  $dept = $res['dept'];
  $degree = $res['degree'];
  $pic = $res['pic'];
  $age = $res['age'];
  $subject = $res['subject'];
  $pickdate = $res['pickdate'];
  $picktime = $res['picktime'];
}
}

?>

<html>
<head>
  <title>My Profile | Adoptee Profile</title>
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
p {
	color: red;
	
	
}
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: gray;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 70%;
  height: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
button {
background-color: #57b846;	
line-height: 40px;
    display: inline-block;
    padding: 0 25px;
    cursor: pointer;
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
    color: #fff;
    -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    transition: all 0.4s ease;
    font-size: 14px;
    font-weight: 700;
	border-radius: 3px;
	
	
	
}




</style>
  <header>
    <nav>
      <h1>Animal Adoption System</h1>
      <ul id="navli">
	  
	  
       <li><a class="homeblack" href="aloginwel.php">Home</a></li>
        <li><a class="homered" href="myprofile.php?id=<?php echo $id?>"">My Profile</a></li>
        
        <li><a class="homeblack" href="applyleave.php?id=<?php echo $id?>"">Request Application</a></li>
        
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
                    <form method="POST" action="myprofileup.php?id=<?php echo $id?>" >

                        
                          <img src="process/<?php echo $pic;?>" height = 160px width = 150px>
                        <br>

						<br>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <b>First Name</b>
                                     <input class="input--style-1" type="text" name="firstName" value="<?php echo $firstname;?>" readonly >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                  <b>Last Name</b>
                                    <input class="input--style-1" type="text" name="lastName" value="<?php echo $lastname;?>" readonly>
                                </div>
                            </div>
                        </div>





                        <div class="input-group">
                          <b>Email</b>
                            <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>" readonly>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <b>Date of Birth</b>
                                    <input class="input--style-1" type="text" name="birthday" value="<?php echo $birthday;?>" readonly>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                  <b>Gender</b>
                                  <input class="input--style-1" type="text" name="gender" value="<?php echo $gender;?>" readonly>
                                </div>
                            </div>
                        </div>
						
						<div class="col-2">
                                <div class="input-group">
                                  <b>Age</b>
                                  <input class="input--style-1" type="text" name="age" value="<?php echo $age;?>" readonly>
                                </div>
                            </div>
                        <b>Contact Number</b>
                        <div class="input-group">
                       
                            <input class="input--style-1" type="number" name="contact" value="<?php echo $contact;?>" readonly>
                        </div>

                        

                        
                         <div class="input-group">
                          <b>Address</b>
                            <input class="input--style-1" type="text"  name="address" value="<?php echo $address;?>" readonly>
                        </div>
						
						<div class="input-group">
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
                          <b><i>STATUS OF YOUR APPLICATION</i></b>
                            <input class="input--style-1" type="text"  placeholder="Pending..." name="degree" value="<?php echo $degree;?>" readonly>
                        </div>
						
						<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <p><b>Subject</b></p>
                                     <input class="input--style-1" type="text" name="subject" value="<?php echo $subject;?>" readonly >
                                </div>
                            </div>
							</div>
							<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <p><b>Date of Pet Pick up</b></p>
                                    <input class="input--style-1" type="text" name="pickdate" value="<?php echo $pickdate;?>" readonly>
                                </div>
                            </div>
                        </div>
						<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <p><b>Time of Pet Pick up</b></p>
                                    <input class="input--style-1" type="text" name="picktime" value="<?php echo $picktime;?>" readonly>
                                </div>
                            </div>
                        </div>
						

<center>
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green"  name="send" >Update Info</button>
                        </div>
						</center>
                        
                    </form>
					<br>
						<br>
						

<!-- Trigger/Open The Modal -->
<center>
<button id="myBtn">PAYMENT / DONATION</button>
</center>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <center>
<p> <img src="form/qrcode.png" style="width: 50%; height: 100%;">
</p>
</center>

  

</div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
                </div>
            </div>
        </div>
    </div>
	<table>
			<tr>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Start Date</th>
				<th align = "center">End Date</th>
				<th align = "center">Time</th>
				<th align = "center">Reason</th>
				<th align = "center">Status</th>
				
			</tr>


			<?php


				$sql = "Select employee.id, employee.firstName, employee.lastName, employee_leave.start, employee_leave.end, employee_leave.time, employee_leave.reason, employee_leave.status From employee, employee_leave Where employee.id = $id and employee_leave.id = $id order by employee_leave.token";
				$result = mysqli_query($conn, $sql);
				while ($employee = mysqli_fetch_assoc($result)) {
					$date1 = new DateTime($employee['start']);
					$date2 = new DateTime($employee['end']);
					$interval = $date1->diff($date2);
					$interval = $date1->diff($date2);

					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['start']."</td>";
					echo "<td>".$employee['end']."</td>";
					echo "<td>".$employee['time']."</td>";
					echo "<td>".$employee['reason']."</td>";
					echo "<td>".$employee['status']."</td>";
					
					
				}


			?>


		</table>


     <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

   
    <script src="js/global.js"></script> -->
</body>
</html>
