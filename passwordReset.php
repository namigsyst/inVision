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

              <form class="" action="process.php" method="POST">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-crosshair auth-icon"></i>
                    </div>

                    <h3 class="mb-4">Reset Password</h3>
                    <div class="input-group mb-3">
                      <input type="number" class="form-control" name="txtMyID" autocomplete="off" placeholder="Employee #" required>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="txtParent" autocomplete="off" placeholder="My Parent" required>
                    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

                    <div class="input-group mb-3">
                        <input type="password" id="pass" class="form-control" name="txtNewPass" autocomplete="off" minlength="8" maxlength="20" placeholder="New Password"  required>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" id="confirmPass" class="form-control" name="txtConfirmPass" autocomplete="off" minlength="8" maxlength="20" placeholder="Confirm Password"  required>
                    </div>
                    <span id='message'></span> <br>

                    <button type="submit" id="btnSubmit" name="resetBtn" class="btn btn-success mb-4 shadow-3">Reset Password</button>

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

                    <p class="mb-0 text-muted">I remember my password: <a href="sign.php">Login</a></p>
                </div>
              </form>

            </div>
        </div>
    </div>

    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>
</html>
