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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>namiG .:: Internal</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="namiG is a full work flow office management solution comprised of core modules including HR, Finance, Projects, Inventory management and still growing since 2018..." />
    <meta name="keywords" content="namiG, Intranet, Office Manager, Manaement Solution"/>
    <meta name="author" content="namiG"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/png">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<?php

if(isset($_GET['stats'])=='mailActivity') {
    $username = strval($_GET['Username']);
    $timer = strval($_GET['Timestamp']);
    $stat= $_GET['stats'];

    $date = date("Y-m-d H:i:s");
    $trueNow = date("Y-m-d H:i:s", strtotime("+0 hours $date") );


}

 ?>


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

              <?php

              if($timer >= $trueNow){

                ?>
                <form class="" action="process.php" method="POST">
                  <div class="card-body text-center">
                      <div class="mb-4">
                          <i class="feather icon-crosshair auth-icon"></i>
                      </div>

                      <h3 class="mb-4">Reset Password</h3>

                      <div class="input-group mb-3">
                          <input type="text" class="form-control" name="txtUsername" autocomplete="off" value="<?php echo $username; ?>" readonly required>
                      </div>

                      <div class="input-group mb-3">
                        <input type="text" class="form-control" name="txtTimer" value="<?php echo $timer; ?>" hidden readonly required>
                      </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

                      <div class="input-group mb-3">
                          <input type="password" id="pass" class="form-control" name="txtNewPass" autocomplete="off" minlength="8" maxlength="20" placeholder="New Password" required>
                      </div>

                      <div class="input-group mb-3">
                          <input type="password" id="confirmPass" class="form-control" name="txtConfirmPass" autocomplete="off" minlength="8" maxlength="20" placeholder="Confirm Password" required>
                      </div>

                      <span id='message'></span> <br>

                      <button type="submit" id="btnSubmit" name="securityBtn" class="btn btn-success mb-4 shadow-3">Reset Password</button>

      <script type="text/javascript">
        $('#pass, #confirmPass').on('keyup', function(){
          if($('#pass').val() == $('#confirmPass').val()){
            $('#message').html('Password Match').css('color', 'green');
            document.getElementById('btnSubmit').disabled = false;
          }else{
            $('#message').html('Password Does Not Match').css('color', 'red');
            document.getElementById('btnSubmit').disabled = true;
          }
        });
      </script>

                  </div>
                </form>
                <?php

              }else{

                echo'<script type="text/javascript"> alert ("Sorry, The link you used has expired. Request a new link") </script>';
                echo '<script type="text/javascript"> window.location="processSecurityMail.php?Username='.$username.'&stats=resetRequestProcess" </script>';

              }

               ?>



            </div>
        </div>
    </div>

    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>
</html>
