<?php

include "testconn.php";
//rfam_acc = userID and seq_start = userPass on production code

//while loop checks to see if input is posted
while (isset($_POST["rfam_acc"]) && isset($_POST["seq_start"])) {

//variables for using post data and storing sql query to check database records
$userID = $_POST['rfam_acc'];
$userPass = $_POST['seq_start'];

//query would be "Select * FROM users_Table WHERE userID = '$userID' AND userPass = '$userPass'" for production code
$sql = "SELECT * FROM family, full_region WHERE family.rfam_acc = '$userID' AND full_region.seq_start = '$userPass'";
$result = mysqli_query($dbconn, $sql);

    //if the query returns a matching record, it starts a session and sets the session variables to the matching userID and userPass input
    if (mysqli_num_rows($result) > 0) {
    
    session_start();
    $row = mysqli_fetch_assoc($result);
    $_SESSION['userID'] = $row['rfam_acc'];
    $_SESSION['userPass'] = $row['seq_start'];
        
        //if both session variables are set, redirect to homepage
        if(isset($_SESSION['userID']) && isset($_SESSION['userPass'])) {
       
        header("Location: homepage.php");
        exit();
        }    
        else {
            exit();
        }
    }
    //if no matches are found, user is redirected to login page to try again
    else {
        echo("no matches");
        header("Location: loginfunctionality.php");
        exit();
    }
}
//else {
    //echo("enter credentials");
    //header("Location: login.php");
    //echo("Enter a User ID and Password");
//}
            






?>

<!DOCTYPE html>
<html lang="en">
<head>
<!--Form for user credentials-->
<!--this form would be the login credential inputs on the login page on the production code-->

<form action= "#" method="POST">
    <input type="text" name="rfam_acc" placeholder="rfam_acc" value="">
    <input type="text" name="seq_start" placeholder="seq_start" value="">
    <input type="submit" name="Submit">

    

</form>
</head>
