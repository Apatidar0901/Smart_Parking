<?php



  $servername = "localhost"; //localhost id
  $dBUsername = "root"; //Database Username
  $dBPassword = "root"; //Database Password : Default-root
  $dBName = "smart_users"; //Database name
  
  $con=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName, 3307);

  if (!$con) {
    die("Connection Failed: ".mysqli_connect_error());
  }
 ?>
