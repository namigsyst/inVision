<?php

function displayOpenPost(){

           require 'dbconfig/config.php';
           $response = array();

           $date = date("Y-m-d H:i:s");
           $TrueNow = date("Y-m-d H:i:s", strtotime("+6 hours $date") );

               $query = "SELECT a.*,b.* FROM post a JOIN postcontrol b WHERE a.postCode = b.postCode AND b.expirationDate >= '$TrueNow' ";
               $result = mysqli_query($con, $query) or die("No Open Posts Yet");

               while($rows = mysqli_fetch_assoc($result)) {
                   $response[] = $rows;


                   $id = $rows['postCntrlCode'];
                   $post = $rows['postCode'];
                   $position = $rows['position'];
                   $jobDisc = $rows['jobDiscription'];

                   $published = $rows['publishDate'];
                   $expiration = $rows['expirationDate'];
                   $requirements = $rows['requirement'];

                   $publishDated = date("D, M jS , Y", strtotime("+6 hours $published") );

                   $date = date("Y-m-d H:i:s");
                   $new_time = date("Y-m-d H:i:s", strtotime("+6 hours $date") );

                   $date1 = strtotime("$new_time");
                   $date2 = strtotime("$expiration");


                       $diff = abs($date2 - $date1);
                       $years = floor($diff / (365*60*60*24));
                       $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                       $days = floor(($diff - $years * 365*60*60*24 -  $months*30*60*60*24)/ (60*60*24));
                       $hours = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24) / (60*60));
                       $minutes = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24  - $hours*60*60)/ 60);

                       if($months == "0" AND $days == "0" AND $years == "0"){
                         $Duration = ("Post opening expires in $hours Hr(s) & $minutes Min(s)");
                       }elseif($days <= "29" AND $months == "0"){
                         $Duration = ("Post opening expires in $days Day(s) & $hours Hr(s)");
                       }elseif($months >= "1" AND $months <= "11" AND $years == "0"){
                         $Duration = ("Post opening expires in $months Mon(s) & $days Day(s)");
                       }else{
                         $Duration = ("$years Yr(s) | $months Mon(s) | $days Day(s) Ago");
                       }


                   echo "

                            <a href='#' data-toggle='collapse' data-target='#$id' aria-expanded='false' aria-controls='$id' title='Click here for more...'>
                             <div class='card-header accordionHover' id='heading' >
                                  <h4 class='mb-12 feather icon-user'> Job Title: $position</h4>
                             </div>
                             </a>
                             <div id='$id' class='card-body collapse' aria-labelledby='headingOne' data-parent='#accordionExample'>
                               <table class='table table-hover'  id='example' class='display' style='width:100%'>
                                   <tr>
                                    <td class='wrappable'>
                                      <h3> Job Discription: </h3>
                                        <br>
                                        <textarea class='form-control' rows='8' readonly > $jobDisc </textarea>

                                      <h3> Other Job Requirement(s): </h3>
                                        <br> $requirements

                                      <br> <a class='btn btn-success btn-sm' name='Apply' href='regApplication.php?postID=$post&stats=Application' title='Tick this button to Apply'> <span class='feather icon-user-plus'></span> <strong> Apply Today </strong></a>

                                      <center>
                                        Open Since: $publishDated
                                        <br> $Duration
                                      </center>
                                    </td>
                                   </tr>

                               </table>
                             </div>


                       ";

           }
         $result->close();
       }



?>

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

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="../css/tables/jquery.dataTables.min.css">

    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/keeper.js"></script>
  </head>
  <body oncontextmenu="return false;">
    <center>
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">



                                <!--[ Announcemnets ] start-->
                                <div class="col-xl-12 col-md-12">
                                    <div class="card Recent-Users">
                                        <div class="card-header">
                                            <h5>Ready To Join Our Group? </h5> If not, head<a href="index.php"  title="Click to get back to Home Page"> Back Home!</a>

                                            <br><br>
                                            <span>Invite Someone To Apply?</span>
                                            <input id="btnPassport" class="btn btn-success" type="button" value="Yes" onclick="ShowHideDiv(this)" />
                                            <hr />
                                            <div id="dvPassport" style="display: none">

                                              <div class="table-responsive">
                                                <center>
                                                  <form class="" action="process.php" method="POST">
                                                    <table>
                                                      <tr>
                                                        <td>
                                                          <br>
                                                          My Email Address: <br>
                                                          <input type="email" class="form-control" name="txtInviteMyEmail" placeholder="youname@example.com" required>
                                                        </td>

                                                        <td>
                                                          <br>
                                                          Friend's Email Address: <br>
                                                          <input type="email" class="form-control" name="txtInviteFrEmail" placeholder="friendname@example.com" required>
                                                        </td>
                                                      </tr>


                                                      <tr>
                                                        <td>
                                                          <br>
                                                          Friend's Name: <br>
                                                          <textarea minlength="3" class="form-control" name="txtInviteFrName" placeholder="Frank" rows="1" cols="80" minlength="15" required></textarea>
                                                        </td>

                                                        <td>
                                                          <br><br><br><br>
                                                          Message: <small>*Feel free to customise this message before sending, just remember to keep the email link unchanged for your friend to use</small> <br>
                                                          <textarea class="form-control" name="txtInviteMessage" rows="4" cols="80" minlength="15" required>Your friend has sent you a link to apply for a job at Slomoes Corporation. Click on the link below to apply.
                                                          </textarea>
                                                        </td>
                                                      </tr>

                                                      <tr>
                                                        <td colspan="2">
                                                          <br>
                                                          <center>
                                                            <button type="submit" name="BtnSubmitInvitation" class="btn btn-success">Submit Application</button>
                                                            <button type="Reset" name="#" class="btn btn-secondary" >Reset</button>
                                                          </center>
                                                        </td>
                                                        <td></td>
                                                      </tr>
                                                    </table>
                                                  </form>
                                                </center>
                                              </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <script type="text/javascript">
                                    function ShowHideDiv(btnPassport) {
                                        var dvPassport = document.getElementById("dvPassport");
                                        if (btnPassport.value == "Yes") {
                                            dvPassport.style.display = "block";
                                            btnPassport.value = "Not Now";
                                        } else {
                                            dvPassport.style.display = "none";
                                            btnPassport.value = "Yes";
                                        }
                                    }
                                </script>







                                <div class="col-xl-12 col-md-12">
                                  <div class="card-header">
                                      <h5> Career Oppotunities @ Slomoes Corporation </h5>
                                  </div>
                                    <div class="card Recent-Users">

                                        <div class="card-block px-0 py-1">
                                            <div class="table-responsive">

                                              <div class='accordion' id='accordionExample'>
                                                <div class='card'>
                                                  <?php displayOpenPost(); ?>
                                                </div>
                                              </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ posts ] end -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </center>
  </body>
</html>
