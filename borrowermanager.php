<?php
session_start();
$usertype=$_SESSION['usertype'];
if($usertype!='admin'){
	header("location:index.php");
}

?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
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
background-color:#5cafff;
}
.navbar-default .navbar-nav> .active > a,
.navbar-default .navbar-nav> .active > a:hover,
.navbar-default .navbar-nav> .active > a:focus{
color:#ffcc33;
background-color:#5cafff;

}

.navbar-default .navbar-nav > .open> a{
color:#ffcc33;
background-color:#5cafff;
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
color:#D0D0D0;


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
background-color:#323232;
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

height:300px;
padding:15px;

}
.mystyle{
padding-top:0px;
}
.col-sm-12{
border:;



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
     
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="settings.php">Settings</a></li>
         
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
<li ><a href="dashboard.php" ><span class="glyphicon glyphicon-th-large"></span>&nbsp; Dashboard</a></li>
<li><a href="bookmanager.php" ><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Library Books Manager</a></li>
<li class="active"><a href="borrowermanager.php" ><span class="glyphicon glyphicon-file"></span>&nbsp; Borrower Manager</a></li>
<li><a href="booktransitmanager.php" ><span class="glyphicon glyphicon-random"></span>&nbsp; Book Transit Manager</a></li>
<li><a href="searchmanagement.php" ><span class="glyphicon glyphicon-envelope"></span>&nbsp; Send Notifications</a></li>
<li><a href="operatormanagement.php" ><span class="glyphicon glyphicon-user"></span>&nbsp; Operator Management</a></li>
</ul>
</div>
<div class="col-sm-10 main">
<div class="col-sm-12" style="padding-left:0px;background-color:white;">
<div class="col-sm-6" >
<h4 style="color:white;background-color:#40bf40;padding:10px;"><span class="glyphicon glyphicon-user"></span>&nbsp; Members | Get Started</h4>
</div>
</div>

<div class="col-sm-4">
<div class="col-sm-12 mystyle">
<h4 class="page-header"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add Members</h4>
<p>This Tab allows you to create operators to operate with the library data with a custom set privilage</p>
<a href="addmember.php"><button type="button" class="btn btn-primary" style="background-color:#40bf40;"><span class="glyphicon glyphicon-plus"></span>&nbsp; Proceed</button></a>
</div>
</div>
<div class="col-sm-4">
<div class="col-sm-12 mystyle">
<h4 class="page-header"><span class="glyphicon glyphicon-search"></span>&nbsp;Search Members</h4>
<p>This Tab allows you to create operators to operate with the library data with a custom set privilage</p>
<a href="searchmember.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>&nbsp; Proceed</button></a>
</div>
</div>
<div class="col-sm-4">
<div class="col-sm-12 mystyle">
<h4 class="page-header"><span class="glyphicon glyphicon-trash"></span>&nbsp;Delete Members</h4>
<p>This Tab allows you to create operators to operate with the library data with a custom set privilage</p>
<a href="deletestudent.php"><button type="button" class="btn btn-primary" style="background-color:#ffcc33;"><span class="glyphicon glyphicon-lock"></span>&nbsp; Proceed</button></a>
</div>
</div>

</div>
</div>
</div>

<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</BODY>
</HTML>