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
<li class="active"><a href="dashboard.php" ><span class="glyphicon glyphicon-th-large"></span>&nbsp; Dashboard</a></li>
<li><a href="bookmanager.php" ><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Library Books Manager</a></li>
<li><a href="borrowermanager.php" ><span class="glyphicon glyphicon-file"></span>&nbsp; Borrower Manager</a></li>
<li><a href="booktransitmanager.php" ><span class="glyphicon glyphicon-random"></span>&nbsp; Book Transit Manager</a></li>
<li><a href="searchmanagement.php" ><span class="glyphicon glyphicon-envelope"></span>&nbsp; Send Notifications</a></li>
<li><a href="operatormanagement.php" ><span class="glyphicon glyphicon-user"></span>&nbsp; Operator Management</a></li>

</ul>
</div>
<div class="col-sm-10 main">
<div class="col-sm-12" style="padding-left:0px;background-color:white;">
<div class="col-sm-6" >
<h4 style="color:white;background-color:#40bf40;padding:10px;"><span class="glyphicon glyphicon-plus"></span>&nbsp; Members | Search Members</h4>
</div>
</div>



<div class="col-sm-12" style="padding-top:20px;">


<form method="post" action="searchmember.php">

<div class="col-sm-6">
<div class="form-group">
<label>Student ID</label>
<input type="text" class="form-control" placeholder="Student ID" name="id" onkeyup="test(this.value)">
</div>
<div class="form-group">
<label>Student Name</label>
<input type="text" class="form-control" placeholder="Student Name" name="studentname">

</div>
</div>

<div class="col-sm-6">
<div class="form-group">

<label>Father Name</label>
<input type="text" class="form-control" placeholder="Father Name" name="fname" >

</div>
<div class="form-group">
<label>Department</label>
<input type="text" class="form-control" placeholder="Department" name="department">
</div>
</div>
<input type="submit" name="submit" class="btn btn-success" style="background-color:#40bf40;" value="Search Member">
<a href="borrowermanager.php"><button type="button" class="btn btn-warning" style="background-color:#ffcc33;"> Cancel</button></a>
</form>

</div>
<div class="col-sm-12" style="padding-top:20px;" id="txtHint">
<?php
$studentid=$studentname=$fathername=$department="";
if(isset($_POST['submit'])){
if(isset($_POST['id'])){
 $studentid=$_POST['id'];
}
if(isset($_POST['studentname'])){
$studentname=$_POST['studentname'];
}
if(isset($_POST['fname'])){
$fathername=$_POST['fname'];

}
if(isset($_POST['department'])){
$department=$_POST['department'];
}

$servername="localhost";
$username="root";
$password="";
$database="student";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
die("Connection Failed :".$conn->connect_error);
}
else{

$sql="select * from members where studentid='$studentid' OR studentname='$studentname' OR department='$department' OR fathername='$fathername'";
$result=$conn->query($sql);
$numrows=$result->num_rows;

if($numrows>0){
echo "<table class='table table-bordered'><tr><thead><th>Student ID</th><th>Student Name</th><th>Father Name</th><th>Department</th></tr></thead><tbody>";
while($row=$result->fetch_assoc()){
 echo "<tr><td>".$row["studentid"]."</td><td>".$row["studentname"]."</td><td>".$row["fathername"]."</td><td>".$row["department"]."</td></tr>";

}
echo "</tbody></table>";

}

else{
echo "<div class='alert alert-warning'><a href='' class='close' data-dismiss='alert'>&times;</a><strong>Failure!</strong> Record do not Exists!</div>";


}
}
}
?>
</div>
</div>

</div>
</div>
</div>
<script>
function test(str){
	if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "liststudent.php?studentid=" + str, true);
        xmlhttp.send();
    }
	
	
	
	
}
</script>
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</BODY>
</HTML>