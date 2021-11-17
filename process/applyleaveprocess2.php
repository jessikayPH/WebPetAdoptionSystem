<?php
//including the database connection file
require_once ('dbh2.php');

//getting id of the data from url
$id = $_GET['id'];
//echo $id;
$reason = $_POST['reason'];

$start = $_POST['start'];
//echo "$reason";
$end = $_POST['end'];
$time = $_POST['time'];
$sql = "INSERT INTO `employee_leave`(`id`,`token`, `start`, `end`, `reason`, `status`,`time`) VALUES ('$id','','$start','$end','$reason','Pending','$time')";

$result = mysqli_query($conn, $sql);

//redirecting to the display page (index.php in our case)
header("Location:..//myprofile2.php?id=$id");
?>

