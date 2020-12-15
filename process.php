<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>inVision</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="inVision, Projects"/>
    <meta name="author" content="inVision"/>

    <!-- <meta http-equiv="refresh" content="30"> -->

    <!-- Favicon icon -->
    <link rel="icon" href="../assets/images/icon.png" type="image/x-icon">

    <link rel="stylesheet" href="../assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="../assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>


<?php

function serverNow(){

  $date = date("Y-m-d H:i:s");
  $new_time = date("Y-m-d H:i:s", strtotime("+6 hours $date") );

  return $new_time;
}

$TrueNow = serverNow();

require 'dbconfig/config.php';

                 if(isset($_POST['loginBtn'])){

                   $username = $_POST['myusername'];
                   $password = $_POST['mypassword'];

                         $query = "SELECT * FROM user WHERE BINARY username=?;";
                         $stmt = mysqli_stmt_init($con);
                         if (!mysqli_stmt_prepare($stmt, $query)){

                           echo'<script type="text/javascript"> alert ("Username not found in the system. Please use valid login credentials") </script>';
                           echo '<script type="text/javascript"> window.location = "sign.php" </script>';

                         }else{
                           require 'dbconfig/config.php';
                           $response = array();
                           $query2 = "SELECT * FROM user WHERE BINARY username='$username'";
                           $result2 = mysqli_query($con, $query2);

                           if($rows = mysqli_fetch_assoc($result2)) {
                             $response[] = $rows;
                             $serverPass = $rows['password'];

                             $pwdCheck = password_verify($password, $serverPass);

                              if ($pwdCheck == true){
                                session_start(); #start session.


                                 $_SESSION['myusername'] = $username;
                                 require 'dbconfig/config.php';
                                  $Message = "$username logged into the system successfully";
                                    $MessageQuery="INSERT into log values(NULL, '$TrueNow', '$username', '$Message')";
                                    $query_runner = mysqli_query($con, $MessageQuery);

                                      if($query_runner){

                                           ?>
                                           <br><br><br><br><br>
                                             <center>
                                               <img src="assets/images/img08.png" alt="All Good" id="sizeImgTickCross">
                                               <h3>You Are Signed In Successfully</h3>

                                             </center>
                                           <?php
                                           if ($password == "password.1") {
                                             ?>
                                               <center>
                                                 <h3>Since You are using a default password, <br>
                                                   we recommend you create a new and secure password first!</h3>

                                                         <?php
                                                         require 'dbconfig/config.php';
                                                         $response = array();
                                                         $mailQuery = "SELECT a.*,b.* FROM employee a JOIN user b WHERE BINARY b.username = '$username' AND a.empNum = b.empNum ";
                                                         $result = mysqli_query($con, $mailQuery) or die(mysql_error($mailQuery));

                                                         if($row = mysqli_fetch_assoc($result)) {
                                                             $response[] = $row;
                                                             $mailAddress = $row['emailAddress'];
                                                             $fname = $row['empFName'];

                                                                 $mailto = $mailAddress;
                                                                 $mailSub = "inVision Login Alert";
                                                                 $mailMsg = "<h4>Hi $fname</h4>

                                                                              <br>You just logged in to the system using the default password.
                                                                                Please kindly create a new password to keep the system secure.

                                                                              <br>Security is our priority. We appreciate your cooperation.

                                                                              <br><br>Thank You
                                                                              <br>~inVision";

                                                                require 'portal/funcEmail.php';
                                                                echo $mailAddress;
                                                          }
                                                          $result->close();

                                                          // include 'portal/funcEmailDaily.php';
                                                          ?>

                                                 <!-- <br> <br> <a href="portal/profile.php#changePassword" id="proceed">Change My Password</a> -->
                                               </center>

                                             <?php
                                            }else{

                                              ?>
                                                <center>
                                                  <br> <br> <a href="processLevel.php" id="proceed">Continue To Home</a>
                                                </center>

                                              <?php
                                            }
                          }else{
                            echo'<script type="text/javascript"> alert ("An Error occured. \nPlease Try Again") </script>';
                            echo '<script type="text/javascript"> window.location = "sign.php" </script>';
                          }
                        }elseif($pwdCheck == false){
                          $Message = "Failed attempt to login to the system by $username";
                            $MessageQuery="INSERT into log values(NULL, '$TrueNow', '$username', '$Message')";
                            $query_runner = mysqli_query($con, $MessageQuery);
                              if($query_runner){

                          ?>
                          <br><br><br><br><br>
                            <center>
                              <img src="assets/images/img09.png" alt="Not So Good" id="sizeImgTickCross">
                              <h3>Login Failed</h3>
                              <h3>Please enter the correct valid login details</h3>
                                        <!-- <br> -->

                                        <div class="text-left">
                                          <h3>Please note that:</h3>

                                          <small>.: Password is wrong, or</small> <br>
                                          <small>.: The user account was suspended, or</small> <br>
                                          <small>.: The Username and Password are both case sensitive.</small> <br>
                                        </div>

                                        <?php
                                              require 'dbconfig/config.php';
                                              $response = array();
                                              $mailQuery = "SELECT a.*,b.* FROM employee a JOIN user b WHERE b.username = '$username' AND a.empNum = b.empNum ";
                                              $result = mysqli_query($con, $mailQuery) or die(mysql_error($mailQuery));

                                              if($row = mysqli_fetch_assoc($result)) {
                                                  $response[] = $row;
                                                  $mailAddress = $row['EmpEmail'];
                                                  $fname = $row['EmpFName'];

                                                      $mailto = $mailAddress;
                                                      $mailSub = "inVision Security";
                                                      $mailMsg = "<h4>Hi $fname</h4>

                                                                  <br>namiG just recorded a failed attempt to login to the system using your Username dated ".$TrueNow.".

                                                                  <br>If you do not recognise this activity,
                                                                  please secure your account by changing your password to a new one. You can do this NOW.
                                                                  <br><a href='http://www.invision.com/portal/sign.php'>Click Here</a> to change your password.
                                                                  <br>Once you are logged in, follow these steps:
                                                                    <br>1. Click '<b>Preferences</b>' (top right corner of the screen).
                                                                    <br>2. Click '<b>Profile</b>'
                                                                    <br>3. Click '<b>Change Password</b>' tab to change your password.

                                                                  <br><br>Thank You
                                                                  <br>~inVision";

                                                     require 'portal/funcEmail.php';
                                                     echo $mailAddress;

                                               }
                                               $result->close();
                                        ?>

                                        <!-- <br> <br> <a href="sign.php" id="return" >Remember Your Password? Try Again <span class="pcoded-micon"><i class="feather icon-corner-down-left"></i></span> </a> -->



                                        <!-- <br><br> <h4 style="color:red;">Or if you forgot your password, click below to request Password Reset Link which will be sent to your email's inbox</h4> -->
                                        <!-- <br> <a href="processSecurityMail.php?Username=<?php //echo $username; ?>&stats=resetRequestProcess" id="info" >Forgot My Password | Request Password Reset Link <span class="pcoded-micon"><i class="feather icon-corner-down-left"></i></span> </a> -->
                            </center>
                          <?php

                        }else{
                          ?>
                          <br><br><br><br><br>
                            <center>
                              <img src="assets/images/img09.png" alt="Not So Good" id="sizeImgTickCross">
                              <h3>Login Failed</h3>
                              <h3>*PLEASE NOTE: We have implimented a more secure security layer to the portal</h3>
                              <h4>Therefore, we have sent a link to your email address to help you setup a new password. The link is valid for the next <b>60 Minutes</b> from now. </h4>
                              <!-- <br> -->
                              <?php

                              $date = date("Y-m-d H:i:s");
                              $free_time = date("Y-m-d H:i:s", strtotime("+7 hours $date") );


                                    require 'dbconfig/config.php';
                                    $response = array();
                                    $mailQuery = "SELECT a.*,b.* FROM employee a JOIN user b WHERE b.username = '$username' AND a.empNum = b.empNum ";
                                    $result = mysqli_query($con, $mailQuery) or die(mysql_error($mailQuery));

                                    if($row = mysqli_fetch_assoc($result)) {
                                        $response[] = $row;
                                        $mailAddress = $row['emailAddress'];
                                        $fname = $row['empFName'];

                                            $mailto = $mailAddress;
                                            $mailSub = "inVision Security";
                                            $mailMsg = "<h4>Hi $fname</h4>

                                                        <br>You recently requested to setup a new password due to the new security protocol we have implimented. Click the button to reset it

                                                        <center>
                                                        <br>
                                                          <a href='http://www.invision.com/portal/passwordSecurity.php?Username=$username&Timestamp=$free_time&stats=mailActivity'>
                                                            <img src='http://www.invision.com/portal/assets/images/btnLogin.png' alt='Login'>
                                                          </a>

                                                          <br><br>*Please note that this link is <b>ONLY</b> valid for the next 60 minutes. After this link has expired you will need to request a new link. If you do not recognise this activity, please click the button below.

                                                        <br>
                                                          <a href='http://www.invision.com/portal/notMeSecurity.php?Username=$username&stats=mailActivity'>
                                                            <img src='http://www.invision.com/portal/assets/images/btnNotMe.png' alt='I Do Not Recognise This Activity' >
                                                          </a>
                                                        </center>

                                                        <br><br>Thank You
                                                        <br>~inVision";

                                           require 'portal/funcEmail.php';
                                           echo $mailAddress;

                                     }
                                     $result->close();
                                     ?>

                              <!-- <br> <br> <a href="sign.php" id="info" >Request Password Reset Link <span class="pcoded-micon"><i class="feather icon-corner-down-left"></i></span> </a> -->
                            </center>
                          <?php
                        }

                      }
                    }else{
                      echo'<script type="text/javascript"> alert ("Username does not exist in our database. \nPlease Try Again") </script>';
                      echo '<script type="text/javascript"> window.location = "sign.php" </script>';
                    }

                  }
                 }


/////...../////


             if(isset($_POST['resetBtn'])){

               $ID = $_POST['txtMyID'];
               $Parent = $_POST['txtParent'];

               $NPass = $_POST['txtNewPass'];
               $CPass = $_POST['txtConfirmPass'];
               $truePass = password_hash("$NPass", PASSWORD_DEFAULT);

               if ($NPass == $CPass) {

                   $query = "UPDATE user set password = '$truePass' WHERE empNum = '$ID'";
                   $query_run = mysqli_query($con, $query) or die (mysqli_error($query.$con));

                   if ($query_run) {

                     echo'<script type="text/javascript"> alert ("Your password has been reset. \nContinue to Login") </script>';
                     echo '<script type="text/javascript"> window.location = "sign.php" </script>';

                   }else{

                     echo'<script type="text/javascript"> alert ("An Error occured while trying to reset your password. \nPlease try again") </script>';
                     echo '<script type="text/javascript"> window.location = "passwordReset.php" </script>';

                   }

               }else{

                 echo'<script type="text/javascript"> alert ("New Password and Confirm Password do not match. \nPlease try again and ensure you retype the password correctly") </script>';
                 echo '<script type="text/javascript"> window.location = "passwordReset.php" </script>';

               }
             }

/////...../////


             if(isset($_POST['securityBtn'])){

               $Username = $_POST['txtUsername'];
               $timer = $_POST['txtTimer'];


               $NPass = $_POST['txtNewPass'];
               $CPass = $_POST['txtConfirmPass'];
               $truePass = password_hash("$NPass", PASSWORD_DEFAULT);

               if ($NPass == $CPass) {

                   $query = "UPDATE user set password = '$truePass' WHERE username = '$Username'";
                   $query_run = mysqli_query($con, $query) or die (mysqli_error($query.$con));

                   if ($query_run) {

                     echo'<script type="text/javascript"> alert ("Your password has been reset. \nContinue to Login") </script>';
                     echo '<script type="text/javascript"> window.location = "sign.php" </script>';

                   }else{

                     echo'<script type="text/javascript"> alert ("An Error occured while trying to reset your password. \nPlease try again") </script>';
                     echo '<script type="text/javascript"> window.location = "passwordSecurity.php?Username='.$Username.'&Timestamp='.$timer.'&stats=mailActivity" </script>';

                   }

               }else{

                 echo'<script type="text/javascript"> alert ("New Password and Confirm Password do not match. \nPlease try again and ensure you retype the password correctly") </script>';
                 echo '<script type="text/javascript"> window.location = "passwordSecurity.php?Username='.$Username.'&Timestamp='.$timer.'&stats=mailActivity" </script>';

               }

             }


/////...../////


        if(isset($_POST['BtnSubmitInvitation'])){

          $urEmail = $_POST['txtInviteMyEmail'];
          $mailAddress = $_POST['txtInviteFrEmail'];
          $frName = $_POST['txtInviteFrName'];
          $defaultMsg = $_POST['txtInviteMessage'];
          $link = "<a href='https://www.invision.com/portal/listCareers.php' title='Click Here'>Click Here To Apply!</a>";


          $mailto = $mailAddress;
          $mailSub = "Apply at Slomoes Corporation Today!";
          $mailMsg = "<h4>Hi $frName</h4>

                      <br>$defaultMsg
                      <br>$link

                      <br><br>Thank You
                      <br>Invitation sent to you by $urEmail
                      ";

         require 'portal/funcEmail.php';
         echo $mailAddress;


                echo'<script type="text/javascript"> alert ("Invitation has been sent successfully") </script>';
                echo '<script type="text/javascript"> window.location = "regApplication.php" </script>';



        }



/////...../////


if(isset($_POST['BtnSubmitJobApplication'])){

    $myPin = $_POST['txtPIN'];
    $title = $_POST['txtTitle'];
    $lname = $_POST['txtLName'];
    $fname = $_POST['txtFName'];
    $mname = $_POST['txtMName'];
    $cell = $_POST['txtCell'];
    $email = $_POST['txtEmail'];
    // $gender = $_POST['txtGender'];
    $dob = $_POST['txtDOB'];
    $post = $_POST['txtPost'];
    $experience = $_POST['txtExpDuration'];
    $marital = $_POST['txtMarital'];
    $health = $_POST['txtHealth'];
    $resi = $_POST['txtResi'];
    $nationality = $_POST['txtNationality'];
    $dependent = $_POST['txtDependents'];
    $dependentRange = $_POST['txtDependentsRange'];
    $relative = $_POST['txtRelatives'];
    $RelName= $_POST['txtRelName'];
    $RelPost = $_POST['txtRelPost'];
    $RelRelation = $_POST['txtRelRelation'];
    $HQ = $_POST['txtHQ'];
    $HQInstitute = $_POST['txtHQInstitute'];
    $HQYear = $_POST['txtHQYear'];
    $Language = $_POST['txtLanguage'];
    // $IDCard = $_POST['txtIDCard'];
    // $CV = $_POST['txtCV'];
    $status = "New";

    if($title == 'Mr'){
      $gender = "Male";
    }elseif($title == 'Miss' OR $title == 'Mrs' OR $title == 'Ms'){
      $gender = "Female";
    }else{
      $gender = "";
    }

    if($dependent == 'Yes'){
        $dependentCap = $dependent.", ".$dependentRange;
    }else{
      $dependentCap = $dependent;
    }

// ID Card
    $tempID = explode('.',$_FILES['txtIDCard']['name']);
    $extensionID = end($tempID);
    $targetfolderID = "assets/images/IDs/";
    $newnameID = $myPin;
    $filenameID = $newnameID . '.' . $extensionID;
    $targetfolderID = $targetfolderID;

// CV Doc
    $tempCV = explode('.',$_FILES['txtCV']['name']);
    $extensionCV = end($tempCV);
    $targetfolderCV = "assets/Docs/CVs/";
    $newnameCV = $myPin;
    $filenameCV = $newnameCV . '.' . $extensionCV;
    $targetfolderCV = $targetfolderCV;

    $date = date("Y-m-d H:i:s");
    $trueNow = date("Y-m-d H:i:s", strtotime("+6 hours $date") );

    if($relative == 'Yes'){
      $query2 = "INSERT into application values(NULL, '$myPin', '$title', '$lname', '$fname', '$mname', '$cell', '$email', '$gender', '$dob', '$post', '$experience', '$marital', '$health', '$resi', '$nationality', '$dependentCap', '$relative', '$RelName', '$RelPost', '$RelRelation', '$HQ', '$HQInstitute', '$HQYear', '$trueNow', '$Language', '$filenameCV', '$filenameID', '$status')";
    }elseif($relative == 'No'){
      $query2 = "INSERT into application values(NULL, '$myPin', '$title', '$lname', '$fname', '$mname', '$cell', '$email', '$gender', '$dob', '$post', '$experience', '$marital', '$health', '$resi', '$nationality', '$dependentCap', '$relative', NULL, NULL, NULL, '$HQ', '$HQInstitute', '$HQYear', '$trueNow', '$Language', '$filenameCV', '$filenameID', '$status') ";
    }else{

    }


    $query1 = "SELECT * FROM application where appPin = '$myPin' AND appPost = '$post' AND status = 'Open' ";
    $query_run1 = mysqli_query($con, $query1);
    $row = mysqli_fetch_array($query_run1,MYSQLI_ASSOC);

        $count = mysqli_num_rows($query_run1);

      if($count == 1){

           echo '<script type="text/javascript"> alert ("You have already applied for this post. Therefore, you can not apply for the same post again. \nIf you wish to submit another application, you may do so but for a different position \nPS: We advice that you apply for one position ONLY.") </script>';
           echo '<script type="text/javascript"> window.location = "regApplication.php" </script>';


      }else{

          $query_run2 = mysqli_query($con, $query2) or die (mysql_error($query2));

          if ($query_run2 == true) {

                $file_typeID = $_FILES['txtIDCard']['type'];
                $file_typeCV = $_FILES['txtCV']['type'];
                // echo "$file_typeCV";

                if ($file_typeID == "image/jpeg" AND $file_typeCV == "application/pdf") {

                  // echo $targetfolderID.$filenameID;
                    if(move_uploaded_file($_FILES['txtIDCard']['tmp_name'], $targetfolderID.$filenameID)){

                          if(move_uploaded_file($_FILES['txtCV']['tmp_name'], $targetfolderCV.$filenameCV)){

                            echo '<script type="text/javascript"> alert ("Hi '.$fname.', \nYou application has been submitted sucessfully to the HR department at Slomoes Corporation. \nWe will contact you for any further communications. \nAll the Best!!!") </script>';

                                      $mailingAddress = "recruitment@slomoescorp.co.sz";
                                      $mailto = $mailingAddress;
                                      $mailSub = "New Job Application | namiG";
                                      $mailMsg = "<h4>Hello HR</h4>

                                                   A new job application has been submitted in the system. Click the Login button below to go through the application.
                                                   <br>
                                                     <center>
                                                       <a href='http://www.slomoescorp.co.sz/namig/sign.php'>
                                                         <img src='http://www.slomoescorp.co.sz/namig/assets/images/btnLogin.png' alt='Login' >
                                                       </a>
                                                     </center>

                                                   <br><br>Kind Regards
                                                   <br> <b>~namiG</b>
                                                   ";


                                      include 'portal/funcEmail.php';
                                      echo $mailingAddress." <br>";

                            echo '<script type="text/javascript"> window.location = "index.php" </script>';

                          }else{
                            echo '<script type="text/javascript"> alert ("CV Document not saved.") </script>';
                            echo '<script type="text/javascript"> window.location = "regApplication.php" </script>';
                          }

                    }else{
                      echo '<script type="text/javascript"> alert ("ID Document not saved.") </script>';
                      echo '<script type="text/javascript"> window.location = "regApplication.php" </script>';
                    }
                }else{

                  if(move_uploaded_file($_FILES['txtIDCard']['tmp_name'], $targetfolderID.$filenameID)){

                        if(move_uploaded_file($_FILES['txtCV']['tmp_name'], $targetfolderCV.$filenameCV)){

                          echo '<script type="text/javascript"> alert ("Hi '.$fname.', \nYou application has been submitted sucessfully to the HR department at Slomoes Corporation. \nWe will contact you for any further communications. \nAll the Best!!!") </script>';

                        }
                      }

                  echo '<script type="text/javascript"> window.location = "regApplication.php" </script>';
                }

          }else{
            echo '<script type="text/javascript"> alert ("Application was not submitted. Please try again") </script>';
            echo '<script type="text/javascript"> window.location = "regApplication.php" </script>';
          }



      }
    }
?>


  </body>
</html>
