<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
include 'sessions.php';

?>

<!DOCTYPE HTML>
<html>

<head>
  <title>scenic_photo_two</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <?php 
  
  if ($member_id){
    session_destroy();
    
    echo '<script>window.location = "index.php";</script>';
  }else 
  session_destroy();
 
  echo '<script>window.location = "../";</script>';
  ?>;
 
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
