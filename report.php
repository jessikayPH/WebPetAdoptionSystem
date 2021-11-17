<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Animal Adoption System</title>

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

</style>
<body>
    <header>
        <nav>
          
            <ul id="navli">
                <li><a class="homeblack" href="aloginwel.php">HOME</a></li>
              
				<li><a class="homered" href="report.php">Report</a></li>
				
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
            </ul>
        </nav>
		
	<h1 id="title">Report Lost and Found</h1>
    </header>
    
    <div class="divider"></div>

    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"><center>Report Form</center></h2>
                    <form action="process/reportprocess.php" method="POST" href="report.php" enctype="multipart/form-data">


                        
					<div class="row row-space">
                            <div class="col-2">
							<p><b>First Name</b></p>
                                <div class="input-group">
                                     <input class="input--style-1" type="text" name="firstName" required="required">
                                </div>
                            </div>
							
                            <div class="col-2">
                                <div class="input-group">
								<p><b> Last Name</b></p>
                                    <input class="input--style-1" type="text" name="lastName" required="required">
                                </div>
                            </div>
                        </div>
						
						<div> <p><b>Type of Report</b></p>
                        <div class="row row-space">
                            
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="report">
                                            <option disabled="disabled" selected="selected"></option>
                                            <option value="Lost Pet">Lost Pet</option>
                                            <option value="Found Pet">Found Pet</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>




						<div> <p><b>Email Address</b></p>
                        <div class="input-group">
                            <input class="input--style-1" type="email" name="email" required="required">
                        </div>
                       <div> <p><b>Pet Gender</b></p>
                        <div class="row row-space">
                            
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected"></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div> <p><b>Contact Number</b></p>
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Contact Number" name="contact" required="required" >
                        </div>
						
						<div> <p><b>Date</b></p>
                        <div class="input-group">
                            <input class="input--style-1" type="date"  name="birthday" required="required" >
                        </div>

                        


						<p><b>Breed<b/></p>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Pet Breed" name="dept" required="required">
                        </div>
						
						<p>Pet Description</p>
						<textarea id="Description" name="descr" rows="6" cols="50">
						
						
						</textarea>
						<br>
						<br>


                        
						<p><b>Upload photo of your pet</b><p>
                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="file" name="file">
                        </div>
					
					






						<center>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" href="addemp.php" >Submit</button>
                        </div>
						</center>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
