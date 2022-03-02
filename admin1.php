<?php
session_start();
require 'config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if(!$conn) die("Not Connected to Database");

if( isset($_POST['email']) && isset($_POST['password']) ){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select * from admin where email='$email' and password='$password'";
    $result = mysqli_query($conn, $sql);
   echo $email;
   if( mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_array($result);
    header("location:adminprofile.php");
    $_SESSION['user_loggedin'] = "OK";
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['user_name'] = $row['username'];
   

   
  } else {
    $message = "<h3>Incorrect details ! try again </h3><br>";
  }
}

?>
