<?php
require_once ("config.php");

$user=$_POST["user"];

$password=$_POST['password'];

$query="select user,password from admin where user='$user' and password='$password'";
// $result = $connection->query($query);
// $row = $result->fetch_assoc();

$result= mysqli_query($connection,$query);
$row=mysqli_fetch_array($result);

if ($user==$row['user'] and $password==$row['password']) {

}
else {
	header("Location:admin.php?value=fail");

}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1 style="text-align:center;">Login Successfully</h1>
     <p style="text-align:center;"><a href="adminhome.php">go to admin home</a></p>

   </body>
 </html>
