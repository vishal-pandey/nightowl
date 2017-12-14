<?php
  include './admin/content/configure.php';
?>
<!DOCTYPE html>
<!-- saved from url=(0023)http://currenthaus.com/ -->
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=0">
    <meta name="robots" content="index, follow">
    <title>Nite Owl</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="countdown/jquery.countdown.css" />
    <!---<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">---->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="css/theme.css" type="text/css"> -->
    <!----<link rel="stylesheet" href="css/main.css" type="text/css">---->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!---- <link rel="stylesheet" href="css/set1.css" type="text/css">---->
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link href="css/lightgallery.css" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="css/smoothgallery.css">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />
    <link href="https://api.instagram.com/oembed?url=http://instagr.am/p/fA9uwTtkSN/">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!--- <style type="text/css">
         #carousel div {
         text-align: center;
         width: 230px;
         height: 200px;
         float: left; 
         }
         #carousel div img {
         border: none;
         }

         </style>------>
    <style>
        .navbar-brand,
        .navbar-nav > li > a {
            color: #fff;
            font-family: 'AvantGarde-bold';
        }
    </style>
    <style type="text/css">
        .demo-gallery {
            z-index: 10000;
        }
        
        .demo-gallery > ul {
            margin-bottom: 0;
        }
        
        .demo-gallery > ul > li {
            float: left;
            margin-bottom: 15px;
            width: 20%;
        }
        
        .demo-gallery > ul > li a {
            border: 3px solid #FFF;
            border-radius: 3px;
            display: block;
            overflow: hidden;
            position: relative;
            float: left;
        }
        
        .demo-gallery > ul > li a > img {
            -webkit-transition: -webkit-transform 0.15s ease 0s;
            -moz-transition: -moz-transform 0.15s ease 0s;
            -o-transition: -o-transform 0.15s ease 0s;
            transition: transform 0.15s ease 0s;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
            height: 100%;
            width: 100%;
        }
        
        .demo-gallery > ul > li a:hover > img {
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
        }
        
        .demo-gallery > ul > li a:hover .demo-gallery-poster > img {
            opacity: 1;
        }
        
        .demo-gallery > ul > li a .demo-gallery-poster {
            background-color: rgba(0, 0, 0, 0.1);
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            -webkit-transition: background-color 0.15s ease 0s;
            -o-transition: background-color 0.15s ease 0s;
            transition: background-color 0.15s ease 0s;
        }
        
        .demo-gallery > ul > li a .demo-gallery-poster > img {
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            opacity: 0;
            position: absolute;
            top: 50%;
            -webkit-transition: opacity 0.3s ease 0s;
            -o-transition: opacity 0.3s ease 0s;
            transition: opacity 0.3s ease 0s;
        }
        
        .demo-gallery > ul > li a:hover .demo-gallery-poster {
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        .demo-gallery .justified-gallery > a > img {
            -webkit-transition: -webkit-transform 0.15s ease 0s;
            -moz-transition: -moz-transform 0.15s ease 0s;
            -o-transition: -o-transform 0.15s ease 0s;
            transition: transform 0.15s ease 0s;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
            height: 100%;
            width: 100%;
        }
        
        .demo-gallery .justified-gallery > a:hover > img {
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
        }
        
        .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
            opacity: 1;
        }
        
        .demo-gallery .justified-gallery > a .demo-gallery-poster {
            background-color: rgba(0, 0, 0, 0.1);
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            -webkit-transition: background-color 0.15s ease 0s;
            -o-transition: background-color 0.15s ease 0s;
            transition: background-color 0.15s ease 0s;
        }
        
        .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            opacity: 0;
            position: absolute;
            top: 50%;
            -webkit-transition: opacity 0.3s ease 0s;
            -o-transition: opacity 0.3s ease 0s;
            transition: opacity 0.3s ease 0s;
        }
        
        .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        .demo-gallery .video .demo-gallery-poster img {
            height: 48px;
            margin-left: -24px;
            margin-top: -24px;
            opacity: 0.8;
            width: 48px;
        }
        
        .demo-gallery.dark > ul > li a {
            border: 3px solid #04070a;
        }
        
        .home .demo-gallery {
            padding-bottom: 80px;
        }
        
        .gallery-bg .bx-wrapper img {
            display: inline !important;
        }
        
        #lightgallery .bx-wrapper li {
            width: 100% !important;
        }
    </style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110671546-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110671546-1');
</script>
</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!---------------------facebook feed-------------->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9&appId=141927756191274";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!---------------------/ facebook feed-------------->
    <header class="stickyicky">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container navbar-align">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse" id="ChangeToggle" aria-expanded="false" aria-controls="navbar">
                        <div id="navbar-hamburger">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </div>
                        <div id="navbar-close" class="hidden">
                            <span class="glyphicon glyphicon-remove"></span>
                        </div>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li>
                            <a class="page-scroll" href="#page-top">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#gallery">Gallery</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#team">Team</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#social">Social</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-------Nav Mobile------>
        
    </header>
    <section id="intro" class="intro-section">
        <div id="section1">
            <!------------------------Countdown Adjust timing in script.js-------------->
            <!--<div id="text_adjust">
                <h3 ><span id="count_text"><b>Season 2</b></span> <br>
                <b id="count_text1">Live Now</b> </h3></div>-->
            <!--<div id="countdown"><h2>Season 2 Coming In </h2></div>-->
            <!------------------------/Countdown-------------->
            <div class="row z-index-medium">
                <div class="col-sm-12 bnr_text">
                    <!---<img src="images/dlf-logo.png" class="centre-block dlf-logo">
                  <h3>Presents</h3>---->
                    <img src="images/dlf_presents.png" class="img-responsive center-block dlf_presents_logo">
                    <img src="images/night-owl-logo-1.png" class="centre-block nightowl-logo ">
                    <!----<h2>Food. Music. Shopping. Entertainment.</h2>---->
                    <!--<img src="images/next-level-logo_1.png" class="centre-block nextlevel-logo">-->
                </div>
            </div>
            <img src="images/dot-bg.png" class="img-responsive center-block main-position">
            <div class="row bg-slider for-desktop">
                <div class="">
                    <ul class="bxslider " id="slider">

                        <li><img src="images/banner-22.png"></li>
                    </ul>

                </div>

            </div>
            <!----For Mobile---->
            <div class="row bg-slider for-mobile">
                <div class="">
                    <ul class="bxslider1 " id="slider1">

                        <li><img src="images/banner-22-m.png"></li>

                    </ul>

                </div>

            </div>

            <!----/ For Mobile---->
        </div>
    </section>
    <!------------------About------------------>
    <section id="about" class="about-section">
        <div class="row  ">
            <div class="col-sm-12 about-sec pddn">
                <h1>ABOUT</h1>
                <div class="align_text">
                <?php
                    include './admin/content/configure.php';
                    $sql1 = "select * from about where id = 'About'";
                    $result = $conn->query($sql1);
                    $row = $result->fetch_assoc();
                    echo $row['value'];
                ?>



                </div>
            </div>
        </div>
        <div class="row pddn">
            <div class="col-sm-12" style="float:none;">
                <div class="see-ours">
                    <div class="translate">
                        <h1>See our <span><img src="images/see-our-arrow.png"></span></h1>
                    </div>
                    <ul class="pddn">
                        <li class="displ_flex">
                            <img src="images/exhibitors.png" class="exhib_png">
                            <h2 id="exhibitors"><a href="exhibitors.html">EXHIBITORS <span><img src="images/arrow-go.png"></span></a></h2>
                        </li>
                        <li class="displ_flex">
                            <img src="images/media.png" class="media_png">
                            <h2 id="media"><a href="media.php">MEDIA <span><img src="images/arrow-go.png"></span></a></h2>
                        </li>
                        <li class="displ_flex">
                            <img src="images/artist.png" class="artist_png">
                            <h2 id="artist"><a href="artist.php">ARTIST <span><img src="images/arrow-go.png"></span></a></h2>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!------------------Gallery------------------>
    <section id="gallery" class="gallery-section">
        <div class="row gallery-bg pddn">
            <div class="col-sm-12 ">
                <h1>GALLERY</h1>

            </div>
            <div class="col-sm-10 col-sm-offset-1">
                <ul class="nav nav-tabs pddn_50">
                    <li class="active dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Images <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php
                                $sql = "select * from gallery";
                                $result = $conn->query($sql);
                                $i = 1;
                                while ($row = $result->fetch_assoc()) {
                                  $active = "";
                                  if ($i==1) {
                                    $active = " active";
                                    $i = 0;
                                  }
                                  $season = $row['seasons'];
                                  $seasonl = str_replace(" ", "-", $season);

                                  // echo '<li class= "'.$active.'"><a data-toggle="tab" href="#'.$seasonl.'">'.$season.'</a></li>';
                                  echo '<li><a data-toggle="tab" href="#'.$seasonl.'">'.$season.'</a></li>';
                                }
                              ?>
                            <!-- <li><a data-toggle="tab" href="#images-1">Season 1</a></li> -->
                            <!-- <li><a data-toggle="tab" href="#images-2">Season 2</a></li> -->

                        </ul>
                    </li>
                    <li class=" dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Videos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="tab" href="#videos-1">Season 1</a></li>
                            <!---<li><a  data-toggle="tab" href="#videos-2">Season 2</a></li>---->

                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    

                    <?php
                      $sql = "select * from gallery";
                      $result = $conn->query($sql);
                      $i=1;
                      while ($row = $result->fetch_assoc()) {
                        $active = "";
                        if ($i==1) {
                          $active = "in active";
                          $i = 0;
                        }

                        $season = $row['seasons'];
                        $seasonl = str_replace(" ", "-", $season);

                        echo '<div id="'.$seasonl.'" class="tab-pane fade '.$active.'">';
                          echo '<h3>'.$season.'</h3>';


                          // echo '<main>';
                          echo '<div class="demo-wrap"><br><br><div class="demo-gallery"><ul id="lightgallery1" class="list-unstyled row bxslider_44">';
                           // echo '<div class="row">';

                          $dir1 = "./images/gallery/".$season."/";
                          $dir = "./images/gallery/".$season."/";

                          if (is_dir($dir)){
                            if ($dh = opendir($dir)){
                              while (($file = readdir($dh)) !== false){
                                if (!is_dir($file) && $file != 'thumb') {
                                  // $filen = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
                                  // echo '<div class="col-xs-12 col-md-4">
                                  //     <img src="'.$dir1.$file.'" class="img-responsive ">
                                  //     <h4>'.$filen.'</h4>
                                  // </div>';


                                echo '<li class="" data-responsive="'.$dir1.$file.' 375, '.$dir1.$file.' 480, '.$dir1.$file.' 800" data-src="'.$dir1.$file.'">
                                        <a href="">
                                            <img class="img-responsive" src="'.$dir1.$file.'">
                                        </a>
                                    </li>';


                                  // echo '<div class="col-xs-6 col-md-3">
                                  //         <a href="'.$dir1.$file.'" class="thumbnail" title="">
                                  //             <img src="'.$dir1.$file.'" alt="" class="img-t">
                                  //         </a>
                                  //     </div>';
                                  

                                }
                              }
                              closedir($dh);
                            }
                          }
                          echo '</ul>';
                          echo '</div>';
                          echo '</div>';
                        echo '</div>';
                      }
                    ?>
                    <div id="videos-1" class="tab-pane fade in ">
                        <h3>Season 1</h3>
                        <div class="demo-wrap">
                            <br>
                            <br>
                            <div class="row demo-gallery">
                                <div class="col-lg-6 col-lg-offset-3 col-xs-10 col-xs-offset-1">
                                    <iframe class="video_section" src="https://www.youtube.com/embed/Ke7ZiOVLuKg" frameborder="0" allowfullscreen></iframe>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div id="videos-2" class="tab-pane fade in ">
                        <h3>Season 2</h3>
                        <h1 id="coming_soon">COMING SOON</h1>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!------------------Team------------------>
    <section id="team" class="team-section">
        <div class="row team-sec pddn">
            <div class="col-sm-10 col-sm-offset-1 ">
                <h1>TEAM</h1>

                <div class="flex-container pddn_50">
                    <div class=" img__wrap">
                        <img class="img__img" src="images/team/1.png" class="img-responsive">
                        <div class="img__description_layer">
                            <h3 class="img__description">Kalpana Singh <br><span>Head Marketing</span></h3>
                            <br>
                        </div>
                    </div>
                    <div class=" img__wrap">
                        <img class="img__img" src="images/team/2.png" class="img-responsive">
                        <div class="img__description_layer">
                            <h3 class="img__description">Ankit Saggi <br><span>Sponsorship & Brand Association</span></h3>
                            <br>
                        </div>
                    </div>
                    <div class=" img__wrap">
                        <img class="img__img" src="images/team/3.png" class="img-responsive">
                        <div class="img__description_layer">
                            <h3 class="img__description">Gurpreet Gandhi <br><span>PR & Social Media Marketing</span></h3>
                            <br>
                        </div>
                    </div>
                    <div class=" img__wrap">
                        <img class="img__img" src="images/team/4.png" class="img-responsive">
                        <div class="img__description_layer">
                            <h3 class="img__description">Bhavya Dua <br><span>Advertising</span></h3>
                            <br>
                        </div>
                    </div>

                </div>
                <!--<div class="flex-container bottom_team">
                    <div class=" img__wrap">
                        <img class="img__img" src="images/team/5.png" class="img-responsive">
                        <div class="img__description_layer">
                            <h3 class="img__description">Ayush Choudhary <br><span>founder and CEO DforDelhi</span></h3>
                            <br>
                        </div>
                    </div>
                    <div class=" img__wrap">
                        <img class="img__img" src="images/team/6.png" class="img-responsive">
                        <div class="img__description_layer">
                            <h3 class="img__description">Aarti Sharma <br><span>COO Dfordelhi</span></h3>
                            <br>
                        </div>
                    </div>
                    <div class=" img__wrap">
                        <img class="img__img" src="images/team/7.png" class="img-responsive">
                        <div class="img__description_layer">
                            <h3 class="img__description">Ahmad Faraz <br><span>Business Head, Events DforDelhi </span></h3>
                            <br>
                        </div>
                    </div>

                </div>-->
            </div>

        </div>
    </section>
    <!------------------Social------------------>
    <section id="social" class="social-section">
        <div class="row social-sec pddn">
            <div class="col-sm-12">
                <h1>FEEDS</h1>
                <div class="pddn_50">
                    <!----<script src="//www.powr.io/powr.js"></script> 
            <div class="powr-social-feed" id="2c03ab29_1499423223"></div>----->
                    <!----------------Instagram feed---------------->
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 feed_embd">
                            <!--<script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
                            <link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
                            <ul class="juicer-feed" data-feed-id="theniteowlfestival" data-per="6">
                                <h1 class="referral"></h1></ul>-->
                            
                            
                            <script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
                            <link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
                            <ul class="juicer-feed" data-feed-id="theniteowlfestival" data-per="6">
                                <h1 class="referral"></h1></ul>
                            
                            
                            
                        </div>
                    </div>

                    <!----------------/ Instagram feed------------------>

                    <div class="fb-page" data-href="https://www.facebook.com/thenightowlfestival/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                        <blockquote cite="https://www.facebook.com/thenightowlfestival/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thenightowlfestival/">The Night Owl Festival</a></blockquote>
                    </div>

                    <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact-section">
        <div class="row social-sec pddn_50">
            <div class="col-sm-10 col-sm-offset-1">
                <h1>CONTACT US</h1>
                <div class="row pddn_100">
                    <div class="col-sm-4 col-xs-12 contact_info">
                        <h3>DLF Place, Saket <br>
                        A4, District Centre, Press Enclave Road,<br>
                            Saket, New Delhi - 110017<br>
                        Info Desk: 011-46064444 <br>
                                E-mail: dlfplacesaket@dlf.in</h3>

                        <h3><strong>For Marketing Query :</strong>  marketing.niteowl@gmail.com</h3>
                        <h3><strong>For Exhibitor Query :</strong>  exhibitor.niteowl@gmail.com </h3>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <iframe class="map_adjust" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJBSD22fThDDkRJpO6FJVW7jo&key=AIzaSyCFDrhJwAMMWlb4C-WC5f6D8fpjPgOvlvY" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
            <div class="col-sm-12 footer">
                <ul class="">
                    <li>
                        <a href="https://www.facebook.com/theniteowlfestival/"><img src="images/socail/fb.png"></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/theniteowlfestival/"><img src="images/socail/instagram.png"></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Theniteowlfest?lang=en"><img src="images/socail/twitter.png"></a>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!----------------Script---------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src="js/easing.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="countdown/jquery.countdown.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(document).ready(function() {
            $('.bxslider').bxSlider({
                mode: 'fade',
                speed: 3000,
                auto: true,
                pager: false,

            });

            $('.bxslider1').bxSlider({
                mode: 'fade',
                speed: 3000,
                auto: true,
                pager: false,

            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.bxslider_33').bxSlider({
                slideWidth: 350,
                minSlides: 2,
                maxSlides: 3,
                slideMargin: 15,
                slideHeight: 350
            });
           
        });
    </script>
     <script>
        $(document).ready(function() {
            $('.bxslider_44').bxSlider({
                slideWidth: 350,
                minSlides: 2,
                maxSlides: 3,
                slideMargin: 15,
                slideHeight: 350
            });
           
        });
    </script>
    

    <!--<script type="text/javascript" src="js/smoothgallery.min.js"></script>
      <script type="text/javascript">
         $(window).load( function() {
             // use default options
             $(document).smoothGallery({
                 animSpeed:300, 
                 delaySpeed:0,
                 visibleRows: 2,
                 animEasing: 'easeOutQuart',

             });
         });
      </script>-->
    <!-----Gallery------>
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="js/lightgallery-all.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#lightgallery').lightGallery();
            $('#lightgallery1').lightGallery();
        });
    </script>
    <!--<script type="text/javascript" src="js/settings.demo.js"></script>
      <script type="text/javascript" src="js/flipgallery.min.js"></script> -->
    <!-----/ Gallery------>
    <script type="text/javascript">
        $(function() {
            var endDate = "October 13, 2017, 02:45:00 ";

            $('.countdown.simple').countdown({
                date: endDate
            });

            $('.countdown.styled').countdown({
                date: endDate,
                render: function(data) {
                    $(this.el).html("<div>" + this.leadingZeros(data.days, 1) + " <span>days</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>hrs</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>min</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>sec</span></div>");
                }
            });

            // End time for diff purposes
            var endTimeDiff = new Date().getTime() + 5000;
            // This is server's time
            var timeThere = new Date();
            // This is client's time (delayed)
            var timeHere = new Date(timeThere.getTime() - 434);
            // Get the difference between client time and server time
            var diff_ms = timeHere.getTime() - timeThere.getTime();
            // Get the rounded difference in seconds
            var diff_s = diff_ms / 1000 | 0;

            var notice = [];
            notice.push('Server time: ' + timeThere.toDateString() + ' ' + timeThere.toTimeString());
            notice.push('Your time: ' + timeHere.toDateString() + ' ' + timeHere.toTimeString());
            notice.push('Time difference: ' + diff_s + ' seconds (' + diff_ms + ' milliseconds to be precise). Your time is a bit behind.');

            $('.offset-notice').html(notice.join('<br />'));

        });
    </script>
    <!--<script src="js/jPushMenu.js" ></script>
    <script type="text/javascript">
      //<![CDATA[
      $(document).ready(function(){
        $('.toggle-menu').jPushMenu({closeOnClickLink: false});
       
      });
      //]]>
</script>-->
    <!----
         <script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
            ------>
            <script>    
                  $(function() {
                    $('#ChangeToggle').click(function() {
                      $('#navbar-hamburger').toggleClass('hidden');
                      $('#navbar-close').toggleClass('hidden');  
                    });
                  });
                    </script>
</body>

</html>