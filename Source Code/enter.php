<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIT | Enter Details</title>
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


</div>
<br />
<br />
<div class="container" style="height:300px; width:500px;">

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
Register Number<input type="text" name="reg" required class="form-control" />
Department<select name="dept" required class="form-control" >
<option>1year</option>
<option>Civil</option>
<option>EEE</option>
<option>Mechanical</option>
<option>Computer</option>
<option>DPT</option>
<option>ICE</option>
<option>ECE</option>
</select>
Term<select class="form-control" required name="term">
<option>I</option>
<option>II</option>
<option>III</option>
<option>IV</option>
<option>V</option>
<option>VI</option>
<option>VII</option>
</select>
<button type="reset" class="form-control alert-danger">Reset</button>
<button type="submit" class="form-control alert-info">Give Feedback</button>
</form>
</div>



<div class="container" style="border-bottom-style:ridge; padding-bottom:10%">
<footer style="text-align:center">
<p style="padding-bottom:10px;">Survey Developed By: Rahulkumar Singh</p>
</footer>
</body>
</html>
<?php
session_start();

if(isset($_POST['dept']) && isset($_POST['reg']) && isset($_POST['term']))
{
$dept=strtolower($_POST['dept']);
$_SESSION['dept_1']=$dept;
$term1=$_POST['term'];
$_SESSION['term1']=$term1;
$regno=$_POST['reg'];
$_SESSION['regno']=$regno;
require 'dbconnect.php';
$con=$_SESSION['con'];
$qry1="select * from feedback where Regno='$regno' AND Term='$term1'";
$qry2="SELECT * FROM sub_mas WHERE Dept='$dept' AND Term='$term1'";
$res1=mysqli_query($con,$qry1);
$res2 = mysqli_query($con,$qry2);
$codeA=array();
while ($row=$res2->fetch_assoc()) {
array_push($codeA, $row["Code"]);
}
$i=sizeof($codeA);
if($res1->num_rows==$i)
{
echo "<center><h3 class=alert-warning>We have recieved all your feedbacks for this particular term!!! Please return next term if you wish to give more feedback!! Thank You!! :)</h3></center>";
}
else
{
header("location: select_sub.php");
}
}


?>