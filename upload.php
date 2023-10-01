<?php
require_once("config.php");
$massage=$_POST['message'];
if($_FILES['video']['name'])
{
$file=$_FILES['video']['name'];
$file=urldecode($file);
$path="file/".$file;
$tmp=$_FILES['video']['tmp_name'];
move_uploaded_file($tmp,$path);
//echo "$path";
}
else {
  //echo "not inserted";
}
$query="insert into notice values('','$massage','$path')";
$send=mysqli_query($connection,$query);
 if ($send) {
   // code...
   echo "Your file is uploaded successfully.";
 }
 ?>
