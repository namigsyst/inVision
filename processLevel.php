

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="invision, projects"/>
    <meta name="author" content="inVision"/>

    <!-- Favicon icon -->
    <link rel="icon" href="../assets/images/icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/icon.png" type="image/png">

    <link rel="stylesheet" href="css/main.css">
  </head>
  <body oncontextmenu="return false;">

    <br>
    <center> <h5>PROCESSING...</h5> </center>

<?php


session_start(); #start session.
if (isset($_SESSION['myusername']) && !empty($_SESSION['myusername'])) {
    # do whatever you want if session found.
} else {
    echo('<meta http-equiv="refresh" content="0; URL=sign.php">');
}

$myUser = $_SESSION['myusername'];
require 'dbconfig/config.php';

$response = array();
$query = "SELECT * FROM user WHERE username = '$myUser' ";
$query_run = mysqli_query($con, $query);

$count = mysqli_num_rows($query_run);
if($row = mysqli_fetch_assoc($query_run)) {
             $response[] = $row;
             $SecurityLevel = $row['accessLevel'];
}else{
  header("location:sign.php");
}

if($count == 1){

             if ($SecurityLevel == "ADMINISTRATOR" OR $SecurityLevel == "HumanResource") {
               header("location:portal/home.php");
             }else{
               header("location:portal/home.php");

             }
}else{
  header("location:sign.php");
}

 ?>

 </body>
 </html>
