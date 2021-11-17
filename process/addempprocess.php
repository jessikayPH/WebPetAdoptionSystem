<?php

require_once ('dbh.php');

$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$nid = $_POST['nid'];
$dept = $_POST['dept'];
$degree = $_POST['degree'];
$salary = $_POST['salary'];
$birthday =$_POST['birthday'];
$occupation =$_POST['occupation'];
$status =$_POST['status'];
$age =$_POST['age'];
$nameofpet =$_POST['nameofpet'];
$code =$_POST['code'];
$wan =$_POST['wan'];
$two =$_POST['two'];
$three =$_POST['three'];
$four =$_POST['four'];
$five =$_POST['five'];
$wanwan =$_POST['wanwan'];
$twotwo =$_POST['twotwo'];
$threethree =$_POST['threethree'];
$fourfour =$_POST['fourfour'];
$fivefive =$_POST['fivefive'];
$six =$_POST['six'];
$seven =$_POST['seven'];
$eight =$_POST['eight'];
$nine =$_POST['nine'];
$ten =$_POST['ten'];
$eleven =$_POST['eleven'];
$twelve =$_POST['twelve'];
$tertin =$_POST['tertin'];
$portin =$_POST['portin'];
$piptin =$_POST['piptin'];
$sixteen =$_POST['sixteen'];
$seventeen =$_POST['seventeen'];
$eighteen =$_POST['eighteen'];
$nineteen =$_POST['nineteen'];
$twenty =$_POST['twenty'];
$receipt =$_POST['receipt'];
//echo "$birthday";
$files = $_FILES['file'];
$filename = $files['name'];
$filrerror = $files['error'];
$filetemp = $files['tmp_name'];
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png' , 'jpg' , 'jpeg', 'pdf');

if(in_array($filecheck, $fileextstored)){

    $destinationfile = 'images/'.$filename;
    move_uploaded_file($filetemp, $destinationfile);

    $sql = "INSERT INTO `employee`(`id`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`, `nid`,  `address`, `dept`, `degree`, `pic`,`occupation`,`status`,`age`,`nameofpet`,`code`,`wan`,`two`,`three`,`four`,`five`,`wanwan`,`twotwo`,`threethree`,`fourfour`,`fivefive`,`six`,`seven`,`eight`,`nine`,`ten`,`eleven`,`twelve`,`tertin`,`portin`,`piptin`,`sixteen`,`seventeen`,`eighteen`,`nineteen`,`twenty`,`receipt`) VALUES ('','$firstname','$lastName','$email','1234','$birthday','$gender','$contact','$nid','$address','$dept','$degree','$destinationfile','$occupation','$status','$age','$nameofpet','$code','$wan','$two','$three','$four','$five','$wanwan','$twotwo','$threethree','$fourfour','$fivefive','$six','$seven','$eight','$nine','$ten','$eleven','$twelve','$tertin','$portin','$piptin','$sixteen','$seventeen','$eighteen','$nineteen','$twenty','$receipt')";

$result = mysqli_query($conn, $sql);

$last_id = $conn->insert_id;

$sqlS = "INSERT INTO `salary`(`id`, `base`, `bonus`, `total`) VALUES ('$last_id','$salary',0,'$salary')";
$salaryQ = mysqli_query($conn, $sqlS);
$rank = mysqli_query($conn, "INSERT INTO `rank`(`eid`) VALUES ('$last_id')");

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='..//aloginwel.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}

}

else{

      $sql = "INSERT INTO `employee`(`id`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`, `nid`,  `address`, `dept`, `degree`, `pic`,`occupation`,`status`,`age`,`nameofpet`,`code`,`wan`,`two`,`three`,`four`,`five`,`wanwan`,`twotwo`,`threethree`,`fourfour`,`fivefive`,`six`,`seven`,`eight`,`nine`,`ten`,`eleven`,`twelve`,`tertin`,`portin`,`piptin`,`sixteen`,`seventeen`,`eighteen`,`nineteen`,`twenty`,`receipt`) VALUES ('','$firstname','$lastName','$email','1234','$birthday','$gender','$contact','$nid','$address','$dept','$degree','images/no.jpg','$occupation','$status','$age','$nameofpet','$code','$wan','$two','$three','$four','$five','$wanwan','$twotwo','$threethree','$fourfour','$fivefive','$six','$seven','$eight','$nine','$ten','$eleven','$twelve','$tertin','$portin','$piptin','$sixteen','$seventeen','$eighteen','$nineteen','$twenty','$receipt')";

$result = mysqli_query($conn, $sql);

$last_id = $conn->insert_id;

$sqlS = "INSERT INTO `salary`(`id`, `base`, `bonus`, `total`) VALUES ('$last_id','$salary',0,'$salary')";
$salaryQ = mysqli_query($conn, $sqlS);
$rank = mysqli_query($conn, "INSERT INTO `rank`(`eid`) VALUES ('$last_id')");

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='..//addemp.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

// else{
//     echo ("<SCRIPT LANGUAGE='JavaScript'>
//     window.alert('Failed to Registere')
//     window.location.href='javascript:history.go(-1)';
//     </SCRIPT>");
// }
}






?>