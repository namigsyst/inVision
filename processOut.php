<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>namiG .:: Internal</title>
    <meta name="description" content="namiG is a full work flow office management solution comprised of core modules including HR, Finance, Projects, Inventory management and still growing since 2018..." />
    <meta name="keywords" content="namiG, Intranet, Office Manager, Manaement Solution"/>
    <meta name="author" content="namiG"/>

    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/png">

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
$query = "SELECT * FROM usermanagement WHERE Username = '$myUser' ";
$query_run = mysqli_query($con, $query);

$count = mysqli_num_rows($query_run);
if($row = mysqli_fetch_assoc($query_run)) {
             $response[] = $row;
             $SecurityLevel = $row['position'];
}else{
  header("location:sign.php");
}

// echo "<p>Query found: $count records based on user: $username with password $password</p>";

if($count == 1){

             if ($SecurityLevel == "ACCOUNT SUSPENDED" ) {
               // echo '<script type="text/javascript"> alert("Account was suspended") </script>';
               ?>
               <br><br><br><br><br>
                 <center >
                   <img src="assets/images/img09.png" alt="Not So Good" id="sizeImgTickCross">
                   <h3 color="red">This Account has been suspended!</h3>
                   <small> KINDLY VISIT THE ADMINISTRATOR TO GET YOUR ACCOUNT SORTED OUT </small> <br> <br>
                   <br> <a href="sign.php" id="return" >Signed Out </a>

                 </center>
               <?php
             }else{
               header("location:sign.php");

             }
}else{
  header("location:sign.php");
}

 ?>

 </body>
 </html>
