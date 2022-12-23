
<?php
session_start();
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
      <title>Registration form for patients</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../css/reg.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../images/fevicon.png" type="image/gif"/>
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="../css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="ttps://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- top -->
<!-- header -->
<header class="header-area">
         <div class="left">
               <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
            </div>
            <div class="right">
               <a href="u_page.php"><i class="fa fa-user" aria-hidden="true"></i></a>
            </div>
            <div class="container">
               <div class="row d_flex">
                  <div class="col-sm-5 logo_sm">
                     <div class="logo">
                        <a href="index.php"></a>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                           <ul>
                           <li><a href="index.php">Home</a></li>
                              <li><a href="hospitals.php">Hospitals</a></li>
                              <li><a href="about.php">About Us</a></li>
                              <li><a href="contact.php">Contact Us </a></li>
                        
                        </ul>
                           <button class="nav-toggler">
                           <span></span>
                           </button>
                        </nav>
               </div>
               </div>
               </div>
            </div>
         </header>
      <!-- end header -->
      <!-- end banner -->
     
     <!-- coronata -->
      <div class="coronata">
         <div class="container">
            <div class="row">
            <h1 class="mt-5 ml-3">Register as a patient</h1>

            <div class= "col-lg-7 col-md-7 col-sm-7">
            <form action="../p_action/p_insert.php" method="post" enctype="multipart/form-data">
         <div class="form-group">
         <label for="f_name">First Name</label>
         <input type="text" class="form-control" placeholder="Enter your first name" id="f_name" name="f_name">
         </div>
         <div class="form-group">
         <label for="l_name">Last Name</label>
         <input type="text" class="form-control" placeholder="Enter your last name" id="l_name" name="l_name">
         </div>
         <div class="form-group">
         <label for="email">Email Address</label>
         <input type="text" class="form-control"  id="email" name="email" placeholder="Enter your email address">
         </div>
         <div class="form-group">
         <label for="pass">Password</label>
         <input type="password" class="form-control"  id="pass" name="pass" placeholder="Enter your password">
         </div>
         <div class="form-group">
         <label for="age">Age</label>
         <input type="number" class="form-control" placeholder="Enter your age" id="age" name="age">
         </div>
         <div class="form-group">
         <label for="gender">Gender</label>
         <br>
         <select name="gender" id="gender">
            <option value="">Select your Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
         </select>
         </div>
  </div>
  <div class="col-lg-5 col-md-5 col-sm-6">
    <div class="form-group">
         <label for="dob">Enter your Date of Birth</label>
         <input type="date" class="form-control"  id="dob" name="dob">
         </div>
         <div class="form-group">
         <label for="address">Full Address</label>
         <input type="text" class="form-control" placeholder="Enter your full address" id="add" name="add">
         </div>
         <div class="form-group">
         <label for="number">Mobile Number </label>
         <input type="text" class="form-control" placeholder="Enter your mobile number" id="num" name="num">
         </div>
  <img src="../images/pat.jpg" alt=""/>
  </div>
  </div>
  <div class="text-center text-white">
  <button type="submit" class="btn btn-danger mt-5 mb-5" name="register">Register now </button>
  <br>
  <a href="p_login.php" class="btn">Already have an account? Login now</a>
  </form>
  </div>
      </div>
      </div>
      
      <!-- end coronata -->








      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>Resources</h3>
                              <ul class="menu_footer">
                                 <li><a href="../index.php">Home</a><li>
                                 <li><a href="">What we do</a><li>
                                 <li> <a href="">Media</a><li>
                                 <li> <a href="">Travel Advice</a><li>
                                 <li><a href="">Protection</a><li>
                                 <li><a href="">Care</a><li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                             <h3>About</h3>
                              <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various</p>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3  text_align_left">
                              <h3>Contact  Us</h3>
                              <ul class="top_infomation">
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                Making this the first true</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>
                                Call : +01 1234567890 </li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="">Email : demo@gmail.com</a></li>
                              </ul>  
                           </div>
                        </div>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="hedingh3 text_align_left">
                              <h3>countrys</h3>
                           <div class="map">
                              <img src="../images/map.png" alt="#"/>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 offset-md-2">
                        <p>© 2020 All Rights Reserved. Design by <a href="https://html.design/"> Free html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="../js/jquery.min.js"></script>
      <script src="../js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="../js/owl.carousel.min.js"></script>
      <script src="../js/custom.js"></script>
   </body>
</html>