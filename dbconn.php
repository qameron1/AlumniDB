<?php
$servername = "localhost:3306";
$username = "ksuissdo_alumnidb";
$password = "TEsTPassW0rd";
$database = "ksuissdo_alumniDB";
$errorMsg ="";


  $dbconn = new mysqli($servername, $username, $password,$database);
  //check connection
  if($dbconn->connect_error){
		$errorMsg = "DBCONNECTION ERROR";
  }else $errorMsg = "no connection error" ;
?>
