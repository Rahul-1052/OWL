<?php
require 'config.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./assets/css/style.css">

  <title><?php echo APP_NAME; ?></title>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="adminprofile.php">Home</a></li>
          <li><a href="adminusers.php">Users</a></li>
          <li><a href="adminquestion.php">Questions</a></li>
         

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php
          // check user login
         

          if(isset($_SESSION['user_loggedin'])){
            
            echo "<li><a href='logout.php'>Logout</a></li>";
          }
           ?>
        </ul>
      </div>
    </div>
  </nav>
