<?php
include('session.php');
?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>

.navbar-default{
padding:5px 0px 5px 0px;
margin-bottom:0px;

border:none;
border-radius:0px;


background-color:#2c3e50;

}
.navbar-default .navbar-nav > li > a{
color:white;
}
.navbar-default .navbar-nav > li > a:hover{
color:#ffcc33;
}
.navbar-default .navbar-nav > li > a:focus{
color:#ffcc33;
}
.navbar-default .navbar-nav > .dropdown > a .caret{

}
.navbar-default .navbar-nav > .dropdown:focus {

background-color:#2c3e50;
}
.navbar-default .navbar-nav> .active > a,
.navbar-default .navbar-nav> .active > a:hover,
.navbar-default .navbar-nav> .active > a:focus{
color:#ffcc33;

background-color:#2c3e50;

}

.navbar-default .navbar-nav > .open> a{
color:#ffcc33;

background-color:#2c3e50;
}
.navbar-default .navbar-brand{
color:white;
}
.navbar-default .navbar-brand:hover{
color:#ffcc33;
}
.no-gutter > [class*='col-'] {
    padding-right:0;
    padding-left:0;
    
}
.nav-pills > li >a{
padding:18px;
color:white;


}
.nav-pills > li > a:hover{
padding:18px;
color:white;
background-color:#787878;
color:#D0D0D0;
}
.nav-pills > .active > a ,.nav-pills > .active > a:hover {
background-color:#ffcc33;
}

.nav-pills > li{
margin:0px;
}
*{
border-radius:0 !important;
}

.col-sm-2{
height:700px;
min-height:700px;

background-color:#2c3e50;
}

.col-sm-10{
height:700px;
min-height:700px;

}
.mystyle{
box-shadow:0 4px 8px 0 grey;
padding:10px;
background-color:white;
}
.col-sm-4{

height:230px;
padding:15px;

}
.mystyle{
padding:0px;
}
.internal{
padding:10px;
padding-top:25px;
padding-bottom:25px;

}
.col-sm-12{




}
.main{
background-color:#F5F5F5;
}

.btn{
background-color:#3399ff;
border:none;
}

</style>
</HEAD>
<BODY>

<nav class="navbar navbar-default mynavbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Library Management System </a>
    </div>
    <ul class="nav navbar-nav hidden-tablet">
      <li><a href="#"><span class="glyphicon glyphicon-refresh"></span></a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Edit Profile</a></li>
          <li><a href="#">Settings</a></li>
         
        </ul>
      </li>
      <li><a href="signout.php">Sign out</a></li>
      
    </ul>
  </div>
</nav>

<div class="container-fluid fill">
<div class="row no-gutter ">
<div class="col-sm-2 lefnav" >
<ul class="nav nav-pills nav-stacked">
<li class="active"><a href="dashboard.php" ><span class="glyphicon glyphicon-th-large"></span>&nbsp; Dashboard</a></li>
<li><a href="bookmanager.php" ><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Library Books Manager</a></li>
<li><a href="borrowermanager.php" ><span class="glyphicon glyphicon-file"></span>&nbsp; Borrower Manager</a></li>
<li><a href="booktransitmanager.php" ><span class="glyphicon glyphicon-random"></span>&nbsp; Book Transit Manager</a></li>
<li><a href="searchmanagement.php" ><span class="glyphicon glyphicon-search"></span>&nbsp; Search Terminal</a></li>
<li><a href="operatormanagement.php" ><span class="glyphicon glyphicon-user"></span>&nbsp; Operator Management</a></li>

</ul>
</div>
<div class="col-sm-10 main">

<div class="col-sm-4">
<div class="col-sm-12 mystyle">
<div class="col-sm-12" style="background-color:#40bf40;color:white;">
<h3><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Library Books Manager</h3>
</div>
<div class="col-sm-12 internal" style="">
<p>This Tab allows you to create operators to operate with the library data with a custom set privilage</p>
<a href="bookmanager.php"><button type="button" class="btn btn-primary" style="background-color:#40bf40;"> Get Started</button></a>
<button class="btn" style="background-color:white;border:none;"><span class="glyphicon glyphicon-search" ></span>&nbsp;</button>
<button class="btn" style="background-color:white;border:none;"><span class="glyphicon glyphicon-plus"></span>&nbsp;</button>
<button class="btn" style="background-color:white;border:none;"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;</button>

</div>
</div>
</div>

<div class="col-sm-4">
<div class="col-sm-12 mystyle">
<div class="col-sm-12" style="background-color:#ffcc33;color:white;">
<h3><span class="glyphicon glyphicon-file"></span>&nbsp;Borrow Manager</h3>
</div>
<div class="col-sm-12 internal" style="">
<p>This Tab allows you to create operators to operate with the library data with a custom set privilage</p>
<a href="borrowermanager.php"><button type="button" class="btn btn-primary" style="background-color:#ffcc33;"> Get Started</button></a>
<button class="btn" style="background-color:white;border:none;"><span class="glyphicon glyphicon-search" ></span>&nbsp;</button>
<button class="btn" style="background-color:white;border:none;"><span class="glyphicon glyphicon-plus"></span>&nbsp;</button>
<button class="btn" style="background-color:white;border:none;"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;</button>

</div>
</div>
</div>


<div class="col-sm-4">
<div class="col-sm-12 mystyle">
<div class="col-sm-12" style="background-color:#3399ff;color:white;">
<h3><span class="glyphicon glyphicon-list-alt" style="vertical-align:bottom;"></span>&nbsp;Book Transit Manager</h3>
</div>
<div class="col-sm-12 internal" style="">
<p>This Tab allows you to create operators to operate with the library data with a custom set privilage</p>
<a href="booktransitmanager.php"><button type="button" class="btn btn-primary" style="background-color:#3399ff;"> Get Started</button></a>
<button class="btn" style="background-color:white;border:none;"><span class="glyphicon glyphicon-search" ></span>&nbsp;</button>
<button class="btn" style="background-color:white;border:none;"><span class="glyphicon glyphicon-plus"></span>&nbsp;</button>
<button class="btn" style="background-color:white;border:none;"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;</button>
</div>
</div>
</div>
<div class="col-sm-12 newline" style="margin-top:0px;padding-top:0px;padding-bottom:0px;">
<div class="col-sm-12" style="background-color:#2c3e50;">
<div class="col-sm-12" style="text-align:center;">
<h2 style="color:white;">LMS: Analytics </h2>
<p style="color:white;">Here is a dynamic overview of the record saved in our system ,which is updated automatically when you do an updation. </p>
</div>
<div class="col-sm-4" style="text-align:center;">
<h1 style="color:#2989b9;font-size:50px;">
<?php
$servername="localhost";
$username="root";
$password="";
$database="student";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
die("Connection Failed :".$conn->connect_error);
}
else{

$sql="select * from books";
$result=$conn->query($sql);
$numberofbooks=$result->num_rows;
echo $numberofbooks;
}
?>


</h1>
<p style="color:white;">Total Books in our System</p>
</div>
<div class="col-sm-4" style="text-align:center;">
<h1 style="color:#2ecc71;font-size:50px;">
<?php
$servername="localhost";
$username="root";
$password="";
$database="student";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
die("Connection Failed :".$conn->connect_error);
}
else{

$sql="select * from members";
$result=$conn->query($sql);
$numberofbooks=$result->num_rows;
echo $numberofbooks;
}
?>



</h1>
<p style="color:white;">Total Members in our System</p>
</div>
<div class="col-sm-4" style="text-align:center;">
<h1 style="color:#f39c12;font-size:50px;">136</h1>
<p style="color:white;">Total book Issued in our System</p>
</div>
</div>

</div>

<div id="piechart" style="width: 900px; height: 500px;"></div>


</div>
</div>
</div>

<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</BODY>
</HTML>