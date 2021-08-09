<?php
session_start();
if($_SESSION['logged_in']!=true)
{
header("location: accessdb.php");
die;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIT | Database CRUD</title>
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
<li class="active"><a href="logout_accessdb.php"  >Logout</a></li>
</ul>
</div>
</nav>
<hr /><hr />
</div>
<br />
<?php
if(!empty($_SESSION['message_success']))
{
$msg=$_SESSION['message_success'];
echo "<center><b class=alert-success><h4> Success:</b><b class=alert-info>".$msg."</b></h4></center><br>";
}
?>
<div class="container" style="height:300px; width:500px;">
<h3><p class="bg-success" style="text-align:center">Welcome!!</p></h3>
<b><p>Please specify the table you would like to access...</p></b>
<form method="post" action=<?php echo $_SERVER["PHP_SELF"]?>>
<input type="radio" name="table" value=1>Student_Master<br />
<input type="radio" name="table" value=2>Subject_Master<br />
<input type="radio" name="table" value=3>Admin_Password<br />
<input type="radio" name="table" value=4>Department_Password<br />
<button type="submit" class="form-control alert-info">Access</button>
</form>
<?php
$table=0;
if(isset($_POST["table"]))
{
$table=$_POST["table"];
$dbname="feed_back";
$host="localhost";
$user="root";
$pwd="";
echo "<center><h3>Connecting to the Database!! Please wait!!</h3></center>";
$con=mysqli_connect($host,$user,$pwd,$dbname);
if($con==false)
{
die("<center><b>Error:: Couldn't connect to the database!!!</b></center>");
}
else echo "<center><b>Connected successfully with Feed_back database!!<br />Ready to access!!</b></center>";
}
switch($table)
{
case 1:?><br />
Which operation would like to perform in Student_Master table??<br />
<input type="radio" onchange="window.location.replace('insert_stud_mas.php')"/>Insert<br />
<input type="radio" onchange="window.location.replace('update_stud_mas.php')"/>Update<br />
<input type="radio" onchange="window.location.replace('delete_stud_mas.php')"/>Delete<br />
</div><?php
break;
case 2:?>
Which operation would like to perform in Subject_Master table??<br />
<input type="radio" onchange="window.location.replace('insert_sub_mas.php')"/>Insert<br />
<input type="radio" onchange="window.location.replace('update_sub_mas.php')"/>Update<br />
<input type="radio" onchange="window.location.replace('delete_sub_mas.php')"/>Delete<br />
<?php
break;
case 3:?>
Which operation would like to perform in Admin_Password table??<br />
<input type="radio" onchange="window.location.replace('insert_admin.php')"/>Insert<br />
<input type="radio" onchange="window.location.replace('update_admin.php')"/>Update<br />
<input type="radio" onchange="window.location.replace('delete_admin.php')"/>Delete<br />
<?php
break;
case 4:?>
Which operation would like to perform in Department_Password table??<br />
<input type="radio" onchange="window.location.replace('insert_dept.php')"/>Insert<br />
<input type="radio" onchange="window.location.replace('update_dept.php')"/>Update<br />
<input type="radio" onchange="window.location.replace('delete_dept.php')"/>Delete<br />
<?php
}//switch(table)

?>
</div>

<div class="container" style="border-bottom-style:ridge; padding-bottom:10%">
<footer style="text-align:center">
<p style="padding-bottom:10px;">Survey Developed By: Rahulkumar Singh</p>
</footer>
</div>
</body>
</html>

