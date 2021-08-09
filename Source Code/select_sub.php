<?php
session_start();
require 'dbconnect.php';
$dept=$_SESSION['dept_1'];
$_SESSION['dept_1']=$dept;
$dept=strtolower($_SESSION['dept_1']);
$term1=$_SESSION['term1'];
$regno=$_SESSION['regno'];
$qry="SELECT * FROM sub_mas WHERE Dept='$dept' AND Term='$term1'";
$con=$_SESSION['con'];
$result = mysqli_query($con,$qry);
//print_($user);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=0, shrink-to-fit=no" />
<title>SIT | Select Subject</title>
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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>

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
<div class="container">
<center>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
<table>
<tr><th>Term</th><th>Course Code</th><th>Course Name</th><th>Teacher</th><th>Select</th></tr>
<?php
$codeArr=array();
$term=array();
$course=array();
$teacher=array();
while ($row=$result->fetch_assoc()) {

array_push($codeArr, $row["Code"]);
array_push($term, $row["Term"]);
array_push($course, $row["Course"]);
array_push($teacher, $row["Teacher"]);
	}
$_SESSION['codeArr']=$codeArr;
$_SESSION['term']=$term;
$_SESSION['course']=$course;
$_SESSION['teacher']=$teacher;
if($result->num_rows==3)
{
?>
<tr><td><?php echo $term[0]?></td><td><?php echo $codeArr[0]?></td><td><?php echo $course[0]?></td><td><?php echo $teacher[0]?></td><td><input type=radio name="rad" class=form-control  value=<?php echo $codeArr[0]?>></td></tr>
<tr><td><?php echo $term[1]?></td><td><?php echo $codeArr[1]?></td><td><?php echo $course[1]?></td><td><?php echo $teacher[1]?></td><td><input type=radio name=rad class=form-control value="<?php echo $codeArr[1]?>"></td></tr>
<tr><td><?php echo $term[2]?></td><td><?php echo $codeArr[2]?></td><td><?php echo $course[2]?></td><td><?php echo $teacher[2]?></td><td><input type=radio name=rad class=form-control value="<?php echo $codeArr[2]?>"></td></tr>
<tr><td></td><td></td><td></td><td></td><td><button class="form-control alert-info">Submit</button></td></tr>
<?php
}
if($result->num_rows==2)
{
?>
<tr><td><?php echo $term[0]?></td><td><?php echo $codeArr[0]?></td><td><?php echo $course[0]?></td><td><?php echo $teacher[0]?></td><td><input type=radio name="rad" class=form-control  value=<?php echo $codeArr[0]?>></td></tr>
<tr><td><?php echo $term[1]?></td><td><?php echo $codeArr[1]?></td><td><?php echo $course[1]?></td><td><?php echo $teacher[1]?></td><td><input type=radio name=rad class=form-control value="<?php echo $codeArr[1]?>"></td></tr>

<tr><td></td><td></td><td></td><td></td><td><button class="form-control alert-info">Submit</button></td></tr>
<?php
}

if($result->num_rows==4)
{
?>
<tr><td><?php echo $term[0]?></td><td><?php echo $codeArr[0]?></td><td><?php echo $course[0]?></td><td><?php echo $teacher[0]?></td><td><input type=radio name="rad" class=form-control  value=<?php echo $codeArr[0]?>></td></tr>
<tr><td><?php echo $term[1]?></td><td><?php echo $codeArr[1]?></td><td><?php echo $course[1]?></td><td><?php echo $teacher[1]?></td><td><input type=radio name=rad class=form-control value="<?php echo $codeArr[1]?>"></td></tr>
<tr><td><?php echo $term[2]?></td><td><?php echo $codeArr[2]?></td><td><?php echo $course[2]?></td><td><?php echo $teacher[2]?></td><td><input type=radio name=rad class=form-control value="<?php echo $codeArr[2]?>"></td></tr>
<tr><td><?php echo $term[3]?></td><td><?php echo $codeArr[3]?></td><td><?php echo $course[3]?></td><td><?php echo $teacher[3]?></td><td><input type=radio name=rad class=form-control value="<?php echo $codeArr[3]?>"></td></tr>
<tr><td></td><td></td><td></td><td></td><td><button class="form-control alert-info">Submit</button></td></tr>
<?php
}

?>
</table>
</form>
</center>
<?php
if(isset($_POST['rad']))
{
$code_fb=$_POST['rad'];
$_SESSION['rad_code1']=$code_fb;
$qry1="SELECT * FROM feedback WHERE Subcode='$code_fb' AND Regno='$regno'";
$result_fb = mysqli_query($con,$qry1);
if($result_fb->num_rows==1){
echo"<center><b><h3 class=alert-danger>ERROR::</h3><h4 class=alert-warning>You have already given feedback for the particular subject you selected!! Please select another subject!!</h4></b></center>";
}
else 
{
header("location: give_feedback.php");
}
}
?>
</div>
</div>
<div class="container" style="border-bottom-style:ridge; padding-bottom:5%">
<footer style="text-align:center">
<p style="padding-bottom:10px;">Survey Developed By: Rahulkumar Singh</p>
</footer>
</div>

</body>
</html>


