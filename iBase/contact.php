<?php
if(isset($_POST['sub'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$conn=mysqli_connect("localhost","root","","zeal_database");
$q="insert into contactUs values('$name','$email','$phone','$message')";
mysqli_query($conn,$q);
}
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
      <title>Contact</title>
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
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
               <p style="font-weight:bolder;color: aliceblue;font-size: xx-large;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">WoodCraft</p>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="design.html">Our Design</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="search_icon">
                        <ul>
                           <li><a href="#"><img src="images/search-icon.png"></a></li>
                           <li><a href="#"><img src="images/user-icon.png"></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
         </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="mail_section_1">
                        <h1 class="contact_taital">Contact Us</h1>
                        <form method="post">
                        <input type="text" class="mail_text" placeholder="Name" name="name">
                        <input type="text" class="mail_text" placeholder="Email" name="email">
                        <input type="text" class="mail_text" placeholder="Phone Number" name="phone">
                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="message"></textarea>
                        <div class="send_bt"><button type="submit" name="sub" class="btn btn-success">submit</button></div>
                        </form>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="map_main">
                        <div class="map-responsive">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2036.5304307039112!2d73.8238303803364!3d18.448621258232112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1705511171629!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" width="600" height="360" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section">
         <div class="container">
            <div class="footer_location_text">
               <ul>
                  <li><img src="images/map-icon.png"><span class="padding_left_10"><a href="#">Near Zeal Chowk, Pune-411041</a></span></li>
                  <li><img src="images/call-icon.png"><span class="padding_left_10"><a href="#">Call : +917777777777</a></span></li>
                  <li><img src="images/mail-icon.png"><span class="padding_left_10"><a href="#">woodcraft@gmail.com</a></span></li>
               </ul>
            </div>
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Useful link </h2>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="design.html">Our Designe</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Repair</h2>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur  adipiscinaliqua  Loreadipiscing </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Social Media</h2>
                  <div id="social">
                     <a class="facebookBtn smGlobalBtn active" href="#" ></a>
                     <a class="twitterBtn smGlobalBtn" href="#" ></a>
                     <a class="googleplusBtn smGlobalBtn" href="#" ></a>
                     <a class="linkedinBtn smGlobalBtn" href="#" ></a>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-3">
                  <h1 class="useful_text">Our Repair center</h1>
                  <p class="footer_text">Lorem ipsum dolor sit amet, consectetur adipiscinaliquaLoreadipiscing </p>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>