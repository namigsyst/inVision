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


    <head>
      <link rel="stylesheet" href="css/main.css">
      <title>namiG .:: Internal</title>
      <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
      <meta name="description" content="namiG is a full work flow office management solution comprised of core modules including HR, Finance, Projects, Inventory management and still growing since 2018..." />
      <meta name="keywords" content="namiG, Intranet, Office Manager, Manaement Solution"/>
      <meta name="author" content="namiG"/>
    </head>

<?php
require 'dbconfig/config.php';

  //............................................................................controlNow

  function serverNow(){

    $date = date("Y-m-d H:i:s");
    $new_time = date("Y-m-d H:i:s", strtotime("+6 hours $date") );

    return $new_time;
  }

  $TrueNow = serverNow();
  $sendFeedback = "Please try again \nIf this error occurs again, please send in a feedback for review \nThank You.";



  //...eND cONTROL nOW
  //..............................................................................\\\\\\\\\\__________\\\\\\\\\\__________\\\\\\\\\\__________\\\\\\\\\\__________\\\\\\\\\\
  //..............................................................................\\\\\\\\\\__________\\\\\\\\\\__________\\\\\\\\\\__________\\\\\\\\\\__________\\\\\\\\\\
  //..............................................................................\\\\\\\\\\__________\\\\\\\\\\__________\\\\\\\\\\__________\\\\\\\\\\__________\\\\\\\\\\
  //..............................................................................\\\\\\\\\\__________\\\\\\\\\\__________\\\\\\\\\\__________\\\\\\\\\\__________\\\\\\\\\\
  //..............................................................................\\\\\\\\\\__________\\\\\\\\\\__________\\\\\\\\\\__________\\\\\\\\\\__________\\\\\\\\\\

  //............................................................................Update Employee Mail Complaint

  if(isset($_GET['stats']) == 'mailActivity') {


    $username = strval($_GET['Username']);
    $stat = $_GET['stats'];


    $category = "Mail Activity";
    $feedback = "Unrecognized Password Reset Request";
    $status = "New";

    require 'dbconfig/config.php';
    $response = array();
    $mailQuery = "SELECT * FROM usermanagement WHERE Username = '$username' ";
    $result = mysqli_query($con, $mailQuery) or die(mysql_error($mailQuery));

    if($row = mysqli_fetch_assoc($result)) {
        $response[] = $row;
        $EmpNum = $row['EmpNum'];


    require 'dbconfig/config.php';
    $query = "INSERT INTO feedback VALUES(NULL, '$TrueNow', '$EmpNum', '$category','$feedback', '$status', NULL)";
    $query_run = mysqli_query($con, $query) or die (mysql_error($query));

    if ($query_run) {

      ?>
        <center>
          <br><br><br>
          <h3>Thank you for the feedback. <br>Our team will investigate and the matter will be dealt with accordingly. Thank You</h3>
          <br> <br> <a href="index.php" id="proceed" >Continue</a>
        </center>
      <?php

    }else{
      ?>
        <center>
          <br><br><br>
          <h3>An Error occured. <?php echo $sendFeedback; ?></h3>
          <br> <br> <a href="index.php" id="return" >Login To Send Feedback</a>
        </center>
      <?php
    }
  }
  $result->close();

  }

  //...eND uPDATE eMPLOYEE mAIL cOMPLAINT

 ?>
