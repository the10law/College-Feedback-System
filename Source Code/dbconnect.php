<?php
$dbname="feed_back";
$host="localhost";
$user="root";
$pwd="";
$con=mysqli_connect($host,$user,$pwd,$dbname);
$_SESSION['con']=$con;
?>