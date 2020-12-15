<?php

    if(isset($_GET['stats'])=='Application') {
        $postCode = intval($_GET['postID']);
        $stat= $_GET['stats'];

        require 'dbconfig/config.php';
        $response = array();
        $query= "SELECT * FROM post WHERE postCode = '$postCode' ";
        $result = mysqli_query($con, $query);

          while($r = mysqli_fetch_assoc($result)) {

            $response[] = $r;
            $postName = $r['position'];
          }

        }else{
          echo '<script type="text/javascript"> window.location = "listCareers.php" </script>';
        }


function dropAppPost(){
        $myUser = $_SESSION['myusername'];
        require 'dbconfig/config.php';
        $response = array();
        $query= "SELECT * FROM post WHERE position != 'Admin' AND position != 'Administrator' AND position != 'Default' ";
        $result = mysqli_query($con, $query);

          while($r = mysqli_fetch_assoc($result)) {

            $response[] = $r;
            $id = $r['postCode'];
            $Name = $r['position'];
            $Discription = $r['jobDiscription'];

              echo "
                <option value='$id' title='$Discription'>$Name</option>
              ";
          }

          $result->close();

  }



  function displayUnderAgeLimit(){

    $date = date("Y-m-d H:i:s");
    $new_time = date("Y-m-d", strtotime("-18 years $date") );

    echo $new_time;
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







                                <div class="col-xl-12 col-md-12 m-b-30">
                                       <div class="tab-content" id="myTabContent">
                                         <div class="table-responsive">
                                           <form class="" action="process.php" method="POST" enctype="multipart/form-data">
                                             <table class="table">

<!-- /////.....///// -->
                                              <tr>
                                                <td colspan="3">
                                                  <br>
                                                  <h5>Part One: Personal Details:</h5>
                                                </td>

                                                <td></td>
                                                <td></td>
                                              </tr>
<!-- /////.....///// -->

                                               <tr>
                                                 <td></td>

                                                 <td>
                                                   <br>
                                                   Personal ID Number: <br>
                                                   <input type="number" class="form-control" name="txtPIN" placeholder="[eg: xxxxxxxxxxxxx]" minlength="13" maxlength="13" required>
                                                 </td>

                                                 <td>
                                                   <br>
                                                   Title: <br>
                                                   <select class="form-control" name="txtTitle" required>
                                                     <option value="" default disabled selected hidden>---SELECT---</option>
                                                     <option value="Mr">Mr.</option>
                                                     <option value="Miss">Miss.</option>
                                                     <option value="Mrs">Mrs.</option>
                                                     <option value="Ms">Ms.</option>
                                                   </select>
                                                 </td>
                                               </tr>


                                               <tr>
                                                 <td>
                                                   <br>
                                                   Last Name: <br>
                                                   <textarea class="form-control" name="txtLName" placeholder="[eg: Mabilisa]" minlength="3" maxlength="15" rows="1" cols="25" required></textarea>
                                                 </td>

                                                 <td>
                                                   <br>
                                                   First Name: <br>
                                                   <textarea class="form-control" name="txtFName" placeholder="[eg: Abraham]" minlength="3" maxlength="15" rows="1" cols="25" required></textarea>
                                                 </td>

                                                 <td>
                                                   <br>
                                                   Middle Name: ~optional <br>
                                                   <textarea class="form-control" name="txtMName" placeholder="[eg: Jacob]" minlength="3" maxlength="15" rows="1" cols="25"></textarea>
                                                 </td>
                                               </tr>


                                               <tr>
                                                 <td></td>

                                                 <td>
                                                   <br>
                                                   Contact Number: <br>
                                                   <input type="number" class="form-control" name="txtCell" placeholder="[eg: 7xxxxxxx]" minlength="8" maxlength="8" required>
                                                 </td>

                                                 <td>
                                                   <br>
                                                   Email Address: <br>
                                                   <input type="email" class="form-control" name="txtEmail" id="emailtext" onchange="extractEmails();" placeholder="[eg: yourname@example.com]" minlength="3" maxlength="100" required>
                                                 </td>

                                               </tr>


                                               <tr>
                                                 <td>

                                                 </td>

                                                 <td>
                                                   <br>
                                                   Date of Birth: <br>
                                                   <input type="date" class="form-control" name="txtDOB" min="" max="<?php displayUnderAgeLimit(); ?>" required>
                                                 </td>

                                                 <td>
                                                   <br>
                                                   Marital Status <br>
                                                   <select class="form-control" name="txtMarital" required>
                                                    <option value="" default selected disabled hidden>---Select---</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Engaged">Engaged</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Separated">Separated</option>
                                                    <option value="Divorced">Divorced</option>
                                                    <option value="Widowed">Widowed</option>
                                                    <option value="In a relationship">In a relationship</option>
                                                  </select>
                                                 </td>
                                               </tr>


                                               <tr>
                                                 <td>
                                                   <br>
                                                   Health Status <br>
                                                   <select class="form-control" name="txtHealth" required>
                                                     <option value="" default disabled selected hidden>---SELECT---</option>
                                                     <option value="Good And Healthy">Good And Healthy</option>
                                                     <option value="" disabled> ...... </option>
                                                     <option value="Allergies">Allergies</option>
                                                     <option value="Arthritis">Arthritis</option>
                                                     <option value="ART">ART</option>
                                                     <option value="Asthma">Asthma</option>
                                                     <option value="Cancer">Cancer</option>
                                                     <option value="Crippled">Crippled</option>
                                                     <option value="Diabetes">Diabetic</option>
                                                     <option value="Epilepsy">Epilepsy</option>
                                                     <option value="Hearing Disorder">Hearing Disorder</option>
                                                     <option value="Limping">Limping</option>
                                                     <option value="TB">TB</option>
                                                     <option value="Visually Impared">Visually Impared</option>
                                                     <option value="Other">Other</option>
                                                   </select>
                                                 </td>

                                                 <td>
                                                   <br>
                                                   Position you are applying for? <br>
                                                   <select class="form-control" name="txtPost" required>
                                                     <option value="<?php echo $postCode; ?>" default selected hidden><?php echo $postName; ?></option>

                                                   </select>
                                                 </td>

                                                 <td>
                                                   <br>
                                                   Duration of experience in the field selected? <br>
                                                   <input type="text" class="form-control" name="txtExpDuration" minlength="3" maxlength="15" placeholder="1 Year" required>
                                                 </td>
                                               </tr>


                                               <tr>
                                                 <td>
                                                   <br>
                                                   Country Of Origin: <br>
                                                   <select class="form-control" name="txtNationality" required>
                                                     <option value="" default selected disabled hidden>---select---</option>
                                                      <option value="Afganistan">Afghanistan</option>
                                                      <option value="Albania">Albania</option>
                                                      <option value="Algeria">Algeria</option>
                                                      <option value="American Samoa">American Samoa</option>
                                                      <option value="Andorra">Andorra</option>
                                                      <option value="Angola">Angola</option>
                                                      <option value="Anguilla">Anguilla</option>
                                                      <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                      <option value="Argentina">Argentina</option>
                                                      <option value="Armenia">Armenia</option>
                                                      <option value="Aruba">Aruba</option>
                                                      <option value="Australia">Australia</option>
                                                      <option value="Austria">Austria</option>
                                                      <option value="Azerbaijan">Azerbaijan</option>
                                                      <option value="Bahamas">Bahamas</option>
                                                      <option value="Bahrain">Bahrain</option>
                                                      <option value="Bangladesh">Bangladesh</option>
                                                      <option value="Barbados">Barbados</option>
                                                      <option value="Belarus">Belarus</option>
                                                      <option value="Belgium">Belgium</option>
                                                      <option value="Belize">Belize</option>
                                                      <option value="Benin">Benin</option>
                                                      <option value="Bermuda">Bermuda</option>
                                                      <option value="Bhutan">Bhutan</option>
                                                      <option value="Bolivia">Bolivia</option>
                                                      <option value="Bonaire">Bonaire</option>
                                                      <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                      <option value="Botswana">Botswana</option>
                                                      <option value="Brazil">Brazil</option>
                                                      <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                      <option value="Brunei">Brunei</option>
                                                      <option value="Bulgaria">Bulgaria</option>
                                                      <option value="Burkina Faso">Burkina Faso</option>
                                                      <option value="Burundi">Burundi</option>
                                                      <option value="Cambodia">Cambodia</option>
                                                      <option value="Cameroon">Cameroon</option>
                                                      <option value="Canada">Canada</option>
                                                      <option value="Canary Islands">Canary Islands</option>
                                                      <option value="Cape Verde">Cape Verde</option>
                                                      <option value="Cayman Islands">Cayman Islands</option>
                                                      <option value="Central African Republic">Central African Republic</option>
                                                      <option value="Chad">Chad</option>
                                                      <option value="Channel Islands">Channel Islands</option>
                                                      <option value="Chile">Chile</option>
                                                      <option value="China">China</option>
                                                      <option value="Christmas Island">Christmas Island</option>
                                                      <option value="Cocos Island">Cocos Island</option>
                                                      <option value="Colombia">Colombia</option>
                                                      <option value="Comoros">Comoros</option>
                                                      <option value="Congo">Congo</option>
                                                      <option value="Cook Islands">Cook Islands</option>
                                                      <option value="Costa Rica">Costa Rica</option>
                                                      <option value="Cote DIvoire">Cote DIvoire</option>
                                                      <option value="Croatia">Croatia</option>
                                                      <option value="Cuba">Cuba</option>
                                                      <option value="Curaco">Curacao</option>
                                                      <option value="Cyprus">Cyprus</option>
                                                      <option value="Czech Republic">Czech Republic</option>
                                                      <option value="Denmark">Denmark</option>
                                                      <option value="Djibouti">Djibouti</option>
                                                      <option value="Dominica">Dominica</option>
                                                      <option value="Dominican Republic">Dominican Republic</option>
                                                      <option value="East Timor">East Timor</option>
                                                      <option value="Ecuador">Ecuador</option>
                                                      <option value="Egypt">Egypt</option>
                                                      <option value="El Salvador">El Salvador</option>
                                                      <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                      <option value="Eritrea">Eritrea</option>
                                                      <option value="Estonia">Estonia</option>
                                                      <option value="Eswatini">Eswatini</option>
                                                      <option value="Ethiopia">Ethiopia</option>
                                                      <option value="Falkland Islands">Falkland Islands</option>
                                                      <option value="Faroe Islands">Faroe Islands</option>
                                                      <option value="Fiji">Fiji</option>
                                                      <option value="Finland">Finland</option>
                                                      <option value="France">France</option>
                                                      <option value="French Guiana">French Guiana</option>
                                                      <option value="French Polynesia">French Polynesia</option>
                                                      <option value="French Southern Ter">French Southern Ter</option>
                                                      <option value="Gabon">Gabon</option>
                                                      <option value="Gambia">Gambia</option>
                                                      <option value="Georgia">Georgia</option>
                                                      <option value="Germany">Germany</option>
                                                      <option value="Ghana">Ghana</option>
                                                      <option value="Gibraltar">Gibraltar</option>
                                                      <option value="Great Britain">Great Britain</option>
                                                      <option value="Greece">Greece</option>
                                                      <option value="Greenland">Greenland</option>
                                                      <option value="Grenada">Grenada</option>
                                                      <option value="Guadeloupe">Guadeloupe</option>
                                                      <option value="Guam">Guam</option>
                                                      <option value="Guatemala">Guatemala</option>
                                                      <option value="Guinea">Guinea</option>
                                                      <option value="Guyana">Guyana</option>
                                                      <option value="Haiti">Haiti</option>
                                                      <option value="Hawaii">Hawaii</option>
                                                      <option value="Honduras">Honduras</option>
                                                      <option value="Hong Kong">Hong Kong</option>
                                                      <option value="Hungary">Hungary</option>
                                                      <option value="Iceland">Iceland</option>
                                                      <option value="Indonesia">Indonesia</option>
                                                      <option value="India">India</option>
                                                      <option value="Iran">Iran</option>
                                                      <option value="Iraq">Iraq</option>
                                                      <option value="Ireland">Ireland</option>
                                                      <option value="Isle of Man">Isle of Man</option>
                                                      <option value="Israel">Israel</option>
                                                      <option value="Italy">Italy</option>
                                                      <option value="Jamaica">Jamaica</option>
                                                      <option value="Japan">Japan</option>
                                                      <option value="Jordan">Jordan</option>
                                                      <option value="Kazakhstan">Kazakhstan</option>
                                                      <option value="Kenya">Kenya</option>
                                                      <option value="Kiribati">Kiribati</option>
                                                      <option value="Korea North">Korea North</option>
                                                      <option value="Korea Sout">Korea South</option>
                                                      <option value="Kuwait">Kuwait</option>
                                                      <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                      <option value="Laos">Laos</option>
                                                      <option value="Latvia">Latvia</option>
                                                      <option value="Lebanon">Lebanon</option>
                                                      <option value="Lesotho">Lesotho</option>
                                                      <option value="Liberia">Liberia</option>
                                                      <option value="Libya">Libya</option>
                                                      <option value="Liechtenstein">Liechtenstein</option>
                                                      <option value="Lithuania">Lithuania</option>
                                                      <option value="Luxembourg">Luxembourg</option>
                                                      <option value="Macau">Macau</option>
                                                      <option value="Macedonia">Macedonia</option>
                                                      <option value="Madagascar">Madagascar</option>
                                                      <option value="Malaysia">Malaysia</option>
                                                      <option value="Malawi">Malawi</option>
                                                      <option value="Maldives">Maldives</option>
                                                      <option value="Mali">Mali</option>
                                                      <option value="Malta">Malta</option>
                                                      <option value="Marshall Islands">Marshall Islands</option>
                                                      <option value="Martinique">Martinique</option>
                                                      <option value="Mauritania">Mauritania</option>
                                                      <option value="Mauritius">Mauritius</option>
                                                      <option value="Mayotte">Mayotte</option>
                                                      <option value="Mexico">Mexico</option>
                                                      <option value="Midway Islands">Midway Islands</option>
                                                      <option value="Moldova">Moldova</option>
                                                      <option value="Monaco">Monaco</option>
                                                      <option value="Mongolia">Mongolia</option>
                                                      <option value="Montserrat">Montserrat</option>
                                                      <option value="Morocco">Morocco</option>
                                                      <option value="Mozambique">Mozambique</option>
                                                      <option value="Myanmar">Myanmar</option>
                                                      <option value="Nambia">Nambia</option>
                                                      <option value="Nauru">Nauru</option>
                                                      <option value="Nepal">Nepal</option>
                                                      <option value="Netherland Antilles">Netherland Antilles</option>
                                                      <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                      <option value="Nevis">Nevis</option>
                                                      <option value="New Caledonia">New Caledonia</option>
                                                      <option value="New Zealand">New Zealand</option>
                                                      <option value="Nicaragua">Nicaragua</option>
                                                      <option value="Niger">Niger</option>
                                                      <option value="Nigeria">Nigeria</option>
                                                      <option value="Niue">Niue</option>
                                                      <option value="Norfolk Island">Norfolk Island</option>
                                                      <option value="Norway">Norway</option>
                                                      <option value="Oman">Oman</option>
                                                      <option value="Pakistan">Pakistan</option>
                                                      <option value="Palau Island">Palau Island</option>
                                                      <option value="Palestine">Palestine</option>
                                                      <option value="Panama">Panama</option>
                                                      <option value="Papua New Guinea">Papua New Guinea</option>
                                                      <option value="Paraguay">Paraguay</option>
                                                      <option value="Peru">Peru</option>
                                                      <option value="Phillipines">Philippines</option>
                                                      <option value="Pitcairn Island">Pitcairn Island</option>
                                                      <option value="Poland">Poland</option>
                                                      <option value="Portugal">Portugal</option>
                                                      <option value="Puerto Rico">Puerto Rico</option>
                                                      <option value="Qatar">Qatar</option>
                                                      <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                      <option value="Republic of Serbia">Republic of Serbia</option>
                                                      <option value="Reunion">Reunion</option>
                                                      <option value="Romania">Romania</option>
                                                      <option value="Russia">Russia</option>
                                                      <option value="Rwanda">Rwanda</option>
                                                      <option value="St Barthelemy">St Barthelemy</option>
                                                      <option value="St Eustatius">St Eustatius</option>
                                                      <option value="St Helena">St Helena</option>
                                                      <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                      <option value="St Lucia">St Lucia</option>
                                                      <option value="St Maarten">St Maarten</option>
                                                      <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                      <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                      <option value="Saipan">Saipan</option>
                                                      <option value="Samoa">Samoa</option>
                                                      <option value="Samoa American">Samoa American</option>
                                                      <option value="San Marino">San Marino</option>
                                                      <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                      <option value="Saudi Arabia">Saudi Arabia</option>
                                                      <option value="Senegal">Senegal</option>
                                                      <option value="Seychelles">Seychelles</option>
                                                      <option value="Sierra Leone">Sierra Leone</option>
                                                      <option value="Singapore">Singapore</option>
                                                      <option value="Slovakia">Slovakia</option>
                                                      <option value="Slovenia">Slovenia</option>
                                                      <option value="Solomon Islands">Solomon Islands</option>
                                                      <option value="Somalia">Somalia</option>
                                                      <option value="South Africa">South Africa</option>
                                                      <option value="Spain">Spain</option>
                                                      <option value="Sri Lanka">Sri Lanka</option>
                                                      <option value="Sudan">Sudan</option>
                                                      <option value="Suriname">Suriname</option>
                                                      <option value="Sweden">Sweden</option>
                                                      <option value="Switzerland">Switzerland</option>
                                                      <option value="Syria">Syria</option>
                                                      <option value="Tahiti">Tahiti</option>
                                                      <option value="Taiwan">Taiwan</option>
                                                      <option value="Tajikistan">Tajikistan</option>
                                                      <option value="Tanzania">Tanzania</option>
                                                      <option value="Thailand">Thailand</option>
                                                      <option value="Togo">Togo</option>
                                                      <option value="Tokelau">Tokelau</option>
                                                      <option value="Tonga">Tonga</option>
                                                      <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                      <option value="Tunisia">Tunisia</option>
                                                      <option value="Turkey">Turkey</option>
                                                      <option value="Turkmenistan">Turkmenistan</option>
                                                      <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                      <option value="Tuvalu">Tuvalu</option>
                                                      <option value="Uganda">Uganda</option>
                                                      <option value="United Kingdom">United Kingdom</option>
                                                      <option value="Ukraine">Ukraine</option>
                                                      <option value="United Arab Erimates">United Arab Emirates</option>
                                                      <option value="United States of America">United States of America</option>
                                                      <option value="Uraguay">Uruguay</option>
                                                      <option value="Uzbekistan">Uzbekistan</option>
                                                      <option value="Vanuatu">Vanuatu</option>
                                                      <option value="Vatican City State">Vatican City State</option>
                                                      <option value="Venezuela">Venezuela</option>
                                                      <option value="Vietnam">Vietnam</option>
                                                      <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                      <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                      <option value="Wake Island">Wake Island</option>
                                                      <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                      <option value="Yemen">Yemen</option>
                                                      <option value="Zaire">Zaire</option>
                                                      <option value="Zambia">Zambia</option>
                                                      <option value="Zimbabwe">Zimbabwe</option>
                                                   </select>
                                                 </td>
                                                 <td colspan="2">
                                                   <br>
                                                   Residential Address: ~Please be specific<br>
                                                   <textarea class="form-control" name="txtResi" placeholder="[eg: Extension 4, Past the traffic circle...]" minlength="10" maxlength="1000" rows="3" cols="50" required></textarea>
                                                 </td>
                                                 <td></td>
                                               </tr>



<!-- /////.....///// -->
                                               <tr>
                                                 <td colspan="3">
                                                   <br>
                                                   <h5>Part Two: A little about you:</h5>
                                                 </td>

                                                 <td></td>
                                                 <td></td>
                                               </tr>
<!-- /////.....///// -->
<script type="text/javascript">
 window.onload = function() {
   document.getElementById('depCount').style.display = 'none';
    document.getElementById('yesDep').style.display = 'none';
    document.getElementById('noDep').style.display = 'none';

}
function yesnoDep() {
    if (document.getElementById('yesDep').checked) {
        document.getElementById('depCount').style.display = 'table-row';
        document.getElementById('depLabel').innerHTML = "<span style='color: red;'>Please specify how many people are depending on you:</span>";
        document.getElementById('depCount').required = true;
    }
    else if(document.getElementById('noDep').checked) {
        document.getElementById('depCount').style.display = 'none';
        document.getElementById("depLabel").innerHTML = "<span style='color: red;'>I have 0 dependents!:</span>";
        document.getElementById('depCount').required = false;
   }
}

</script>
                                              <tr>
                                                  <td>
                                                    <br>
                                                    Do you have any dependents? <br><br>
                                                    .::Yes <input type="radio" class="" name="txtDependents" onclick="javascript:yesnoDep();" id="yesDep" value="Yes" required>
                                                    .::No <input type="radio" class="" name="txtDependents" onclick="javascript:yesnoDep();" id="noDep" value="No" required>
                                                  </td>

                                                  <td>
                                                    <br>
                                                    <span id="depLabel"></span> <br>
                                                    <select class="form-control" id="depCount" name="txtDependentsRange" >
                                                      <option value="" default selected disabled hidden>---Select---</option>
                                                      <option value="1-3">1-3 Dependents</option>
                                                      <option value="4-9 Dependents">4-9 Dependents</option>
                                                      <option value="10+ Dependents"> 10+ Dependents</option>
                                                    </select>
                                                  </td>

                                                  <td>
                                                    <br>
                                                    Do you have any relative(s) currently working for Slomoes Corporation? <br><br>
                                                    .::Yes <input type="radio" class="" onclick="javascript:yesnoCheck();" id="yesCheck" name="txtRelatives" value="Yes" required>
                                                    .::No <input type="radio" class="" onclick="javascript:yesnoCheck();" id="noCheck" name="txtRelatives" value="No" required>
                                                    <b><p id="message"></p></b>
                                                  </td>
                                              </tr>


                                              <tr  id="childControl1" >
                                                <td>
                                                  <br>
                                                  Relative Name: <br>
                                                  <input type="text" class="form-control" id="child1" name="txtRelName" minlength="5" maxlength="30" placeholder="[eg: Jabulile Mashwama]" >
                                                </td>

                                                <td id="">
                                                  <br>
                                                  Relative Position at Slomoes?: <br>
                                                  <select class="form-control" id="child2" name="txtRelPost">
                                                    <option value="" default disabled selected hidden>---SELECT---</option>
                                                    <?php  ?>
                                                  </select>
                                                </td>

                                                <td id="">
                                                  <br>Relative is my: <br>
                                                  <select class="form-control" id="child3" name="txtRelRelation" >
                                                    <option value="" default selected disabled hidden>---Select---</option>
                                                    <option value="Wife">Wife</option>
                                                    <option value="Husband">Husband</option>
                                                    <option value="Mother">Mother</option>
                                                    <option value="Father">Father</option>
                                                    <option value="GrandMother">GrandMother</option>
                                                    <option value="GrandFather">GrandFather</option>
                                                    <option value="Aunt">Aunt</option>
                                                    <option value="Uncle">Uncle</option>
                                                    <option value="Sister">Sister</option>
                                                    <option value="Brother">Brother</option>
                                                    <option value="Daughter">Daughter</option>
                                                    <option value="Son">Son</option>
                                                    <option value="Niece">Niece</option>
                                                    <option value="Nephew">Nephew</option>
                                                  </select>
                                                </td>
                                              </tr>
<script type="text/javascript">
 window.onload = function() {
   document.getElementById('childControl1').style.display = 'none';
    document.getElementById('ifYes').style.display = 'none';
    document.getElementById('ifNo').style.display = 'none';

}
function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('childControl1').style.display = 'table-row';
        document.getElementById('message').innerHTML = "<span style='color: red;'>Please fill in the fields below.</span>";
        document.getElementById('child1').required = true;
        document.getElementById('child2').required = true;
        document.getElementById('child3').required = true;
    }
    else if(document.getElementById('noCheck').checked) {
        document.getElementById('childControl1').style.display = 'none';
        document.getElementById("message").innerHTML = "";
        document.getElementById('child1').required = false;
        document.getElementById('child2').required = false;
        document.getElementById('child3').required = false;
   }
}

</script>

<!-- /////.....///// -->
                                               <tr>
                                                 <td colspan="3">
                                                   <br>
                                                   <h5>Part Three: Qualifications:</h5>
                                                 </td>

                                                 <td></td>
                                                 <td></td>
                                               </tr>
<!-- /////.....///// -->

                                               <tr>
                                                 <td>
                                                   <br>
                                                   Highest Qualifications Obtained?: <br>
                                                   <input type="text" class="form-control" name="txtHQ" placeholder="[eg: BSc in Information Technology]" minlength="10" maxlength="1000" required>
                                                 </td>

                                                 <td>
                                                   <br>
                                                   Institute/School/University/College Name?: <br>
                                                   <input type="text" class="form-control" name="txtHQInstitute" placeholder="[eg: University of Eswatini]" minlength="10" maxlength="1000" required>
                                                 </td>

                                                 <td>
                                                   <br>
                                                   Highest Qualification Graduation/Completion Year?: <br>
                                                   <input type="number" class="form-control" name="txtHQYear" placeholder="[eg: 2010]" minlength="4" maxlength="4" required>
                                                 </td>
                                               </tr>

<!-- /////.....///// -->
                                              <tr>
                                                <td colspan="3">
                                                  <br>
                                                  <h5>Part Four: The Accompanying Documents:</h5>
                                                </td>

                                                <td></td>
                                                <td></td>
                                              </tr>
<!-- /////.....///// -->

                                              <tr>
                                                <td>
                                                  <br>
                                                  Quality Photo Of Personal ID Card?: <br>
                                                  <input type="file" class="form-control" name="txtIDCard" placeholder="[eg: Attach JPEG]" accept="image/jpeg" required>
                                                </td>,

                                                <td>
                                                  <br>
                                                  Attach Your CV: <br>
                                                  <input type="file" class="form-control" name="txtCV" placeholder="[eg: Attach PDF]" accept="application/pdf" required>
                                                </td>

                                                <td>
                                                  <br>
                                                  Languages You Speak?: <br>
                                                  <input type="text" class="form-control" name="txtLanguage" placeholder="[eg: siSwati, English...]" minlength="5" maxlength="100" required>
                                                </td>
                                              </tr>

                                               <tr>
                                                 <td colspan="3">
                                                   <br>
                                                   <center>
                                                     <button type="submit" name="BtnSubmitJobApplication" class="btn btn-success">Submit Application</button>
                                                     <button type="Reset" name="#" class="btn btn-secondary" >Reset</button>
                                                   </center>
                                                 </td>
                                                 <td></td>
                                                 <td></td>
                                               </tr>

                                             </table>
                                           </form>
                                         </div>
                                       </div>
                                   </div>
                                <!--[ Recent Users ] end-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </center>
  </body>
</html>
