<?php
ini_set( "display_errors", 0); 
    require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahara | Home Page</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500&display=swap" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<style>
  html, body {
    margin: 0;
    padding: 0;
    
    height:100%;
  max-width: 100%;
  overflow-x: hidden;
  background-image: url("website.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  }
  
  .nav-style{
  list-style-type: none !important;
  
  background-color:#ffffff;
  padding: 10px 30px 10px 30px !important;
  
  margin-right: 0px;
  margin-left:1400px;
  font-family: 'Raleway';
  font-size: 18px;
  letter-spacing: 1px;
}

.dropdown-item{
  padding: 0px 10px;
    font-size: 18px;
}
.dropdown-menu{
  padding: 15px;
  width: 250px;
  border-radius: 10px;
  box-shadow: 0 2px 21px 6px rgb(147 147 147 / 8%);
  background: #fff;
}
.heromodule{
    /* background: linear-gradient(180deg, rgba(181,237,251,1) 0%, rgba(251,255,252,1) 39%, rgba(255,249,194,1) 100%); */
    position: absolute;
    margin-left: 350px;
}
.aligntext{
    text-align: center;
}
.hero-text{
  font-family: 'Raleway';
  color: #2c5e8a;
  font-weight: 600;
  text-transform: capitalize;
  padding: 20px 0 0;
  font-size: 55px;
  text-align: left;
  line-height: 1.2;
}
.hero-subtext{
  font-family: 'Noto Sans JP', sans-serif;
  font-size: 20px;
  text-align: left;
  color: #6a6a77;
}
.visit-text{
  font-family: 'Noto Sans JP', sans-serif;
  font-size: 22px;
  text-align: left;
  color: #6a6a77;
  padding-top: 10px;
}
.visit-head{
  font-size: 40px;
  font-weight: 500;
  color: #3c6890;
}
.register-btn{
  font-size: 26px;
  padding: 10px;
  margin: 10px 0;
  margin-right: 5px;
  background-color: #ffce1e;
  border-color: #ffce1e;
  font-weight: 600;
  width: 30%;
}
  
  
@media only screen and (max-width: 1024px){
    html, body {
    margin: 0;
    padding: 0;
    
    height:100%;
  width: 100%;
  overflow-x: hidden;
  background-image: url("websiteresize.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  
}
.heromodule{
 margin-left: 200px;
}
.nav-style{
  list-style-type: none !important;
  
  background-color:rgba(0,0,0,0);
  padding: 10px 30px 10px 30px !important;
  
  
  margin-right: 50px;
  margin-left: 900px;
  font-family: 'Raleway';
  font-size: 18px;
  letter-spacing: 1px;
}


  
  }
@media only screen and (max-width: 768px){
  html, body {
    margin: 0;
    padding: 0;
    
    height:100%;
  max-width: 100%;
  overflow-x: hidden;
  background-image: url("websiteipad.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.heromodule{
 margin-left: 10px;
 margin-top: 140px;
 
 align: center;
}
  .nav-style{
  list-style-type: none !important;
  
  background-color:rgba(0,0,0,0);
  padding: 10px 30px 10px 30px !important;
  
  
  margin-right: 50px;
  margin-left: 625px;
  font-family: 'Raleway';
  font-size: 18px;
  letter-spacing: 1px;
}
.navbar-brand{
 
}
}

      
</style>
</head>
<body>

    
  <nav  nav-style>
        <a class="navbar-brand" href="indexmain1.php">
            <img src="SaharaLogo.png" alt="sahara-logo" style="width: 50%;">
        </a>
      
        
        
        <li class="nav-item  nav-style"  style="padding: 0 25px; list-style-type: none !important; width:10%;  margin-top:15px;">
          
          <a class="btn btn-primary" href="commonlogin.php " style="margin-left:10px; ">Login</a>
          
          
        </li>

        
       <!------------------------------------------------------------------------------------------------------->

<!------------------------------------------------------------------------------------------------------>

      <!-- ---------------------------------------- -->
      <div class=" heromodule" >

        <div class="container" style="margin-right: 0px;padding: 0;">
          <div style="padding-top: 30px;">
            <h1 class="aligntext hero-text">Meet Sahara, <br/> <span style="font-size: 45px; color: #6598c5;">your personalised health assistant.</span></h1>
            <!-- <p class="aligntext hero-subtext">(Systematic Analysis of Health-vitals in an Automated Real-time Atmosphere)</p> -->
          </div>
          <div class="row" style="position: relative;">
            <div class="col-md-6" style="margin-top: 5%;"> 
              <!-- <img src="imgs/Hands - Pinches.png" style="position: absolute; left: 140%;bottom: 95%; width: 55%;"/> -->
              <h2 class="visit-head">Help people from the comforts of your house</h2>
              <p class="visit-text">New user? Register today</p>
              <button class="btn btn-warning btn-lg register-btn"><a href="registerdocnew.php" style="color: #fff; text-decoration: none;">Doctor</a></button>
              <button class="btn btn-warning btn-lg register-btn"><a href="registercarenew.php" style="color: #fff; text-decoration: none;">Caretaker</a></button>
              <button class="btn btn-warning btn-lg register-btn"><a href="registerpatientmain.php" style="color: #fff; text-decoration: none;">Patient</a></button>
            </div>
            
          </div>
          <!-- <img src="imgs/Humaaans - Space.png" style="width: 15%;    position: relative;right: 11%;"/> -->
        </div>
      </div>
</body>
</html>
