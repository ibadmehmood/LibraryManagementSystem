<?php
session_start();
if($_SESSION['usertype']=='admin'){
header("location:dashboard.php");
}
elseif($_SESSION['usertype']=='user'){
	header("location:userview.php");
}
else{
		header("location:index.php");

}
?>