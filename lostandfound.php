<?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Animal Adoption System</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
	<link rel="stylesheet" type="img" href="C:\xampp\htdocs\Employee_Management_System\img\gg.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
    
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">
	
</head>
<style>
header {
	height: 9%;
	padding: 16px 20px 6px 40px;
	
	
	
}
.button {
  border-radius: 4px;
  background-color: white;
  border: none;
  color: #00873a;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  margin-top: -5%;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 50px 40px 0 rgba(0, 0, 0, 0.2);
  margin: 80px;
  margin-right: 50px;
}
.container2 {
	background-color: white;
	width: 100%;
	letter-spacing: 2px;
	color: #00873a;
	margin-top: -6%;
}

.column img {
		border-radius: 7%;
	
	
}
footer p{
	background-color: #00873a;
	margin-bottom: 0px;
    padding: 20px 0px;
    color: #fff;
    font-size: 13px;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 0.5px;
	font-family: 'Montserrat', sans-serif;
	width: 106%;
}


</style>

	<header>
		<nav>
			<h1>Lost and Found</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				
				<li><a class="homeblack" href="addemp.php">Scheduling</a></li>
				<li><a class="homered" href="lostandfound.php">Lost and Found</a></li>
			
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
<!-- Slide gallery -->
     
	<h1 class="text-center"><b>Animal Lost and Found</b></h1>
    <!-- Thumbnails -->
    <div class="container thumbs">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/dogwan.jpg" alt="" class="img-rounded">
          <div class="caption">
            <h2 class="text-center">Macey</h2>
            <p>
			<b>Name:</b> Macey <br>
            <b>Gender:</b> Male <br>
			<b>Breed:</b> Golden Retriever <br>
			<b>Age:</b> Approx. 4 years old <br>
			<b>Size:</b> Average<br>
			<b>Last seen:</b> Street
			
			</p>
			<div class="btn-toolbar text-center">
              <a href="report.php" role="button" class="btn btn-success">Report</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/dog2.jpg" alt="" class="img-rounded">
          <div class="caption">
            <h2 class="text-center">Madison</h2>
			<p>
            <b>Name:</b> Madison <br>
            <b>Gender:</b> Male <br>
			<b>Breed:</b> Pitbull <br>
			<b>Age:</b> Approx. 3 years old <br>
			<b>Size:</b> Average<br>
			<b>Last seen:</b> Backyard Apple Street
			
			</p>
			<div class="btn-toolbar text-center">
              <a href="report.php" role="button" class="btn btn-success">Report</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/dog3.jpg" alt="" class="img-rounded">
          <div class="caption">
		  
            <h2 class="text-center">Blacky</h2>
			<p>
            <b>Name:</b> Blacky <br>
            <b>Gender:</b> Male <br>
			<b>Breed:</b> Aspin  x Dalmatian <br>
			<b>Age:</b> Approx. 3 years old <br>
			<b>Size:</b> Average<br>
			<b>Last seen:</b> Street
			
			</p>
		   <div class="btn-toolbar text-center">
              <a href="report.php" role="button" class="btn btn-success">Report</a>
            </div>
          </div>
        </div>
      </div>
    </div>
	<div class="container thumbs">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/catwan.jpg" alt="" class="img-rounded">
          <div class="caption">
		  
            <h2 class="text-center">Sammy</h2>
			<p>
            <b>Name:</b> Sammyy <br>
            <b>Gender:</b> Female <br>
			<b>Breed:</b> Puspin <br>
			<b>Age:</b> Approx. 2 years old <br>
			<b>Size:</b> Average<br>
			<b>Last seen:</b> Street
			
			</p>
			<div class="btn-toolbar text-center">
              <a href="report.php" role="button" class="btn btn-success">Report</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/cat2.jpg" alt="" class="img-rounded">
          <div class="caption">
		  
            <h2 class="text-center">Cloey</h2>
			<p>
            <b>Name:</b> Cloey <br>
            <b>Gender:</b> Female <br>
			<b>Breed:</b> Persian <br>
			<b>Age:</b> Approx. 2 years old <br>
			<b>Size:</b> Average<br>
			<b>Last seen:</b> Backyard Street
			
			</p>
			<div class="btn-toolbar text-center">
              <a href="report.php" role="button" class="btn btn-success">Report</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/cat3.jpg" alt="" class="img-rounded">
          <div class="caption">
		   
            <h2 class="text-center">Moley</h2>
			 <p>
            <b>Name:</b> Moley <br>
            <b>Gender:</b> Male <br>
			<b>Breed:</b> Puspin <br>
			<b>Age:</b> Approx. 2 years old <br>
			<b>Size:</b> Average<br>
			<b>Last seen:</b> Street
			
			</p>
			<div class="btn-toolbar text-center">
              <a href="report.php" role="button" class="btn btn-success">Report</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Thumbnails -->
    <!-- Content -->
    <div class="container">
      <center>
	 
    </div><!-- End Content -->
	<br>
	<br>
	<br>
	
	<link href='https://fonts.googleapis.com/css?family=Wire+One|Raleway:300' rel='stylesheet' type='text/css'>
	<link href="divider.css" rel="stylesheet">


<div class="colour-block" style="background-color: #00873a; width: 100%; height: 20%;">

	
<center>
<a href="report.php"class="button"><span>I want to report my <b>Lost Pet</b></span></a>

<a href="report.php" class="button"><span>I want to report my <b>Found Pet</b> </span></a>
</center>
</div>

<div class="row">
  <div class="column" style="margin-top: 20%;">
    <div class="card">
      <img src="img/con2.jpg" alt="form" style="width:100%">
      <div class="container2">
	  <br>
        <h3><b><center>2. Community search
Check your city pound immediately. If your pet was loose on the streets, he/she may have been picked up by authorized catchers. Canvas your neighborhood, go door-to-door, and post flyers with your pet’s current photos and your contact information. If you suspect your pet has been stolen, your must report this to the police/barangay immediately.
</h3>
      <br>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/conwan.jpg" alt="zoom" style="width:100%">
      <div class="container2">
	  <br>
        <h3><B><center>1. Social media announcement <br> 
		To post your lost pet in the PAWS Facebook page, kindly email their photo to <B>PASIG ANIMAL POUND</B> with the subject line LOST PET, or use the report button below. Remember to include details such as identifying marks, time and place last seen, and other helpful information. And of course, don’t forget to include your contact details.</center></b></h3>
        <br>
       
      </div>
    </div>
  </div>
  <div class="column" style="margin-top: 20%;">
    <div class="card">
      <img src="img/con3.jpg" alt="visit" style="width:100%">
      <div class="container2">
	  <br>
        <h3><b><center>3. Fostering found pets
People are encouraged to foster the lost pet or find someone to foster it, in order to give the owner a chance to make contact. If you post on your social media pages, we advise you to limit the information you share and to post photos in black and white in order to protect the animal from opportunistic people who just want to score a free pet.<br>
       </h3><br>
      </div>
    </div>
  </div>
  <div class="column" style="margin-top: -25%;">
    <div class="card">
      <img src="img/con4.jpg" alt="visit" style="width:100%">
      <div class="container2">
	  <br>
        <h3><b><center>4. Who to contact
Inform the barangay in case the owner goes looking for their pet there. You may also take the animal to the vet to scan for a microchip. Taking the animal to the pound is also an option, but this means the pet will be put down after a few days if not claimed by the owner. PAWS cannot take in the lost pet due to our limited admission policy.<br>
<br>       
	   </h3>
      </div>
    </div>
  </div>
</div>

<footer>
    <div class="container3">
      <div class="row">
        <div class="col-md-12">
		
          <center><p><i class="fa fa-copyright"></i><br><br><br> Copyright 2020 | Design by 3in1</center></p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>