<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login_view.php';
    }
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIT | Accessing Feedback</title>
<link rel="shortcut icon" href="logo ori.png"  type="image/x-icon" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css" />

<script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
   
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});
</script>
<style>
header{background-color:#6DCCEB; width:100%; height:50px; font-size:18px; font-family:Georgia, "Times New Roman", Times, serif; border-radius:5px;}
span{background-color:black;}
footer{background-color:#6DCCEB;height:35px; font-family:Arial, Helvetica, sans-serif; font-size:18px; position:fixed;left:5%; bottom:0; width:90%; border-bottom-color:#62ADDB; border-radius:5px;}
</style></head>

<body>
<!-- Main container of the webpage -->
<div class="container-fluid">
<header style="text-align:center">
<p style="padding-top:1%;">SIT ONLINE FEEDBACK SURVEY</p>
</header></div>
<!-- Navbar div -->
<div class="container" style="padding-top:0.4%">
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#data">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="home.html">SIT</a>
</div>
<div class="collapse navbar-collapse" id="data">
<ul class="nav navbar-nav">

<li class="active"><a href="home.html">Home</a></li>
<li ><a href="enter.php">Enter Feedback</a></li>
<li><a href="view.php">View Feedback</a></li>
<li><a href="accessdb.php">Access Database</a></li>
<li><a href="about.html">About</a></li>
</ul>
</div>
</nav>
<hr /><hr />
</div>

<br />
<br />
<center>
<?php 
if(!empty($_SESSION['message_view']))
{
$msg=$_SESSION['message_view'];
echo "<b class=alert-danger> Error:</b><b class=alert-warning>".$msg."</b><br>";
}
?>
<b class="alert-warning ">WARNING:</b>You are required to be an authorised user in order to access the feedback content. Please provide your login credentials below to gain acces to the database!!</center><br />
<div class="container" style="width:500px; height:300px;">
<form method="post" action="view.php">
Department<input type="text" placeholder="Enter your Department" required name="dept_view" class="form-control"/>
<br />
Password<input type="password" placeholder="Enter Password" required name="pass_view" class="form-control"/>
<br />
<button class="alert-danger form-control" type="reset">Reset</button>
<button class="alert-info  form-control col-lg-10 " type="submit" name="login">Log In</button>
</form>
</div>

<div class="container" style="border-bottom-style:ridge; padding-bottom:7%">
<footer style="text-align:center">
<p style="padding-bottom:10px;">Survey Developed By: Rahulkumar Singh</p>
</footer>
</div>

</div>
</body>
</html>
