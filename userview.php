<?php
session_start();
$usertype=$_SESSION['usertype'];
if($usertype!='user'){
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
color:#D0D0D0;


}
.nav-pills > li > a:hover{
padding:18px;
color:white;
background-color:#787878;
color:#D0D0D0;
}
.nav-pills > .active {
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

height:300px;
padding:15px;

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
      
      <li><a href="signout.php">Sign out</a></li>
      
    </ul>
  </div>
</nav>

<div class="container-fluid fill">
<div class="row no-gutter ">
<div class="col-sm-2 lefnav" >
<ul class="nav nav-pills nav-stacked">
<li class="active" ><a href="userview.php"  ><span class="glyphicon glyphicon-th-large"></span>&nbsp; Welcome</a></li>
<li ><a href="editprofiles.php" ><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Edit Profile</a></li>
<li><a href="bookstudent.php" ><span class="glyphicon glyphicon-file"></span>&nbsp; Books Borrowed</a></li>
<li><a href="booksavailable.php" ><span class="glyphicon glyphicon-random"></span>&nbsp; Books </a></li>


</ul>
</div>
<div class="col-sm-10 main">
<div class="col-sm-12" style="padding-left:0px;background-color:white;">
<div class="col-sm-6" >
<h4 style="color:white;background-color:#40bf40;padding:10px;"><span class="glyphicon glyphicon-plus"></span>&nbsp; Welcome | UserView</h4>
</div>
</div>

<div class="col-sm-12" style="padding-top:60px;">
<div class="col-sm-12 text-center" style="float:none;margin:0 auto;">
<?php
$name="";
$usernames=$_SESSION['username'];
$servername="localhost";
$username="root";
$password="";
$database="student";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
die("Connection Failed :".$conn->connect_error);
}
else{

$sql="select * from members where username='$usernames'";
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
$name=$row['studentname'];
}


}



?>




<h1 style='font-size:60px;'> Welcome ,<?php echo $name;?></h1>
</div>
</div>







<div class="col-sm-12" style="padding-top:20px;">


</div>
</div>

</div>
</div>
</div>

<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</BODY>
</HTML>