<?php
require_once ("config.php");
$recipt=$_POST["recipt"];
$st_id=$_POST['id'];
$account_no=$_POST['account'];
$amount=$_POST['amount'];
$date=$_POST['date'];
$query="insert into payment values('$recipt','$st_id','$account_no','$amount','$date')";
$send=mysqli_query($connection,$query);
if ($send) {
  echo "your payment has been completed";
}

 ?>
