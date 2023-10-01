<?php
require_once ("config.php");
session_start();
$name=$_POST['user'];
$password=$_POST['password'];
$password=sha1($password);
$query="select user_name,password from info where user_name='$name'and password='$password'";
$send=mysqli_query($connection,$query);
if ($send) {
  # code...
  //echo "itsworks";
}
$row=mysqli_fetch_array($send);
if ($name==$row['user_name'] and $password==$row['password']) {
//  echo "print data";

  $_SESSION['UN']=$name;
  $_SESSION['PS']=$password;
 //header("Location:home.php");

}
else {
header("Location:login.php?value=fail");

}


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1 style="text-align:center;">You have been signed in successfully. </h1>
     <p style="text-align:center">Go to profile <a href="profile2.php">click here</a></p>
   </body>
 </html>
