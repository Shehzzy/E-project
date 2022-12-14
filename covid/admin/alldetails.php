<?php
session_start();
include '../config/db.php';

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
      <title>Users</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../css/app.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif"/>
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="ttps://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <script src="https://kit.fontawesome.com/aec557161b.js" crossorigin="anonymous"></script>

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
               <a href="../u_page.php"><i class="fa fa-user" aria-hidden="true"></i></a>
            </div>
            <div class="container">
               <div class="row d_flex">
                  <div class="col-sm-3 logo_sm">
                     <div class="logo">
                        <a href="../index.php"></a>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                        <ul>
                              <li><a class="active" href="index.php">Home</a></li>
                              <li><a href="about.php">Hospitals</a></li>
                              <li><a href="action.php">Appointments</a></li>
                              <!-- <li><a href="index.php" class="logo_midle">covido</a></li> -->
                              <li><a href="news.php">news</a></li>
                              <li><a href="about.php">About</a></li>
                              <li><a href="contact.php">Contact </a></li>
                           </ul>
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


               <!-- SIDE PANEL START  -->


            <div class="col-lg-2 col-md-3 col-sm-3">
                <aside>
                  <br>
                  <br>
                  <a href="profile.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3 mt-5">My Profile</span></a>
                  <br>
                    <a href="app.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3 mt-5">My appoinments</span></a>
                    <br>
                    <a href="b_app.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Book an appoinment</span></a>
                    <br>
                    <a href="#" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Request a Covid test</span></a>
                    <br>
                    <a href="#" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Request vaccination</span></a>
                    <br>
                    <a href="#" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Results</span></a>
                    <br>
                    <a href="#" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Reports</span></a>
                    <br>
                </aside>
            </div>
             <!-- SIDE PANEL END  -->

            <div class="col-lg-10 col-md-10 col-sm-10">
               <h2 class="text-uppercase">All Patient Details</h2>
               <br>
               <br>
               <table class="table table-bordered">
  <thead>
    <tr>
      <th>Patient ID</th>
      <th>Patient Name</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th>Vaccine</th>
      <th>Selected Date</th>
      <th>Selected Time</th>
      <th>Status</th>
      
    </tr>
  </thead>
  <tbody>
   <?php
   $id=$_SESSION['id'];
   
   include '../config/db.php';
   $query="SELECT patients.id,vaccine.Id,bookings.* FROM `bookings` INNER JOIN patients ON bookings.p_id=patients.id INNER JOIN vaccine ON bookings.v_id=vaccine.Id WHERE hos_id=$id";

   $result=mysqli_query($conn,$query );
   while($row=mysqli_fetch_assoc($result)){
   ?>
   <tr>
   <td><?php echo $row['p_id'];?></td>
   <td><?php echo $row['P_name'];?></td>
   <td><?php echo $row['email'];?></td>
   <td><?php echo $row['number'];?></td>
   <td><?php echo $row['v_id'];?></td>
   <td><?php echo $row['selected_date'];?></td>
   <td><?php echo $row['selected_time'];?></td>
   <td>
                    
<select class='status' id="<?php echo $row['id'];?>">
<option value="0" <?php  if($row['status']==0){ echo 'selected'; }?>>Pending</option>
<option value="1" <?php  if($row['status']==1){ echo 'selected'; }?>>Approved</option>
<option value="2" <?php  if($row['status']==2){ echo 'selected'; }?>>Rejected</option>
</select>
</td> 
                  
   </tr>
   <?php 
      }
   ?>
  </tbody>
</table>
<script>

document.ready(function){
$('.status').change(function(){
    var id = $(this).attr('id');
    var selected_status = $(this).find(":selected").val();
    if($(this).is(':checked'))
     {
         $id = $(this).attr("id");
         $.post("handle.php",{action:"checked",id:$id},function(data){
          alert("Peoduct is set to display...");
         });
     }
     else
     {
       alert("unchecked");
        $id = $(this).attr("id");
         $.post("handle.php",{action:"unchecked",id:$id},function(data){
          alert("Peoduct is un-set to display...");
         });
     }

       });

    });

});
}
</script>

            </div>
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
                        <p>?? 2020 All Rights Reserved. Design by <a href="https://html.design/"> Free html Templates</a></p>
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