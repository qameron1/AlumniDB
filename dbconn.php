<?php
$servername = "localhost";
$username = "ksuissd.org";
$password = "Let$c0detheweb!";
$erroemMsg ="0"


  $dbconn = new mysqli($servername, $username, $password);
  //check connection
  if($conn->connect_error){
		$errorMsg = "9";
  }else echo "Connected";
?>