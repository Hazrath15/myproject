<?php
session_start();
require_once ("config.php");
if (!isset($_SESSION['ID'])) {

header("Location:Signin.php");
}
else {
  $name=$_SESSION['ID'];
}

 ?>
 <!DOCTYPE html>
 <html>
<body style="text-align:center">
     <h1 style="text-align:center;">Singed in successfully</h1>
    <a href="profile2.php?name=<?php echo"$name";?>">Go To Profile</a>
</body>
 </html>
