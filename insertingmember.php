<?php
$studentid=$_POST['id'];
$studentname=$_POST['studentname'];
$fathername=$_POST['fname'];
$department=$_POST['department'];

$servername="localhost";
$username="root";
$password="";
$database="student";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
die("Connection Failed :".$conn->connect_error);
}
else{

$sqlk="select * from members where id='$studentid'";
$result=$conn->query($sqlk);
if($result->num_rows>0){
echo "Record already Exists";
header("location:addmember.php");

}
else{

$sql="insert into members values('$studentid','$studentname','$fathername','$department')";

if($conn->query($sql)===true){
header("location:addmember.php");

}
else{
echo "Record Not Inserted";
header("location:addmember.php");
}
}
}

?>