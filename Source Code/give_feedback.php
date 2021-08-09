<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=0, shrink-to-fit=no" />
<title>SIT | Give Feedback</title>
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
footer{background-color:#6DCCEB;height:35px; font-family:Arial, Helvetica, sans-serif; font-size:18px; width:100%;border-bottom-color:#62ADDB; border-radius:5px;}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 3px;
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
<?php
session_start();
require 'dbconnect.php';
$rad=$_SESSION['rad_code1'];
$_SESSION['rad_code']=$rad;
$rad_code=$_SESSION['rad_code'];
$regno=$_SESSION['regno'];
$con=$_SESSION['con'];
$qry="select * from stud_mas where Regno='$regno'";
$res1=mysqli_query($con,$qry);
$row1=$res1->fetch_assoc();

//submas

$dept=strtolower($_SESSION['dept_1']);
$term=$_SESSION['term'];
$qry1="SELECT * FROM sub_mas WHERE Code='$rad'";
$res2 = mysqli_query($con,$qry1);
$row2=$res2->fetch_assoc();
$_SESSION['term_s']=$row2['Term'];
$term_s=$_SESSION['term_s'];
$_SESSION['teacher_s']=$row2['Teacher'];
$teacher_s=$_SESSION['teacher_s'];
$_SESSION['course_s']=$row2['Course'];
$course_s=$_SESSION['course_s'];

//$codeArr=$_SESSION[''];
?>
<div class="container-fluid">

<table style="font-family:Georgia, 'Times New Roman', Times, serif;" >
<tr>
<td>Name</td><th><input type=text value="<?php echo $row1['Name']?>" readonly /></th><td>Term</td><th><input type=text value="<?php echo $term_s?>" readonly /></th>
</tr>
<tr>
<td>Regno</td><th><input type=text value="<?php echo $row1['Regno']?>" readonly /></th><td>Course Code</td><th><input type=text value="<?php echo $rad_code?>" readonly /></th>
</tr>
<tr><td>Teacher</td><th><input type=text value="<?php echo $teacher_s?>" readonly /><td>Course Name</td><th><input type=text value="<?php echo $course_s?>" readonly /></th></tr>
</table>
</div>
<center>
<h3><u>Feedback</u></h3>
</center>
<form method="post" action="store_feedback.php">
<table>
<tr>
<th>Sl.No</th><th>Questions</th><th>Marks</th></tr>
<tr>
<td>1</td><td>Punctuality in the Class</td><td><select name="mark1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>
</tr>
<tr>
<td>2</td><td>Regularity in taking Classes</td><td><select name="mark2"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>
</tr>
<tr>
<td>3</td><td>Completes syllabus of the course in time</td><td><select name="mark3"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>
</tr>
<tr>
<td>4</td><td>Focus on Syllabi</td><td><select name="mark4"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>
</tr>
<tr>
<td>5</td><td>Communication skills</td><td><select name="mark5"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>
</tr>
<tr>
<td>6</td><td>Refers to latest developments in the field</td><td><select name="mark6"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>
</tr>
<tr>
<td>7</td><td>Uses of innovative teaching methods</td><td><select name="mark7"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>
</tr>
<tr>
<td>8</td><td>Makes sure that he/she is being understood</td><td><select name="mark8"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>
</tr>
<tr>
<td>9</td><td>Helps student in providing study material which is not readily available in the text books say through e-resources, e-journals, reference books, open course wares etc.</td><td><select name="mark9"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>
</tr>
<tr>
<td>10</td><td>Helps students facing physical, emotional and learning challenges</td><td><select name="mark10"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>
</tr>
<tr>
<td>11</td><td>Tendency of inviting opinion and question on subject matter from students</td><td><select name="mark11"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>
</tr>
</table>

<center>
<h4><u>Comment</u></h4><textarea name="comment" rows=5 cols=100></textarea></center>
<div class="container" style="height:50px; width:300px; padding-top:2%;">
<button class="form-control alert-info"  > Submit Feedback</button>
</div>
</form>
<div class="container" style="padding-top:3%; padding-left:5%;">
<footer style="text-align:center;">
<p>Survey Developed By: Rahulkumar Singh</p>
</footer>
</div>

</body>
</html>
