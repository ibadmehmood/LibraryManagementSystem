<?php
include('session.php');
?>
<?php

if(isset($_GET['bookingid'])) {
    $booksid = $_GET['bookingid'];
	$booktitless=$_GET['titlebook'];
	$bookisbnss=$_GET['isbnbook'];
        $bookauthorss=$_GET['authorbook'];
    $con = new mysqli('localhost', 'root', '', 'student');
    $sql = "UPDATE books
SET booktitle='$booktitless', bookauthor='$bookauthorss',bookisbn='$bookisbnss'
WHERE id=$booksid;";
    $delete = $con->prepare($sql);
  
    $delete->execute();

    if($delete->affected_rows > 0) {
        header('test.php');
    }
}








if(isset($_GET['bookid'])) {
    $id = $_GET['bookid'];

    $con = new mysqli('localhost', 'root', '', 'student');
    $sql = "DELETE FROM books WHERE id = '$id'";
    $delete = $con->prepare($sql);
  
    $delete->execute();

    if($delete->affected_rows > 0) {
        header('deletebook.php');
    }
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
background-color:#3399ff;

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
      <li><a href="#"><span class="glyphicon glyphicon-refresh"></span></a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">About</a></li>
      
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
<div class="col-sm-12" style="padding-left:0px;background-color:white;">
<div class="col-sm-6" >
<h4 style="color:white;background-color:#40bf40;padding:10px;"><span class="glyphicon glyphicon-plus"></span>&nbsp; Books  | Delete Books</h4>
</div>
</div>
<div class="col-sm-12" style="padding-top:20px;">
<div class="col-sm-6" style="float:none;margin:0 auto;">

<?php
$bookid=$booktitle="";
if(isset($_POST['submit'])){
if(isset($_POST['id'])){
 $bookid=$_POST['id'];
}
if(isset($_POST['isbn'])){
$bookisbn=$_POST['isbn'];
}
}
$servername="localhost";
$username="root";
$password="";
$database="student";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
die("Connection Failed :".$conn->connect_error);
}

if(isset($_POST['submit'])){
$sql="delete from books where bookid='$bookid' or bookisbn='$bookisbn'";
$result=$conn->query($sql);
if(mysqli_affected_rows($conn)>0){
echo "<div class='alert alert-success'><a href='' class='close' data-dismiss='alert'>&times;</a><strong>Success!</strong> Record has been Deleted !</div>";
}
else{
echo "<div class='alert alert-danger'><a href='' class='close' data-dismiss='alert'>&times;</a><strong>Failure!</strong> No Record Found !</div>";
}

}


?>
</div>
</div>


<div class="col-sm-12" style="padding-top:20px;">


<form method="post" action="">

<div class="col-sm-6">
<div class="form-group">
<label>Book ID</label>
<input type="text" class="form-control" placeholder="Book ID" name="id">
</div>

</div>

<div class="col-sm-6">
<div class="form-group">
<label>ISBN</label>
<input type="text" class="form-control" placeholder="ISBN" name="isbn">
</div>
</div>
<input type="submit" name="submit" class="btn btn-success" style="background-color:#40bf40;" value="Delete Book">
<a href="bookmanager.php"><button type="button" class="btn btn-warning" style="background-color:#ffcc33;"> Cancel</button></a>
</form>

</div>
<div class="col-sm-12" style="padding-top:20px;">
<?php
$bookid=$bookisbn="";
if(isset($_POST['submit'])){
if(isset($_POST['id'])){
 $bookid=$_POST['id'];
}
if(isset($_POST['isbn'])){
$bookisbn=$_POST['isbn'];
}
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

$sql="select * from books";
$result=$conn->query($sql);
echo "<table class='table table-bordered'><tr><thead><th>Book ID</th><th>Book Title</th><th>Book Author</th><th>Book ISBN</th><th>Edit/Delete</th></tr></thead><tbody>";
if($result->num_rows>0){

while($row=$result->fetch_assoc()){
	
 echo "<tr><td>".$row["bookid"]."</td><td>".$row["booktitle"]."</td><td>".$row["bookauthor"]."</td><td>".$row["bookisbn"]."</td><td align='center'><a class='btn btn-danger' href ='deletebook.php?bookid=".$row["id"]." '>
          <span class='glyphicon glyphicon-trash'></span> Trash 
        </a> "."<a  class='btn btn-warning'  data-toggle='modal' data-target='#edit-".$row["bookid"]."'>
          <span class='glyphicon glyphicon-edit'></span> Edit
        </a>         
<!-- Modal -->
  <div class='modal fade' id='edit-".$row["bookid"]."' role='dialog'>
    <div class='modal-dialog'>
    
      <!-- Modal content-->
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>Edit Information </h4>
        </div>
        <div class='modal-body'>
	<form method='post' action=''>

<div class='col-sm-6'>
<div class='form-group'>
<label>Book ISBN</label>
<input type='text' class='form-control' value='".$row["bookisbn"]."' name='isbns' id='isbns-".$row["id"]."'>
</div>

</div>
<div class='col-sm-6'>
<div class='form-group'>
<label>Book Author</label>
<input type='text' class='form-control' value='".$row["bookauthor"]."' name='authors' id='authors-".$row["id"]."'>
</div>

</div>

<div class='col-sm-12'>
<div class='form-group'>
<label>Book Title</label>
<input type='text' class='form-control' value='".$row["booktitle"]."' name='booktitles' id='titles-".$row["id"]."'>
</div>

</div>


<input type='submit' name='editsubmit' onclick='update(".$row["id"].");'class='btn btn-success' style='background-color:#40bf40;' value='Edit'>
          <button type='button'  class='btn btn-warning' style='background-color:#ffcc33;' data-dismiss='modal'>Close</button>
</form>
		
         
        </div>
       
	
        
		 
      </div>
     
    </div>
  </div>












		</td></tr>";

}
echo "</tbody></table>";

}

else{
echo "<tr><td>"." "."</td><td>"." "."</td><td>"." "."</td><td>"." "."</td></tr></tbody></table>";


}
}

?>
</div>



</div>

</div>
</div>
</div>
<script>
function update(str){
	var isbn="isbns-"+str;
	var title="titles-"+str;
	var author="authors-"+str;
	var isbns=document.getElementById(isbn).value;
	var titles=document.getElementById(title).value;
	var authors=document.getElementById(author).value;
	
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
        xmlhttp.open("GET", "test.php?bookingid=" + str+"&isbnbook="+isbns+"&titlebook="+titles+"&authorbook="+authors, true);
        xmlhttp.send();
    }
	
	
	
	
}
</script>

<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</BODY>
</HTML>