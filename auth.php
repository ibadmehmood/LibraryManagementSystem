<?php 
session_start();
$email=$_POST['email'];
$pass=$_POST['password'];
$servername="localhost";
$username="root";
$password="";
$database="student";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
die("Connection Failed :".$conn->connect_error);
}
else{

$sql="select * from user where email='$email' and password='$pass'";
$result=$conn->query($sql);
if($result->num_rows==1){
$_SESSION['usertype']='admin';
$_SESSION['username']=$email;
header("location:dashboard.php");

}
else{
	$sqll="select * from members where username='$email' and password='$pass'";
	$result1=$conn->query($sqll);
	if($result1->num_rows==1){
$_SESSION['usertype']='user';
$_SESSION['username']=$email;
header("location:userview.php");

}
else{
	
echo "Invalid Email and Password";
header("location:index.php");
}
}
}

?>
