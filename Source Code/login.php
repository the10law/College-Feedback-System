<?php
/* User login process, checks if user exists and password is correct */
//require('dbconnect.php');
// Escape email to protect against SQL injections
//$uname=$_POST["uname"];
$dbname="feed_back";
$host="localhost";
$user="root";
$pwd="";
$con=mysqli_connect($host,$user,$pwd,$dbname);
$uname = $_POST['uname'];
$qry="SELECT * FROM admin_pass WHERE Username='$uname'";
$result = mysqli_query($con,$qry);
$_SESSION['logged_in'] = false;
if ( $result->num_rows == 0 ){ // User doesn't exist

    $_SESSION['message'] = "User with that username doesn't exist!";
    header("location: accessdb.php");
}
else { // User exists
    $user = $result->fetch_assoc();
    if ( $_POST['pass']==$user['Password'])  {
        $_SESSION['message_success']= "You have been logged in successfully!";
         $_SESSION['logged_in'] = true;
        header("location: editdb.php");
    }
    else {
	 
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: accessdb.php");
    }
}

