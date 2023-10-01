<?php
require_once ("config.php");
if(isset($_POST['s1']))  {

$start = "01";
$end = "23";
$now = date('H');

if($now > $start AND $now < $end) {
  $id=$_POST['id'];
  $name=$_POST['recipt'];
  $meal=$_POST['meal'];
  $date=$_POST['date'];
  $bill=$_POST['total'];
  $qu="select * from payment where recipt_no='$name'";
  $result= mysqli_query($connection,$qu);
  $row=mysqli_fetch_array($result);

  $nbill=$row['amount'];
  $nbill=$nbill-$bill;
  if ($result AND $nbill>0) {
    $query="insert into tokenselimhall values('$id','$name','$meal','$date','$bill')";
    $send=mysqli_query($connection,$query);
    if ($send) {
      // code...
      header("Location:successful.php");
      //echo "successfully got your token";
    }
  }
else {
  header("Location:fail.php");
  //echo "you have not enough fund";
}
$query1="UPDATE payment SET  amount='$nbill'  WHERE recipt_no='$name'";
$send1=mysqli_query($connection,$query1);


}

else {
  header("Location:timeup.php");
  //echo "time up,you only get token within valid time";
}
}

if(isset($_POST['s2'])) {
  $name=$_POST['name'];
  $room=$_POST['room_no'];
  $hallname=$_POST['hallname'];
  $complain=$_POST['message'];

  $query="insert into complain values('','$name','$room','$hallname','$complain')";
  $send=mysqli_query($connection,$query);
  if ($send) {
    // code...
    echo "your complian have been submitted successfully.";
  }
}

 ?>
