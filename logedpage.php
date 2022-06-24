<?php
   session_start();
   $username = $_SESSION['username'];
   $name = $_SESSION['name'];
   
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
      <link rel="stylesheet" href="css/style.css">
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
         <!-- header inner -->
         <div class="header">
            <div class="container">
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
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">ABOUT </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="attendance_status.php">ATTENDANCE STATUS</a>
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
         <div class="container">
         <div class="row d_flex">
            <div class="col-md-6">
               <div class="text-bg">
                  <h1>HONGIK UNIVERSITY</h1>
                  <p>This is a site where you can check the status of automatic attendance check.<br>
                     Enter your school number and password, and check your attendance status.
                  </p>
                  <a class="read_more" href="about.html">Read More</a>
               </div>
            </div>
            <div class="col-md-6">
                     <form class="main_form">
                        <div class="row">
                        <div class="col-sm-12">
                              <!-- <input class="contactus" placeholder="Student ID" type="type" name="Name">  -->
                              <h3 style ="font-size : 30px; margin : 20px;" > <?php echo "안녕하세요, $username 님";?></h3>
                           </div>
                           <div class="col-sm-12">
                           <button type = "button" class="send_btn" onclick="location.href='logout.php'">Logout</button>
                              <p id="alert" class="account"> </p>
                           </div>
                        </div>
                        <!-- <script src="script.js"></script> -->
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