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
$dept_view= $_POST['dept_view'];
$qry="SELECT * FROM dept_pwd WHERE Dept='$dept_view'";
$result = mysqli_query($con,$qry);
$_SESSION['logged_in'] = false;
if ( $result->num_rows == 0 ){ // User doesn't exist

    $_SESSION['message_view'] = "User with the department entered doesn't exist!";
    header("location: view.php");
}
else { // User exists
    $user = $result->fetch_assoc();
    if ( $_POST['pass_view']==$user['Password'])  {
        $_SESSION['message_view_success']= "You have been logged in successfully!";
         $_SESSION['logged_in'] = true;
        header("location: select_view_fb.php");
    }
    else {
	 
        $_SESSION['message_view'] = "You have entered wrong password, try again!";
        header("location: view.php");
    }
}

