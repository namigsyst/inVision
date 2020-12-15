<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>namiG .:: Internal</title>
    <meta name="description" content="namiG is a full work flow office management solution comprised of core modules including HR, Finance, Projects, Inventory management and still growing since 2018..." />
    <meta name="keywords" content="namiG, Intranet, Office Manager, Manaement Solution"/>
    <meta name="author" content="namiG"/>

    <link rel="icon" href="../assets/images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/png">

    <link rel="stylesheet" href="../assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="../assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body oncontextmenu="return false;">

    <?php

    if(isset($_GET['stats'])=='resetRequestProcess') {
        $username = strval($_GET['Username']);
        $stat= $_GET['stats'];


    }

     ?>


<br><br><br><br><br>
  <center>
    <img src="assets/images/img09.png" alt="Not So Good" id="sizeImgTickCross">


    <h4> <b>*PLEASE NOTE:</b> <br>we have sent a link to your email address to help you setup a new password.
        <br>The link is valid for the next <b>60 Minutes</b> from now. Please check your email to reset your password.
        <br>After you have reset your password, you can click on the button below to login</h4>

<?php


$date = date("Y-m-d H:i:s");
$free_time = date("Y-m-d H:i:s", strtotime("+7 hours $date") );


      require 'dbconfig/config.php';
      $response = array();
      $mailQuery = "SELECT a.*,b.* FROM employee a JOIN usermanagement b WHERE b.Username = '$username' AND a.EmpNum = b.EmpNum ";
      $result = mysqli_query($con, $mailQuery) or die(mysql_error($mailQuery));

      if($row = mysqli_fetch_assoc($result)) {
          $response[] = $row;
          $mailAddress = $row['EmpEmail'];
          $fname = $row['EmpFName'];

              $mailto = $mailAddress;
              $mailSub = "namiG Password Reset";
              $mailMsg = "<h3>Hi, $fname</h3>  <br>You recently requested to setup a new password since you have forgotten your old one. Click the button to reset it
              <center>
                <a href='http://www.slomoescorp.co.sz/namig/passwordSecurity.php?Username=$username&Timestamp=$free_time&stats=mailActivity'> <img src='http://www.slomoescorp.co.sz/namig/assets/images/btnLogin.png' alt='Login'> </a>
              </center>
              <br><br>Please note that this link is valid for the next 60 minutes. After this link has expired you will need to request a new link. if you do not recognise this activity, please click the button below.
              <center>
                <a href='http://www.slomoescorp.co.sz/namig/notMeSecurity.php?Username=$username&stats=mailActivity'> <img src='http://www.slomoescorp.co.sz/namig/assets/images/btnNotMe.png' alt='I Do Not Recognise This Activity' > </a>
              </center>
              <br><br>Thank You <br>~namiG";

             ?>
              <center>

                <?php
                  require 'portal/funcEmail.php';
                  echo $mailAddress;
                ?>
                 <br><br> <a href="sign.php" id="info" >I Have Reset My Password | Back To Login <span class="pcoded-micon"><i class="feather icon-corner-down-left"></i></span> </a>

              </center>
             <?php

       }
       $result->close();
       ?>



     </body>
</html>
