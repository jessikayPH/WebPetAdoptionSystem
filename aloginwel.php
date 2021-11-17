<?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
$result = mysqli_query($conn, $sql);


?>



<html>
<head>
	<title>Home | Animal Adoption System</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
	<link rel="stylesheet" type="img" href="C:\xampp\htdocs\Employee_Management_System\img\gg.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
    
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
header {
	height: 9%;
	padding: 16px 20px 6px 40px;
	
	
	
} 
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 23px 8px 0 rgba(0, 0, 0, 0.2);
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
			<h1>Animal Adoption</h1>
			<ul id="navli">
			
				<!-- 40 --> 
				<!-- myprofile2.php     15 -->					
				<li><a class="homeblack" href="myprofile.php?id=40">Profile</a></li>
				
				
				<li><a class="homered" href="aloginwel.php">HOME</a></li>	
								
				<li><a class="homeblack" href="addemp.php">Application</a></li>				
				<li><a class="homeblack" href="lostandfound.php">Lost and Found</a></li>				
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
				
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
<!-- Slide gallery -->
    <center>
	<img id="top-pic" src="https://www.caninewelfare.org/wp-content/uploads/2017/08/peeking-dog-min.png" alt="Cute Dog Stare">
</center>
	<h1 class="text-center"><b>Available Pets for Adoption</b></h1>
    <!-- Thumbnails -->
    <div class="container thumbs">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/petdogwan.jpg" alt="" class="img-rounded">
          <div class="caption">
            <h3 class="text-center">Gary</h3>
			<p>
			<B>Pet Code</b> #G7yTK90Y <br>
			<b>Name:</b> Gary <br>
            <b>Gender:</b> Male <br>
			<b>Breed:</b> Golden Retriever <br>
			<b>Age:</b> Approx. 4 years old <br>
			<b>Size:</b> Average<br>
			<b>Shelter resident since 2020</b>
			
			</p>
			
			
			
			<div class="btn-toolbar text-center">
              <a href="addemp.php" role="button" class="btn btn-success">Adopt</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/petdog2.jpg" alt="" class="img-rounded">
          <div class="caption">
            <h3 class="text-center">Tom</h3>
            <p>
			<B>Pet Code</b> #BhUW64s <br>
			<b>Name:</b> Tom <br>
            <b>Gender:</b> Male <br>
			<b>Breed:</b> Golden Retriever <br>
			<b>Age:</b> Approx. 4 years old <br>
			<b>Size:</b> Average<br>
			<b>Shelter resident since 2020</b>
			
			</p>
			<div class="btn-toolbar text-center">
              <a href="addemp.php" role="button" class="btn btn-success">Adopt</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/petdog3.jpg" alt="" class="img-rounded">
          <div class="caption">
            <h3 class="text-center">Jerry</h3>
            
			<p>
			<B>Pet Code</b> #J3ry763NHi <br>
			<b>Name:</b> Jerry <br>
            <b>Gender:</b> Male <br>
			<b>Breed:</b> Chow x Chiua <br>
			<b>Age:</b> Approx. 2 years old <br>
			<b>Size:</b> Average<br>
			<b>Shelter resident since 2019</b>
			
			</p>    
			<div class="btn-toolbar text-center">
              <a href="addemp.php" role="button" class="btn btn-success">Adopt</a>
            </div>
          </div>
        </div>
      </div>
    </div>
	<div class="container thumbs">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/petcatwan.jpg" alt="" class="img-rounded">
          <div class="caption">
            <h3 class="text-center">Mica</h3>
            
			<p>
			<B>Pet Code</b> #JGB3GDK9 <br>
			<b>Name:</b> Mica <br>
            <b>Gender:</b> Male <br>
			<b>Breed:</b> Puspin <br>
			<b>Age:</b> Approx. 2 years old <br>
			<b>Size:</b> Average<br>
			<b>Shelter resident since 2020</b>
			
			</p>
			<div class="btn-toolbar text-center">
              <a href="addemp.php" role="button" class="btn btn-success">Adopt</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/petcat2.jpg" alt="" class="img-rounded">
          <div class="caption">
            <h3 class="text-center">Arianna</h3>
            <p>
			<B>Pet Code</b> #HN275D9DN <br>
			<b>Name:</b> Arianna <br>
            <b>Gender:</b> Male <br>
			<b>Breed:</b> Puspin <br>
			<b>Age:</b> Approx. 2 years old <br>
			<b>Size:</b> Average<br>
			<b>Shelter resident since 2020</b>
			
			</p>
			<div class="btn-toolbar text-center">
              <a href="addemp.php" role="button" class="btn btn-success">Adopt</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/petcat3.jpg" alt="" class="img-rounded">
          <div class="caption">
            <h3 class="text-center">Whitety</h3>
            <p>
			<B>Pet Code</b> #HGnfi75ns <br>
			<b>Name:</b> Whitety <br>
            <b>Gender:</b> Male <br>
			<b>Breed:</b> Garfield <br>
			<b>Age:</b> Approx. 2 years old <br>
			<b>Size:</b> Average<br>
			<b>Shelter resident since 2019</b>
			
			</p>
			<div class="btn-toolbar text-center">
              <a href="addemp.php" role="button" class="btn btn-success">Adopt</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Thumbnails -->
    <!-- Content -->
    <div class="container">
      <center>
	  <h2 class="text-center">Application Form </h2>
     <a href="form/adoptionform.pdf" download>
  <button src="form/adoptionform.pdf" class="fa fa-download" style="background-color: #00873a; font-size: 17px; border-radius: 20px; letter-spacing: 1px; height: 20%; width: 20%; font-weight: 700!important; color: #ffffff ; alt="Application Form"> Click here to download</center>
</a>
    </div><!-- End Content -->

	
	<link href='https://fonts.googleapis.com/css?family=Wire+One|Raleway:300' rel='stylesheet' type='text/css'>
	<link href="divider.css" rel="stylesheet">



<div class="row">
  <div class="column">
    <div class="card">
      <img src="form/formpic.png" alt="form" style="width:100%">
      <div class="container2">
	  <br>
        <h3><b><center>1. Submit the application form First, please download and fill in the Adoption Application Form, and attach it to this scheduling form. Ocular inspections are suspended for safety reasons, so please attach photos of your home, particularly the area where your new pet will be kept</center></b></h3>
        
      <br>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="form/zoompic.jpg" alt="zoom" style="width:100%">
      <div class="container2">
	  <br>
        <h3><B><center>2. Zoom Interview
Using the form, you will be asked to select a date and time for your 1st interview, at least 3 days in advance. That way, we can check our calendar for availability of our interviewers. The Zoom link will be sent to you via email on or before your interview date.</center></b></h3>
     <br>
       
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="form/visitpic.jpg" alt="visit" style="width:100%">
      <div class="container2">
	  <br>
        <h3><b><center>3. Shelter Visits
Your visit will be scheduled if your pass the interview. The 1st visit is where you will choose your prospective pet and have your 2nd interview. The 2nd visit is the time to bond with your pet and finalize your application. You may take home your pet on the 3rd visit.<center></b></h3>
     <br>
       
      </div>
    </div>
  </div>
</div>

<div class="colour-block" style="background-color: #00873a; height: 40%;  letter-spacing: 2px;">
<h2><center><b>Scan this QRCODE </b>

				 for payment or donations using GCASH account</center></h2>
  
<img src="form/qrcode.png" class="img-rounded" alt="AdoptionForm" style=" margin-top: -35%; margin-left: 130%; width: 50%; height: 250;">
</div>
<br>
<br>
<br>
<br><br>
<br>
<footer>
    <div class="container3">
      <div class="row">
        <div class="col-md-12">
		
          <center><p><br><br><br> Copyright 2020 | Design by 3in1</center></p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>