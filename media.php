<?php
  include './admin/content/configure.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Media</title>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
 <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/style.css" />
 <link rel="stylesheet" href="css/viewbox.css">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
 <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />

</head>
<body class="media_gallery">

<div class="container-fluid ">
    <div class="row ">
        <div class="col-sm-12 exhibitor-sec">
           
            <div class="row logo_link "><a href="index.html"><img src="images/night-owl-logo-3.png" class=" align_image"></a></div>
            <h1>MEDIA</h1>
            <!--<a href="index.html"></a><button type="submit" class="btn btn-default center-block back_btn">Back</button></a>-->
            <div class="container ">
             
                  <ul class="nav nav-tabs">
                    <?php
                      $sql = "select * from media";
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

                        echo '<li class= "'.$active.'"><a data-toggle="tab" href="#'.$seasonl.'">'.$season.'</a></li>';
                      }
                    ?>
                  </ul>
                  <div class="tab-content">
                    <?php
                      $sql = "select * from media";
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


                          echo '<main>';
                           echo '<div class="row">';

                          $dir1 = "./images/media/".$season."/";
                          $dir = "./images/media/".$season."/";

                          if (is_dir($dir)){
                            if ($dh = opendir($dir)){
                              while (($file = readdir($dh)) !== false){
                                if (!is_dir($file) && $file != 'thumb') {

                                  echo '<div class="col-xs-6 col-md-3">
                                          <a href="'.$dir1.$file.'" class="thumbnail" title="">
                                              <img src="'.$dir1.$file.'" alt="" class="img-t">
                                          </a>
                                      </div>';
                                  

                                }
                              }
                              closedir($dh);
                            }
                          }
                          echo '</div>';
                          echo '</main>';
                        echo '</div>';
                      }
                    ?>
                  </div>

                       </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
            <script src="js/jquery.viewbox.min.js"></script>
            <script>
                $(function(){
                    
                    $('.thumbnail').viewbox();
                    $('.thumbnail-2').viewbox();
        
                    (function(){
                        var vb = $('.popup-link').viewbox();
                        $('.popup-open-button').click(function(){
                            vb.trigger('viewbox.open');
                        });
                        $('.close-button').click(function(){
                            vb.trigger('viewbox.close');
                        });
                    })();
                    
                });
            </script>
        </div>
    </div>
</div>

     
</body>
</html>

<style type="text/css">
  .img-t{
    width: 100%;
    height: 150px !important;
  }
</style>