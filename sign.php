<?php
if (!(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' ||
   $_SERVER['HTTPS'] == 1) ||
   isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
   $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'))
{
   $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   header('HTTP/1.1 301 Moved Permanently');
   header('Location: ' . $redirect);
   exit();
}





require 'dbconfig/config.php';

function serverNow(){

  $date = date("Y-m-d H:i:s");
  $new_time = date("Y-m-d H:i:s", strtotime("+6 hours $date") );

  return $new_time;
}

$TrueNow = serverNow();

session_start(); #start session.
if (isset($_SESSION['myusername']) && !empty($_SESSION['myusername'])) {

  $myUser = $_SESSION['myusername'];
  // PK
  // Time
  $Message = "$myUser has logged out of the system ";
    $MessageQuery="INSERT into log values(NULL, '$TrueNow', '$Message')";
    $query_runner = mysqli_query($con, $MessageQuery);
      if($query_runner){
           // header("location:L1_hr/changePassword.php");
      }

  session_destroy();
} else {
  // echo('<meta http-equiv="refresh" content="0; URL=../login.php">');
  session_destroy();
}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>inVision</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="invision, projects"/>
    <meta name="author" content="inVision"/>

    <!-- Favicon icon -->
    <link rel="icon" href="../assets/images/icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/icon.png" type="image/png">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body oncontextmenu="return false;">
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-unlock auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Sign In</h3>

                    <form class="" action="process.php" method="POST">
                      Your Email ID: <br>
                      <div class="input-group mb-3">
                          <input type="text" name="myusername" class="form-control" autocomplete="off" placeholder="yourname@company.com" required>
                      </div>

                      Password: <br>
                      <div class="input-group mb-4">
                          <input type="password" name="mypassword" class="form-control" autocomplete="off" placeholder="********" required>
                      </div>

                      <div class="input-group mb-4">
                          <p>By clicking Login, I agree to inVision <a href="#" target="_blank" > terms </a> and <a href="#" target="_blank" >privacy policy</a>.</p>
                      </div>

                      <input type="submit" name="loginBtn" value="Login" class="btn btn-primary shadow-2 mb-4">
                    </form>

                    <!-- <a href="portal/home.php" class="btn btn-primary shadow-2 mb-4">Login</a> -->

                    <p class="mb-2 text-muted">Don't have an account? <a href="#">Sign up here</a></p>

                    <p class="mb-2 text-muted"> Copyright &copy; <script>document.write(new Date().getFullYear());</script> | inVision</p>
                    <p class="mb-2 text-muted"> All Rights Reserved</p>
                    <p class="mb-2 text-muted"> Ver 2.0.1.2011233</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
