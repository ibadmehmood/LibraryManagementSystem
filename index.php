<?php
session_start();


if(isset($_SESSION['usertype'])){
	$usertype=$_SESSION['usertype'];
if($usertype=='admin'){
	header("location:dashboard.php");
}
if($usertype=='user'){
	header("location:userview.php");
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

.form-control{
border-radius:0px;
border-color:#d2d6de;
box-shadow:none;
}
.form-control:focus{
border-radius:0px;
border-color:#d2d6de;
box-shadow:none;
}

.col-centered{
float: none;
margin: 0 auto;

}
.con{
padding-top:60px;
margin-bottom:20px;
}

</style>
</HEAD>
<BODY class="bg-danger">
<div class="container-fluid con">
<div class="row">
<div class="col-md-6 col-centered text-center">
<h3>LMS By KhogyaniSoft</h3>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-sm-4 col-centered" style="background-color:white;padding-top:20px;padding-bottom:20px;">
<div class="login-container">

<form method="post" action="auth.php">
<div class="form-group text-center">
<p>Sign in to start your session</p>
</div>
<div class="form-group has-feedback">
<input type="text" name="email" class="form-control" placeholder="Email">
<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
<input type="password" name="password" class="form-control" placeholder="Password">
<span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="form-group">
<input type="submit" name="" class="form-control btn btn-primary" value="Sign in">
</div>
</form>
</div>
</div>
</div>
</div>

<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</BODY>
</HTML>