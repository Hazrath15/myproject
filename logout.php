<?php
require_once("config.php");

session_start();
//unset($_SESSION['ID']);

 //header("Location:Signin.php");
 session_destroy();
  echo "<h1>You have been Loged out successfully</h1>";
  echo "To home <a href='index.php'>click here</a>";
 ?>
