<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=0, shrink-to-fit=no" />
<title>SIT | Feedback Database</title>
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
<script>
function backward()
{
window.history.back();
}

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
<li class="active"><a href="logout_view.php"  >Logout</a></li>
</ul>
</div>
</nav>
<hr /><hr />
</div>


<?php
session_start();
require 'dbconnect.php';
$term1=$_POST['term'];
$_SESSION['term_view']=$term1;
$regno=$_POST['reg'];
$_SESSION['regno_view']=$regno;

$con=$_SESSION['con'];
$qry1="select * from feedback where Regno='$regno' AND Term='$term1'";
$qry2="SELECT * FROM stud_mas WHERE Regno='$regno'";
$res1=mysqli_query($con,$qry1);
$res2 = mysqli_query($con,$qry2);
while ($row2=$res2->fetch_assoc()) {
$regno_mas=$row2['Regno'];
$name_mas=$row2['Name'];
}
$codeArr=array();
$term=array();
$course=array();
$teacher=array();
$m1=array();
$m2=array();
$m3=array();
$m4=array();
$m5=array();
$m6=array();
$m7=array();
$m8=array();
$m9=array();
$m10=array();
$m11=array();
$comment=array();
while ($row1=$res1->fetch_assoc()) {
array_push($codeArr, $row1["Subcode"]);
array_push($term, $row1["Term"]);
array_push($m1,$row1['Q1']);
array_push($m2,$row1['Q2']);
array_push($m3,$row1['Q3']);
array_push($m4,$row1['Q4']);
array_push($m5,$row1['Q5']);
array_push($m6,$row1['Q6']);
array_push($m7,$row1['Q7']);
array_push($m8,$row1['Q8']);
array_push($m9,$row1['Q9']);
array_push($m10,$row1['Q10']);
array_push($m11,$row1['Q11']);
array_push($comment,$row1['Comments']);
}
$dept=$_POST['dept'];
$qry3="SELECT * FROM sub_mas WHERE Dept='$dept' AND Term='$term1'";
$res3 = mysqli_query($con,$qry3);	
while ($row3=$res3->fetch_assoc()) {
array_push($course, $row3["Course"]);
array_push($teacher, $row3["Teacher"]);
}
?>
<table>
<tr><th>Term</th><th>Regno</th><th>Name</th></tr>
<tr><td><?php echo @ $term[0]?></td><td><?php echo $regno_mas?></td><td><?php echo $name_mas?></td></tr>
</table>
<br />
<br />
<br />

<?php
if($res1->num_rows==0)	
{
?>
<center><h3 class="alert-danger">Error</h3><h4 class="alert-warning">There is no feedback data given by the particular student being selected!!</h4></center>
<?php
}
if($res1->num_rows==1)
{
?>
<table>
<tr><th>Subject Code</th><th>Course Name</th><th>Teacher</th><th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th><th>Q5</th><th>Q6</th><th>Q7</th><th>Q8</th><th>Q9</th><th>Q10</th><th>Q11</th><th>Comments</th></tr>
<tr><td><?php echo $codeArr[0]?></td><td><?php echo $course[0]?></td><td><?php echo $teacher[0]?></td><td><?php echo $m1[0]?></td><td><?php echo $m2[0]?></td><td><?php echo $m3[0]?></td><td><?php echo $m4[0]?></td><td><?php echo $m5[0]?></td><td><?php echo $m6[0]?></td><td><?php echo $m7[0]?></td><td><?php echo $m8[0]?></td><td><?php echo $m9[0]?></td><td><?php echo $m10[0]?></td><td><?php echo $m11[0]?></td><td><?php echo $comment[0]?></td></tr>
</table>
<br />
<br />

<center><div style="width:200px; height:200px;">
<button onclick="backward()" class="form-control alert-success">Return</button>
</div></center>



<?php
}
if($res1->num_rows==2)
{
?>
<table>
<tr><th>Subject Code</th><th>Course Name</th><th>Teacher</th><th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th><th>Q5</th><th>Q6</th><th>Q7</th><th>Q8</th><th>Q9</th><th>Q10</th><th>Q11</th><th>Comments</th></tr>
<tr><td><?php echo $codeArr[0]?></td><td><?php echo $course[0]?></td><td><?php echo $teacher[0]?></td><td><?php echo $m1[0]?></td><td><?php echo $m2[0]?></td><td><?php echo $m3[0]?></td><td><?php echo $m4[0]?></td><td><?php echo $m5[0]?></td><td><?php echo $m6[0]?></td><td><?php echo $m7[0]?></td><td><?php echo $m8[0]?></td><td><?php echo $m9[0]?></td><td><?php echo $m10[0]?></td><td><?php echo $m11[0]?></td><td><?php echo $comment[0]?></td></tr>


<tr><td><?php echo $codeArr[1]?></td><td><?php echo $course[1]?></td><td><?php echo $teacher[1]?></td><td><?php echo $m1[1]?></td><td><?php echo $m2[1]?></td><td><?php echo $m3[1]?></td><td><?php echo $m4[1]?></td><td><?php echo $m5[1]?></td><td><?php echo $m6[1]?></td><td><?php echo $m7[1]?></td><td><?php echo $m8[1]?></td><td><?php echo $m9[1]?></td><td><?php echo $m10[1]?></td><td><?php echo $m11[1]?></td><td><?php echo $comment[1]?></td></tr>
</table>
<br />
<br />

<center><div style="width:200px; height:200px;">
<button onclick="backward()" class="form-control alert-success">Return</button>
</div></center>


<?php
}
if($res1->num_rows==3)
{
?>

<table>
<tr><th>Subject Code</th><th>Course Name</th><th>Teacher</th><th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th><th>Q5</th><th>Q6</th><th>Q7</th><th>Q8</th><th>Q9</th><th>Q10</th><th>Q11</th><th>Comments</th></tr>
<tr><td><?php echo $codeArr[0]?></td><td><?php echo $course[0]?></td><td><?php echo $teacher[0]?></td><td><?php echo $m1[0]?></td><td><?php echo $m2[0]?></td><td><?php echo $m3[0]?></td><td><?php echo $m4[0]?></td><td><?php echo $m5[0]?></td><td><?php echo $m6[0]?></td><td><?php echo $m7[0]?></td><td><?php echo $m8[0]?></td><td><?php echo $m9[0]?></td><td><?php echo $m10[0]?></td><td><?php echo $m11[0]?></td><td><?php echo $comment[0]?></td></tr>


<tr><td><?php echo $codeArr[1]?></td><td><?php echo $course[1]?></td><td><?php echo $teacher[1]?></td><td><?php echo $m1[1]?></td><td><?php echo $m2[1]?></td><td><?php echo $m3[1]?></td><td><?php echo $m4[1]?></td><td><?php echo $m5[1]?></td><td><?php echo $m6[1]?></td><td><?php echo $m7[1]?></td><td><?php echo $m8[1]?></td><td><?php echo $m9[1]?></td><td><?php echo $m10[1]?></td><td><?php echo $m11[1]?></td><td><?php echo $comment[1]?></td></tr>

<tr><td><?php echo $codeArr[2]?></td><td><?php echo $course[2]?></td><td><?php echo $teacher[2]?></td><td><?php echo $m1[2]?></td><td><?php echo $m2[2]?></td><td><?php echo $m3[2]?></td><td><?php echo $m4[2]?></td><td><?php echo $m5[2]?></td><td><?php echo $m6[2]?></td><td><?php echo $m7[2]?></td><td><?php echo $m8[2]?></td><td><?php echo $m9[2]?></td><td><?php echo $m10[2]?></td><td><?php echo $m11[2]?></td><td><?php echo $comment[2]?></td></tr>
</table>
<br />
<br />

<center><div style="width:200px; height:200px;">
<button onclick="backward()" class="form-control alert-success">Return</button>
</div></center>
<?php
}
if($res1->num_rows==4)
{
?>
<table>
<tr><th>Subject Code</th><th>Course Name</th><th>Teacher</th><th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th><th>Q5</th><th>Q6</th><th>Q7</th><th>Q8</th><th>Q9</th><th>Q10</th><th>Q11</th><th>Comments</th></tr>
<tr><td><?php echo $codeArr[0]?></td><td><?php echo $course[0]?></td><td><?php echo $teacher[0]?></td><td><?php echo $m1[0]?></td><td><?php echo $m2[0]?></td><td><?php echo $m3[0]?></td><td><?php echo $m4[0]?></td><td><?php echo $m5[0]?></td><td><?php echo $m6[0]?></td><td><?php echo $m7[0]?></td><td><?php echo $m8[0]?></td><td><?php echo $m9[0]?></td><td><?php echo $m10[0]?></td><td><?php echo $m11[0]?></td><td><?php echo $comment[0]?></td></tr>


<tr><td><?php echo $codeArr[1]?></td><td><?php echo $course[1]?></td><td><?php echo $teacher[1]?></td><td><?php echo $m1[1]?></td><td><?php echo $m2[1]?></td><td><?php echo $m3[1]?></td><td><?php echo $m4[1]?></td><td><?php echo $m5[1]?></td><td><?php echo $m6[1]?></td><td><?php echo $m7[1]?></td><td><?php echo $m8[1]?></td><td><?php echo $m9[1]?></td><td><?php echo $m10[1]?></td><td><?php echo $m11[1]?></td><td><?php echo $comment[1]?></td></tr>

<tr><td><?php echo $codeArr[2]?></td><td><?php echo $course[2]?></td><td><?php echo $teacher[2]?></td><td><?php echo $m1[2]?></td><td><?php echo $m2[2]?></td><td><?php echo $m3[2]?></td><td><?php echo $m4[2]?></td><td><?php echo $m5[2]?></td><td><?php echo $m6[2]?></td><td><?php echo $m7[2]?></td><td><?php echo $m8[2]?></td><td><?php echo $m9[2]?></td><td><?php echo $m10[2]?></td><td><?php echo $m11[2]?></td><td><?php echo $comment[2]?></td></tr>

<tr><td><?php echo $codeArr[3]?></td><td><?php echo $course[3]?></td><td><?php echo $teacher[3]?></td><td><?php echo $m1[3]?></td><td><?php echo $m2[3]?></td><td><?php echo $m3[3]?></td><td><?php echo $m4[3]?></td><td><?php echo $m5[3]?></td><td><?php echo $m6[3]?></td><td><?php echo $m7[3]?></td><td><?php echo $m8[3]?></td><td><?php echo $m9[3]?></td><td><?php echo $m10[3]?></td><td><?php echo $m11[3]?></td><td><?php echo $comment[3]?></td></tr>
</table>
<br />
<br />

<center><div style="width:200px; height:200px;">
<button onclick="backward()" class="form-control alert-success">Return</button>
</div></center>
<?php
}
?>

</form>



<footer style="text-align:center">
<p style="padding-bottom:10px;">Survey Developed By: Rahulkumar Singh</p>
</footer>
</div>

</body>
</html>
