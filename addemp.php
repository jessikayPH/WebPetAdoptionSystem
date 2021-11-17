<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Scheduling Form | Animal Adoption System</title>

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
  color: black;
}
</style>
<body>
    <header>
        <nav>
            <h1>Scheduling Form</h1>
            <ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">Home</a></li>
                <li><a class="homered" href="addemp.php">Application Form</a></li>
				
				
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
            </ul>
        </nav>
		
		
    </header>
    
    <div class="divider"></div>

    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"><center>Personal Info</center></h2>
                    <form action="process/addempprocess.php" method="POST" href="addemp.php" enctype="multipart/form-data">


                        

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="First Name" name="firstName" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Last Name" name="lastName" required="required">
                                </div>
                            </div>
                        </div>





                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email" name="email" required="required">
                        </div>
                        <p><b>Date</b></p>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="BIRTHDATE" name="birthday" required="required">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
						<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="number" placeholder="Contact Number" name="contact" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Occupation" name="occupation" required="required">
                                </div>
                            </div>
                        </div>
						<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="address" required="required">
                        </div>

                        


						<p> <b>Time</b></p>
						
                        <div class="input-group">
                            <input class="input--style-1" type="time" placeholder="Time in" name="dept" required="required">
                        </div>
						
						<p> <b>STATUS</b></p>
						<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="ex. single/married" name="status" required="required">
                                </div>
                            </div>
							
							<p><b>AGE</b></p>
							
							<div class="col-2">
							
                                <div class="input-group">
                                     <input class="input--style-1" type="text" name="age" required="required">
                                </div>
                            </div>
						</div>
							
							<center><p><h2>Pet's Informations</h2></p></center>
							<br>
							<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="Pet Name" name="nameofpet" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Pet Code" name="code" required="required">
                                </div>
                            </div>
                        </div>
                          
                            
							
							
							
							<p><b>1. What prompted you to adopt?</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="ex. friens/website etc." name="wan" required="required">
                        </div>
						<p><b>2. What are you looking to adopt?</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="ex. dog/cat" name="two" required="required">
                        </div>
						<p><b>3. Have you adopted before?</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Yes or No" name="three" required="required">
                        </div>
						<p><b>4. For whom you are adopting?</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="ex. gift/for myself" name="four" required="required">
                        </div>
						<p><b>5. Describe your pet?</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="ex. gender/age/appearance" name="five" required="required">
                        </div>
						
						
						<hr class="dashed">
						<br>
						<center><p><h2>Questionnaires</h2></p></center>
						<br>
						
						<p><b>1. Are there children (below 18) in the house?</b></p>
						<div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="wanwan">
                                            
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
							
						<p><b>2. Do you have other pets?</b></p>
						<div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="twotwo">
                                            
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
							
							
							<p><b>3. Who else do you live with?</b></p>
							<div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="threethree">
                                            
                                            <option value="Spouse">Spouse</option>
                                            <option value="Parents">Parents</option>
                                            <option value="Roomates">Roomates</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
							
						<p><b>4. Are there any members of your family allergic to animals?</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Yes/No. if yes, how it will be managed." name="fourfour" required="required">
                        </div>
						<p><b>5. Who will be responsible for feeding, grooming and generally caring for your pet?</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text"  name="fivefive" required="required">
                        </div>
						<p><b>6. Who will be look after your pet in case of emergency?</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text" name="six" required="required">
                        </div>
						<p><b>7. How many hours in an average workday will your pet be left alone?</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text"  name="seven" required="required">
                        </div>
						<p><b>8. Does everyone in your family support your decision to adopt a pet?</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Yes/No, if yes explain" name="eight" required="required">
                        </div>
						<p><b>9. What steps will you take to familiarize your pet with his/her new surroundings?</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text" name="nine" required="required">
                        </div>
						<p><b>10. What type of building do you live in?</b></p>
							<div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="ten">
                                            
                                            <option value="House">House</option>
                                            <option value="Apartment">Apartment</option>
                                            <option value="Condo">Condo</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
							<p><b>11. Do you rent?</b></p>
							<div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="eleven">
                                            
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
							<p><b>12. What happens to your pet if or when you move?</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text" name="twelve" required="required">
                        </div>
						<p><b>13. Do you have a job?</b></p>
							<div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="tertin">
                                            <option disabled="disabled" selected="selected"></option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
							<p><b>14. What kind of pet is right for you? Describe</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text" name="portin" required="required">
                        </div>
						<p><b>15. Are you ready for long term commitment?</b></p>
							<div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="piptin">
                                            
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
							<p><b>16. Can you afford to take care for your pet's healthy and safety?</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text" name="sixteen" required="required">
                        </div>
						<p><b>17. Do you have time for your pet?</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text" name="seventeen" required="required">
                        </div>
						<p><b>18. Are you will to train your pet? How.</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text" name="eighteen" required="required">
                        </div>
						<p><b>19. Are your willing to pet-proof your pet?</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text" name="nineteen" required="required">
                        </div>
						<p><b>20. Are you prepared to deal with the special pet challenges that may occur?</b></p>
							<div class="input-group">
                            <input class="input--style-1" type="text" name="twenty" required="required">
                        </div>
						
						
					


                        
						<p><b>Upload your photo here</b></p>
                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="file" name="file">
                        </div>
					
					






<center>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" href="aloginwel.php" >Submit</button>
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
