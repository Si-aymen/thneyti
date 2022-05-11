<?php 
require_once '../controller/pubC.php';
require_once '../model/pub.php';

$pubC =new pubC(); 

$liste =$pubC->affichercoupon();
$s=0;  

if(isset($_POST['id_publication'])&&
isset($_POST['photo'])&& 
isset($_POST['date_debut']) && 
isset($_POST['date_fin'])&&
isset($_POST['description']))


{
$pub =new pub($_POST['id_publication'],$_POST['photo'],$_POST['date_debut'],$_POST['date_fin'],$_POST['description']);
 $s=1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>THNEYTI</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
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
  
	<!--header section start -->
    <div  class="header_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="logo"><img src="images/logo.png"></a></div>
                </div>
                <div class="col-sm-6 col-lg-9">
                    <div class="menu_text">
                        <ul>
                            <li><a href="index_home.php">Home</a></li>                                                    
                            <li><a href="../index.php">car</a></li>
                            <li><a href="../index.php#booking">Booking</a></li>
                            <li><a href="../index.php#contact">Contact Us</a></li>
                            <li><a href="ajouterReclamation.php">support</a></li>
                            <li><a href="#"><img src="images/search-icon.png"></a></li>
                            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="index_home.php">Home</a>
                  <a href="#taxis">car</a>
                  <a href="#booking">Booking</a>
                  <a href="#contact">Contact Us</a>
                  <a href="#about">Support</a>
                </div>
                </div>
                <span  style="font-size:33px;cursor:pointer; color: #ffffff;" onclick="openNav()"><img src="images/toggle-menu.png" class="toggle_menu"></span>
                </div>  
                </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- banner section start -->
    <div class="banner_section">
      <div class="container-fluid">
      
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
          <div class="col-md-6">
            
            
            <div class="image_1"><img src="images/image3.png"></div>
            
          </div>
          <div class="col-md-6">
           
            <div class="contact_bg">
            <div class="input_main">
              <div class="container">
              <?php
            foreach ($liste as  $adh){
        ?>
                  <h2 class="request_text"> <?php echo $adh['description'];?></h2>
                  
                  
                <form action="/action_page.php">
                
                  </form>
                  </div> 
                  </div>
               
          </div>
          </div>
        </div>
    </div>
 
    
    
  </div>
  <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
    <i class="fa fa-angle-left"></i></a>
  </a>
  <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
    <i class="fa fa-angle-right"></i>
  </a>
  </a>
</div>
        
      </div>
    </div>
    <!-- banner section end -->
    <!-- our taxis section start -->
    
           
          
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- our taxis section end -->
    <!-- why ride section start -->
    <div id="booking" class="ride_section layout_padding">
      <div class="container">
        <div class="ride_main">
          <h1 class="ride_text">Why Ride <span style="color: #521945;">With THNEYTI</span></h1>
      </div>
        </div>
    </div>
    <div class="ride_section_2 layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="image_3"><img src="images/img-3.png"></div>
          </div>
          <div class="col-sm-8">
            <h1 class="cabe_text">THNEYTI for Every Pocket</h1>
            <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as It is a long established fact that a reader will be distracted by the readable c</p>
            <div class="book_bt"><a href="#">BOOK NOW</a></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <h1 class="secure_text">Secure and Safer Rides</h1>
            <p class="long_text_2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as It is a long established fact that a reader will be distracted by the readable c</p>
            <div class="book_bt_2"><a href="#">BOOK NOW</a></div>
          </div>
          <div class="col-sm-4">
            <div class="image_3"><img src="images/img-4.png"></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="image_3"><img src="images/img-5.png"></div>
          </div>
          <div class="col-sm-8">
            <h1 class="cabe_text">THNEYTI for Every Pocket</h1>
            <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as It is a long established fact that a reader will be distracted by the readable c</p>
            <div class="book_bt"><a href="#">BOOK NOW</a></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <h1 class="secure_text">Secure and Safer Rides</h1>
            <p class="long_text_2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as It is a long established fact that a reader will be distracted by the readable c</p>
            <div class="book_bt_2"><a href="#">BOOK NOW</a></div>
          </div>
          <div class="col-sm-4">
            <div class="image_3"><img src="images/img-5.png"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- why ride section end -->
    <!-- location section start -->
    <div id="contact" class="location_sectin layout_padding">
      <div class="container-fluid">
        <div class="location_main">
          <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-5">
              <div class="download_text"><br><span style="color: #fffcf4;"></span></div>
            </div>
            <div class="col-sm-3">
              <div class="image_7"><img src="images/img-7.png"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- download section end -->
  <!-- section footer start -->
    <div class="section_footer ">
      <div class="container"> 
          <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Address</h2>
                  <p class="ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Links</h2>
                  <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">Home</span></a></div>
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">About</span></a></div>
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">car</span></a></div>
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">Booking</span></a></div>
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">Contact Us</span></a></div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                <h2 class="account_text">Follow Us</h2>
                <div class="image-icon"><img src="images/fb-icon.png"><span class="fb_text"><a href="#">Facebook</a></span></div>
                <div class="image-icon"><img src="images/twitter-icon.png"><span class="fb_text"><a href="#">Twitter</a></span></div>
                <div class="image-icon"><img src="images/in-icon.png"><span class="fb_text"><a href="#">Linkedin</a></span></div>
                <div class="image-icon"><img src="images/youtube-icon.png"><span class="fb_text"><a href="#">Youtube</a></span></div>            
                <div class="image-icon"><img src="images/instagram-icon.png"><span class="fb_text"><a href="#">Instagram</a></span></div>
                </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="adderess_text">Newsletter</h2>
            <input type="" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
            <button class="subscribr_bt">SUBSCRIBE</button>
          </div>
          </div>
          </div>
          </div>
      </div>
    </div>
  <!-- section footer end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html  Templates</a></p>
    </div>
  </div>

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
    <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
    });
       
    $(".zoom").hover(function(){
         
    $(this).addClass('transition');
    }, function(){
         
    $(this).removeClass('transition');
    });
    });
    </script> 
    <script>
    function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
   document.getElementById("myNav").style.width = "0%";
   }
</script>   
<?php
            }
        ?>
</body>
</html>
  