<?php
   session_start();
   if(!isset($_SESSION['username'])) {
      echo "<script>alert('로그인이 필요합니다.')</script>";
      echo "<script>location.replace('homepage.php');</script>";            
  }
   $username = $_SESSION['username'];
   $name = $_SESSION['name'];

   include("state.php");
   
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>HAI</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css?">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  </head>
   <!-- body -->
   <body class="main-layout">
  <header>
        <div class="header">
            <div class="container" >
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="logedpage.php"><img src="images/Logo_of_hongik_university.png" width="100" height="100" alt="#"  /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto" >
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">ABOUT </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">ATTENDANCE STATUS</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">PROFILE</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>  
      <section class="banner_main">
         <div class="container" >
            <div class="col-md-8 offset-md-2">
               <div class="text-bg" style="text-align: center;">
                  <h1>ATTENDANCE CHECK</h1>
               </div>
               <div class="col-md-8" style="margin: 0 auto;">
                  <form class="check_form" >
                        <div class="col">
                           <div class="col-md-12 " style="color:white;">
                              <?php if($attendance == 1) { ?>
                                    <label class="btn radio_btn_">
                                    Attendance
                                    <!-- <input type="radio" name="jb-radio" id="jb-radio-1"> Attendance -->
                                 </label>
                                 <label class="btn radio_btn">
                                    absence
                                    <!-- <input type="radio" name="jb-radio" id="jb-radio-2"> absence -->
                                 </label>
                                 <label class="btn radio_btn">
                                    late
                                    <!-- <input type="radio" name="jb-radio" id="jb-radio-3"> not exist -->
                                 </label>
                                 <label class="btn radio_btn">
                                    vacated
                                    <!-- <input type="radio" name="jb-radio" id="jb-radio-2"> absence -->
                                 </label>
                              <?php } else if($late == 1) { ?>
                                 <label class="btn radio_btn" >
                                 Attendance
                                 <!-- <input type="radio" name="jb-radio" id="jb-radio-1"> Attendance -->
                              </label>
                              <label class="btn radio_btn">
                                 absence
                                 <!-- <input type="radio" name="jb-radio" id="jb-radio-2"> absence -->
                              </label>
                              <label class="btn radio_btn_">
                                 late
                                 <!-- <input type="radio" name="jb-radio" id="jb-radio-3"> not exist -->
                              </label>
                              <label class="btn radio_btn">
                                    vacated
                                    <!-- <input type="radio" name="jb-radio" id="jb-radio-2"> absence -->
                                 </label>
                              <?php } else if($absence == 1) { ?>
                                 <label class="btn radio_btn">
                                 Attendance
                                 <!-- <input type="radio" name="jb-radio" id="jb-radio-1"> Attendance -->
                              </label>
                              <label class="btn radio_btn_">
                                 absence
                                 <!-- <input type="radio" name="jb-radio" id="jb-radio-2"> absence -->
                              </label>
                              <label class="btn radio_btn">
                                 late
                                 <!-- <input type="radio" name="jb-radio" id="jb-radio-3"> not exist -->
                              </label>
                              <label class="btn radio_btn">
                                    vacated
                                    <!-- <input type="radio" name="jb-radio" id="jb-radio-2"> absence -->
                                 </label>
                              <?php } else if ($vacated == 1) { ?>
                                 <label class="btn radio_btn">
                                 Attendance
                                 <!-- <input type="radio" name="jb-radio" id="jb-radio-1"> Attendance -->
                              </label>
                              <label class="btn radio_btn">
                                 absence
                                 <!-- <input type="radio" name="jb-radio" id="jb-radio-2"> absence -->
                              </label>
                              <label class="btn radio_btn">
                                 late
                                 <!-- <input type="radio" name="jb-radio" id="jb-radio-3"> not exist -->
                              </label>
                              <label class="btn radio_btn_">
                                    vacated
                                    <!-- <input type="radio" name="jb-radio" id="jb-radio-2"> absence -->
                                 </label>
                              <?php } else {?>
                                 <label class="btn radio_btn">
                                 Attendance
                                 <!-- <input type="radio" name="jb-radio" id="jb-radio-1"> Attendance -->
                              </label>
                              <label class="btn radio_btn">
                                 absence
                                 <!-- <input type="radio" name="jb-radio" id="jb-radio-2"> absence -->
                              </label>
                              <label class="btn radio_btn">
                                 late 
                                 <!-- <input type="radio" name="jb-radio" id="jb-radio-3"> not exist -->
                              </label>
                              <label class="btn radio_btn">
                                    vacated
                                    <!-- <input type="radio" name="jb-radio" id="jb-radio-2"> absence -->
                                 </label>
                              <?php }?>
                           </div>
                        </div>
                  </form>
               </div>
         </div>
      </section>
 
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="cont">
                        <h3>UNIVERSITY INNOVATION <br> HONGIK CHALLENGE 2022</h3>
                           <p>Image Attendance Authentication System with Deep Learning</p>
                     </div>
                     <button type='button' onclick="location.href='http://cn.hongik.ac.kr/stud/'" class="sub_btn" href="#">CLASSNET</button>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12"></div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
   
</html>

