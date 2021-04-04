<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="theme-color" content="#26a69a">
    <meta name="apple-mobile-web-app-status-bar-style" content="#26a69a">
    <meta name="msapplication-navbutton-color" content="#26a69a">
    <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-database.js"></script>
 

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

     <!-- Bootstrap Core Css -->
     <!--<link href="/stylesheets/bootstrap.min.css" rel="stylesheet" type = "text/css">-->

     <!-- Waves Effect Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">


 
  <style>
  
  
    
  
    #logo-container{height:57px;margin-bottom:32px}
    #logo-container:hover{background-color:transparent}
    front-page-logo{display:inline-block;height:100%;pointer-events:none}
    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    }

  </style>

</head>
<body style="background-color:#f3f3f3">
<!-- Dropdown Structure -->
<header>
<nav >
    <div class="nav-wrapper  cyan" >
      <div class="container">

     
        <a href="#!" class="brand-logo" style="padding-left:10px;" >{ APPLICA }</a>
      </div>
      </div>
</nav>
</header>
<main >
 <div class"">

 </div>
 <div class="row" >
    
       </div>
<div class="row">
<div class="container valign-wrapper">
    

  <div class="col s12 m6 offset-m3">

   <div class="card-panel ">
       <div class="">
      <div class="" style="text-align:center;">
             <img class="responsive-img" src="login.jpg" height="200px">
      </div>
    <div class="input-field ">
        <input id="email" type="email" value="">
        <label for="email">Email</label>
  
</div>
  
    <div class="input-field ">
        <input id="password" type="password" value="">
        <label for="password">Password</label>
      
  </div>
  <p>
      <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span>Remember Me</span>
      </label>
    </p>
  <div class="">
  <button class="btn waves-effect waves-light cyan" type="submit" name="action" onclick="signUser()">Login
      
    </button>
      </div>
    
    
  </div>
</div>

</div>
</div>
</div>

</main>

<footer>

   
</footer>
 
    <!-- Jquery Core Js -->   

<script src="/javascripts/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
<!--<script src="/javascripts/bootstrap.min.js"></script>-->
<script src="/javascripts/materialize.min.js"></script>
<script>
  $( document ).ready(function(){
    $(".button-collapse").sideNav();
  });

  $('.button-collapse').sideNav({
      menuWidth: 250, 
      edge: 'left',
      closeOnClick: true, 
      draggable: true,
      onOpen: function(el) { /* Do Stuff   */ }, 
      onClose: function(el) { /* Do Stuff  */ }, 
    }
  );
  
</script>
   




<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  </body>
</html>
            