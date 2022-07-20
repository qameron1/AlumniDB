<?php
$dbconn = new mysqli("mysql-rfam-public.ebi.ac.uk","rfamro","","Rfam", "4497");

// Check connection
if ($dbconn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $dbconn -> connect_error;
  exit();
}
?>