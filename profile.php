<?php
session_start();
require_once ("config.php");

if (!isset($_SESSION['ID'])) {
   header("Location:Signin.php");
}
else {
  $st_id=$_SESSION['ID'];
}

$query="select * from info where st_id='$st_id'";

$result = $connection->query($query);
 $row = $result->fetch_assoc();

echo "$row[fullname]";
echo "<br>";
echo "$row[email]";
echo "<br>";
echo "$row[gender]";
echo "<br>";
echo "$row[blood]";
echo "<br>";
echo "<img src=\"$row[photo]\"/>";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "$row[fullname]";
    echo "<br>";
    echo "$row[email]";
    echo "<br>";
    echo "$row[gender]";
    echo "<br>";
    echo "$row[blood]";
    echo "<br>";
    echo "<img src=\"$row[photo]\"/>";
     ?>

  </body>
</html>
