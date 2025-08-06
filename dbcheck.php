<?php
$mysqli = new mysqli("sg2plzcpnl453269.prod.sin2.secureserver.net","admissions","cimr2021","cimr");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>