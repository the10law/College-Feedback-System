<?php
session_start();
require 'dbconnect.php';
$m1=$_POST['mark1'];
$m2=$_POST['mark2'];
$m3=$_POST['mark3'];
$m4=$_POST['mark4'];
$m5=$_POST['mark5'];
$m6=$_POST['mark6'];
$m7=$_POST['mark7'];
$m8=$_POST['mark8'];
$m9=$_POST['mark9'];
$m10=$_POST['mark10'];
$m11=$_POST['mark11'];
$regno=$_SESSION['regno'];
$term1=$_SESSION['term1'];
$dept_1=$_SESSION['dept_1'];
$rad_code=$_SESSION['rad_code'];
$comment=$_POST['comment'];
$con=$_SESSION['con'];
$date=date("Y-m-d");
$qry="insert into feedback values ('$regno', '$date', '$term1','$dept_1','$rad_code','$m1','$m2','$m3','$m4','$m5','$m6','$m7','$m8','$m9','$m10','$m11','$comment')";
$result=mysqli_query($con,$qry);
if ($result>0)
header("location: fb_success.php");
?>