<?php
error_reporting(0);
include("dbconnection.php");
date_default_timezone_set("asia/kathmandu");
$dt = date("Y-m-d");
$tim = date("H:i:sa");
?>
<div id="clock"> </div>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" />
<!-- Document Title -->
<title>Hospital Management System</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">


<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- StyleSheets -->
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">

<!-- Fonts Online -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">

<!-- JavaScripts -->
<script src="js/vendors/modernizr.js"></script>

<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>

<!-- Page Loader -->
<div id="loader">
  <div class="position-center-center">
    <div class="cssload-thecube">
      <div class="cssload-cube cssload-c1"></div>
      <div class="cssload-cube cssload-c2"></div>
      <div class="cssload-cube cssload-c4"></div>
      <div class="cssload-cube cssload-c3"></div>
    </div>
  </div>
</div>


  
  <!-- Header -->
  <header class="header-style-2">
    <div class="container">
      <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="" style="height: 51px;"></a> </div>
      <div class="head-info">
        <ul>
          <li> <i class="fa fa-phone"></i>
            <p>9862297301<br>
          </li>
          <li> <i class="fa fa-envelope-o"></i>
            <p>hms@gmail.com<br>
          </li>
          <li> <i class="fa fa-map-marker"></i>
            <p>Itahari koshi Nepal</p>
          </li>
          <li> <i class="fas fa-bell"></i>
             <li><?php echo $dt;?></li>
             <li><?php echo $tim;?></li>
          </li>
        </ul>
      </div>
    </div>
    
    <!-- Nav -->
    <nav class="navbar ownmenu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        
        <!-- NAV -->
        <div class="collapse navbar-collapse navbar-right" id="nav-open-btn">
          <ul class="nav">
            <li> <a href="index.php">Home </a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="doctor_timings.php">Doctor Timings</a></li>           
            <li><a href="patientappointment.php">Appointment </a></li>
            <li><a href="contact.php">Contact </a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In </a>
              <ul class="dropdown-menu multi-level" style="display: none;">
                <li><a href="adminlogin.php">Admin</a></li>
                <li><a href="doctorlogin.php">Doctor</a></li>
                <li><a href="patientlogin.php">Patient </a></li>
                
                
              </ul>
             
            </li>           
          </ul>
        </div>
      </div>
    </nav>
  </header>