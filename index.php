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
      <title>inVision</title>
      <link rel="icon" href="assets/images/icon.png" type="image/x-icon">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="namiG is a full work flow office management solution comprised of core modules including HR, Finance, Projects, Inventory management and still growing since 2018..." />
        <meta name="keywords" content="namiG, Intranet, Office Manager, Manaement Solution"/>
        <meta name="author" content="namiG"/>

        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600&amp;subset=latin-ext" rel="stylesheet">

        <!-- CSS -->
        <link href="asset/css/main.css" rel="stylesheet">

        <!-- JS -->
        <script src="asset/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="asset/js/vendor/jquery-1.12.0.min.js"></script>
    </head>



    <body oncontextmenu="return false;">
        <div class="site" id="page">
            <!-- <a class="skip-link sr-only" href="#main">Skip to content</a> -->

            <!-- Options headline effects: .rotate | .slide | .zoom | .push | .clip -->
            <section class="hero-section hero-section--image clearfix clip">
                <div class="hero-section__wrap">
                    <div class="hero-section__option">
                        <img src="asset/images/index.jpg" alt="Hero section image">
                    </div>
                    <!-- .hero-section__option -->

                    <div class="container">
                        <div class="row">
                            <div class="offset-lg-2 col-lg-8">
                                <div class="title-01 title-01--11 text-center">
                                  <h2>Feeding the Business Spirit</h2>
                                    <h2 class="title__heading">
                                        <!-- <span>We are</span> -->
                                        <strong class="hero-section__words">
                                          <span class="title__effect is-visible">Creativity</span>
                                            <span class="title__effect">Innovation</span>
                                            <span class="title__effect">Deligence</span>
                                        </strong>
                                    </h2>
                                    <div class="title__description">  <i>Brand partners with businesses all over the world to simplify everyday tasks!</i>  </div>
                                </div> <!-- .title-01 -->
                            </div>


                              <center>
                                <div class="table-responsive">
                                  <table>
                                    <tr>
                                      <td>
                                        <div class="title__action"> <a href="#" target="_blank" class="btn btn-link"> <br> OPEN MAPS <br><br> </a>  </div>
                                      </td>
                                      <td>
                                        <div class="title__action"> <a href="sign.php" class="btn btn-link"> <br> GET STARTED <br><br> </a>  </div>
                                      </td>
                                    </tr>

                                  </table>
                                </div>
                            </center>



<center>
  <br><br><br>
 <?php

 $query = @unserialize (file_get_contents('http://ip-api.com/php/'));
   if ($query && $query['status'] == 'success') {
       // echo 'Welcome from ' . $query['city'] . ', ' . $query['country'] . '<br> ' ;
       // echo $query['address'];
   }
     // foreach ($query as $data) {
     //     echo $data . "<br>";
     // }
  ?>
</center>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <!-- JS -->
        <script src="asset/js/plugins/animate-headline.js"></script>
        <script src="asset/js/main.js"></script>
    </body>
</html>
