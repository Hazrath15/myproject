<?php
require_once("config.php");

	$st_id=$_POST['St_id'];
	$fname=$_POST['fullname'];
	$lname=$_POST['inputna4'];
	$contact=$_POST['inputAddress4'];
	$email=$_POST['inputEmail4'];
	$p_address=$_POST['inputPassword42'];
	$dept=$_POST['dept'];
	$gender=$_POST['gender'];
	$address=$_POST['hallname'];
	$blood=$_POST['inlineRadioOptions'];
	if($_FILES['image']['name'])
	{

			$file=$_FILES['image']['name'];
			$path="images/".$file;
			$tmp=$_FILES['image']['tmp_name'];
			move_uploaded_file($tmp, $path);
	}
	$query="INSERT INTO apply VALUES('$st_id','$fname','$lname','$contact','$email','$p_address','$dept','$gender','$address','$blood','$path')";
	$send=mysqli_query($connection,$query);
	if ($send) {
		// code...
		//echo "apply done";
	}


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Successful</title>
     <style>
 img {
     display: block;
     margin-left: auto;
     margin-right: auto;
     width: 200px;
 }
 </style>
   </head>
   <body>
   <img style="align:center" src="images/successful.jpg" alt="successful">
     <h1 style="text-align:center;color:#375B0E;">Your Application had been submitted successfully!</h1>
       <p  style="text-align:center;">To home <a href="index.php">click here</a></p>
   </body>
 </html>
