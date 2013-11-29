<?php
date_default_timezone_set('Asia/Dhaka');

$username="root";
$password= "";
$host="localhost";
$database="miniagile";

$con=mysql_connect($host,$username,$password);
mysql_select_db($database,$con);

if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>