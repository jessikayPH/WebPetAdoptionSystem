<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$nid = mysqli_real_escape_string($conn, $_POST['nid']);
	$dept = mysqli_real_escape_string($conn, $_POST['dept']);
	$degree = mysqli_real_escape_string($conn, $_POST['degree']);
	$nameofpet = mysqli_real_escape_string($conn, $_POST['nameofpet']);
	$code = mysqli_real_escape_string($conn, $_POST['code']);
	$wan = mysqli_real_escape_string($conn, $_POST['wan']);
	$two = mysqli_real_escape_string($conn, $_POST['two']);
	$three = mysqli_real_escape_string($conn, $_POST['three']);
	$four = mysqli_real_escape_string($conn, $_POST['four']);
	$five = mysqli_real_escape_string($conn, $_POST['five']);
	$wanwan = mysqli_real_escape_string($conn, $_POST['wanwan']);
	$twotwo = mysqli_real_escape_string($conn, $_POST['twotwo']);
	$threethree = mysqli_real_escape_string($conn, $_POST['threethree']);
	$fourfour = mysqli_real_escape_string($conn, $_POST['fourfour']);
	$fivefive = mysqli_real_escape_string($conn, $_POST['fivefive']);
	$six = mysqli_real_escape_string($conn, $_POST['six']);
	$seven = mysqli_real_escape_string($conn, $_POST['seven']);
	$eight = mysqli_real_escape_string($conn, $_POST['eight']);
	$nine = mysqli_real_escape_string($conn, $_POST['nine']);
	$ten = mysqli_real_escape_string($conn, $_POST['ten']);
	$eleven = mysqli_real_escape_string($conn, $_POST['eleven']);
	$twelve = mysqli_real_escape_string($conn, $_POST['twelve']);
	$tertin = mysqli_real_escape_string($conn, $_POST['tertin']);
	$portin = mysqli_real_escape_string($conn, $_POST['portin']);
	$piptin = mysqli_real_escape_string($conn, $_POST['piptin']);
	$sixteen = mysqli_real_escape_string($conn, $_POST['sixteen']);
	$seventeen = mysqli_real_escape_string($conn, $_POST['seventeen']);
	$eighteen = mysqli_real_escape_string($conn, $_POST['eighteen']);
	$nineteen = mysqli_real_escape_string($conn, $_POST['nineteen']);
	$twenty = mysqli_real_escape_string($conn, $_POST['twenty']);
	$subject = mysqli_real_escape_string($conn, $_POST['subject']);
	$pickdate = mysqli_real_escape_string($conn, $_POST['pickdate']);
	$picktime = mysqli_real_escape_string($conn, $_POST['picktime']);
	
	//$salary = mysqli_real_escape_string($conn, $_POST['salary']);





	// $result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`password`='$email',`gender`='$gender',`contact`='$contact',`nid`='$nid',`salary`='$salary',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");


$result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`birthday`='$birthday',`gender`='$gender',`contact`='$contact',`nid`='$nid',`address`='$address',`dept`='$dept',`degree`='$degree',`nameofpet`='$nameofpet',`code`='$code',`wan`='$wan',`two`='$two',`three`='$three',`four`='$four',`five`='$five',`wanwan`='$wanwan',`twotwo`='$twotwo',`threethree`='$threethree',`fourfour`='$fourfour',`fivefive`='$fivefive',`six`='$six',`seven`='$seven',`eight`='$eight',`nine`='$nine',`ten`='$ten',`eleven`='$eleven',`twelve`='$twelve',`tertin`='$tertin',`portin`='$portin',`piptin`='$piptin',`sixteen`='$sixteen',`seventeen`='$seventeen',`eighteen`='$eighteen',`nineteen`='$nineteen',`twenty`='$twenty',`subject`='$subject',`pickdate`='$pickdate',`picktime`='$picktime' WHERE id=$id");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='viewemp.php';
    </SCRIPT>");


	
}
?>




<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `employee` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['firstName'];
	$lastname = $res['lastName'];
	$email = $res['email'];
	$contact = $res['contact'];
	$address = $res['address'];
	$gender = $res['gender'];
	$birthday = $res['birthday'];
	$nid = $res['nid'];
	$dept = $res['dept'];
	$degree = $res['degree'];
	$nameofpet = $res['nameofpet'];
	$code = $res['code'];
	$wan = $res['wan'];
	$two = $res['two'];
	$three = $res['three'];
	$four = $res['four'];
	$five = $res['five'];
	$wanwan = $res['wanwan'];
	$twotwo = $res['twotwo'];
	$threethree = $res['threethree'];
	$fourfour = $res['fourfour'];
	$fivefive = $res['fivefive'];
	$six = $res['six'];
	$seven = $res['seven'];
	$eight = $res['eight'];
	$nine = $res['nine'];
	$ten = $res['ten'];
	$eleven = $res['eleven'];
	$twelve = $res['twelve'];
	$tertin = $res['tertin'];
	$portin = $res['portin'];
	$piptin = $res['piptin'];
	$sixteen = $res['sixteen'];
	$seventeen = $res['seventeen'];
	$eighteen = $res['eighteen'];
	$nineteen = $res['nineteen'];
	$twenty = $res['twenty'];
	$subject = $res['subject'];
	$pickdate = $res['pickdate'];
	$picktime = $res['picktime'];
	
	
	
	
	
}
}

?>

<html>
<head>
	<title>View Employee |  Admin Panel | Employee Management System</title>
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
</head>
<style>
p {
	color: green;
	
}
hr.dashed {
  border-top: 3px dashed;
  color: gray;
}

</style>
<body>
	<header>
		<nav>
			<h1>Animal Adoption System</h1>
			<ul id="navli">
				<li><a class="homeblack" href="index.html">HOME</a></li>
				
				<li><a class="homered" href="viewemp.php">View Adoptee</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
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
                    <h2 class="title"><center>Adoptee's Information</center></h2>
                    <form id = "registration" action="edit.php" method="POST">

                        <div class="row row-space">
                            <div class="col-2">
							<p><b>First Name</b><p>
                                <div class="input-group">
                                     <input class="input--style-1" type="text" name="firstName" value="<?php echo $firstname;?>" readonly>
                                </div>
                            </div>
                            <div class="col-2">
							<p><b>Last Name</b><p>
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="lastName" value="<?php echo $lastname;?>" readonly>
                                </div>
                            </div>
                        </div>




						<p><b>Email Address</b><p>
                        <div class="input-group">
                            <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>" readonly>
                        </div>
						
                        <div class="row row-space">
                            <div class="col-2">
							<p><b>Date</b><p>
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="birthday" value="<?php echo $birthday;?>" readonly>
                                   
                                </div>
                            </div>
                            <div class="col-2">
							<p><b>Gender</b><p>
                                <div class="input-group">
									<input class="input--style-1" type="text" name="gender" value="<?php echo $gender;?>" readonly>
                                </div>
                            </div>
                        </div>
                        <p><b>Contact Number</b><p>
                        <div class="input-group">
                            <input class="input--style-1" type="text" name="contact" value="<?php echo $contact;?>" readonly>
                        </div>

             
                        <p><b>Address</b><p>
                         <div class="input-group">
                            <input class="input--style-1" type="text"  name="address" value="<?php echo $address;?>" readonly>
                        </div>
						<p><b>Requested Time of Interview</b><p>
                        <div class="input-group">
                            <input class="input--style-1" type="text" name="dept" value="<?php echo $dept;?>" readonly>
                        </div>
						
						<h2><center> Application Results </center></h2>
						<br>
						
						<div class="row row-space">
                            <div class="col-2">
							<p><b>Name of Pet</b><p>
                                <div class="input-group">
                                     <input class="input--style-1" type="text" name="nameofpet" value="<?php echo $nameofpet;?>" readonly>
                                </div>
                            </div>
							
                            <div class="col-2">
						<p><b>Pet Code</b><p>
                                <div class="input-group">
								
                                    <input class="input--style-1" type="text" name="code" value="<?php echo $code;?>" readonly>
                                </div>
                            </div>
                        </div>
						<p><b>1. What prompted you to adopt?</b><p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="wan" value="<?php echo $wan;?>" readonly>
                        </div>
						<p><b>2. What are you looking to adopt?</b><p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="two" value="<?php echo $two;?>" readonly>
                        </div>
						<p><b>3. Have you adopted before?</b><p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="three" value="<?php echo $three;?>" readonly>
                        </div>
						<p><b>4. For whom you are adopting?</b><p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="four" value="<?php echo $four;?>" readonly>
                        </div>
						<p><b>5. Describe your pet?</b><p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="five" value="<?php echo $five;?>" readonly>
                        </div>
						<p><b>1. Are there children (below 18) in the house?</b><p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="wanwan" value="<?php echo $wanwan;?>" readonly>
                        </div>
						<p><b>2. Do you have other pets?</b><p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="twotwo" value="<?php echo $twotwo;?>" readonly>
                        </div>
						<p><b>3. Who else do you live with?</b><p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="threethree" value="<?php echo $threethree;?>" readonly>
                        </div>
						<p><b>4. Are there any members of your family allergic to animals?</b><p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="fourfour" value="<?php echo $fourfour;?>" readonly>
                        </div>
						<p><b>5. Who will be responsible for feeding, grooming and generally caring for your pet?</b><p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="fivefive" value="<?php echo $fivefive;?>" readonly>
                        </div>
						<p><b>6. Who will be look after your pet in case of emergency?</b><p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="six" value="<?php echo $six;?>" readonly>
                        </div>
						<p><b>7. How many hours in an average workday will your pet be left alone?</b><p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="seven" value="<?php echo $seven;?>" readonly>
                        </div>
						<p><b>8. Does everyone in your family support your decision to adopt a pet?</b><p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="eight" value="<?php echo $eight;?>" readonly>
                        </div>
						<p><b>9. What steps will you take to familiarize your pet with his/her new surroundings?</b><p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="nine" value="<?php echo $nine;?>" readonly>
                        </div>
						<p><b>10. What type of building do you live in?</b><p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="ten" value="<?php echo $ten;?>" readonly>
                        </div>
						<p><b>11. Do you rent?</b></p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="eleven" value="<?php echo $eleven;?>" readonly>
                        </div>
						<p><b>12. What happens to your pet if or when you move?</b></p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="twelve" value="<?php echo $twelve;?>" readonly>
                        </div>
						<p><b>13. If renting or living in a shared building, can you provide a copy of your pet's permit?</b></p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="tertin" value="<?php echo $tertin;?>" readonly>
                        </div>
						<p><b>14. What kind of pet is right for you? Describe</b></p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="portin" value="<?php echo $portin;?>" readonly>
                        </div>
						<p><b>15. Are you ready for long term commitment?</b></p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="piptin" value="<?php echo $piptin;?>" readonly>
                        </div>
						<p><b>16. Can you afford to take care for your pet's healthy and safety?</b></p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="sixteen" value="<?php echo $sixteen;?>" readonly>
                        </div>
						<p><b>17. Do you have time for your pet?</b></p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="seventeen" value="<?php echo $seventeen;?>" readonly>
                        </div>
						<p><b>18. Are you will to train your pet? How.</b></p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="eighteen" value="<?php echo $eighteen;?>" readonly>
                        </div>
						<p><b>19. Are your willing to pet-proof your pet?</b></p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="nineteen" value="<?php echo $nineteen;?>" readonly>
                        </div>
						<p><b>20. Are you prepared to deal with the special pet challenges that may occur?</b><p>
						<div class="input-group">
                            <input class="input--style-1" type="text" name="twenty" value="<?php echo $twenty;?>" readonly>
                        </div>
						<center>
						
						<hr class="dashed">
						<br>
						<br>
						<p><b>Approve This Application?</b></p>
						<br>
						
                               
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="degree" value="<?php echo $degree;?> " style="height: 6%; width: 30%; font-size: 17px;">
                                            
                                            <option value="Approved">Approve</option>
                                            <option value="Declined">Decline</option>
                                            
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
								
									<br>
									<br>
									
									
						<br>
						<center><p><h2>Schedule for Pet's Pick Up</h2></p></center>
						<br>
						<br>
						
									
									
									<div class="row row-space">
									<div class="col-2">
									<p><b>Subject</b><p>
										<div class="input-group">
                                     <input class="input--style-1" type="text" name="subject" value="<?php echo $subject;?>">
                                </div>
								</div>
								</div>
								
								<div class="row row-space">
                            <div class="col-2">
							<p><b>Date of Pick up</b><p>
                                <div class="input-group">
                                    <input class="input--style-1" type="date" name="pickdate" value="<?php echo $pickdate;?>">
                                   
                                </div>
                            </div>
                            <div class="col-2">
							<p><b>Time of Pick up</b><p>
                                <div class="input-group">
									<input class="input--style-1" type="time" name="picktime" value="<?php echo $picktime;?>">
                                </div>
                            </div>
                        </div>
									
                                
                           
						
						
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
						</center>
                        
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
