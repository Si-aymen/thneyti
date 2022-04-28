


<?php 
include '../controller/posteC.php';
include '../model/poste.php';

$posteC=new posteC();
$s=0;  
if(isset($_POST['titre'])&&
isset($_POST['contenu'])&&  
isset($_POST['date_de_pub'])

)
{
    $poste=new poste($_POST['id_poste'],$_POST['titre'],$_POST['contenu'],$_POST['date_de_pub']);
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
<style>
.button-1 {
background-color: #610B4B;
border-radius: 8px;
border-style: none;
box-sizing: border-box;
color: #FFFFFF;
cursor: pointer;
display: inline-block;
font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
font-size: 14px;
font-weight: 500;
height: 40px;
line-height: 20px;
list-style: none;
margin: 0;
outline: none;
padding: 10px 16px;
position: relative;
text-align: center;
text-decoration: none;
transition: color 100ms;
vertical-align: baseline;
user-select: none;
-webkit-user-select: none;
touch-action: manipulation;
}

.button-1:hover,
.button-1:focus {
background-color: #000000;
}
</style>
</head>
<body>
	<!--header section start -->
    <div id="index.html" class="header_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
                </div>
                <div class="col-sm-6 col-lg-9">
                    <div class="menu_text">
                        <ul>
                            <li><a href="../index.html">Home</a></li>
                            <li><a href="#taxis">Car</a></li>
                            <li><a href="#booking">Booking</a></li>
                            <li><a href="#index">Forum</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                            <li><a href="#about">Support</a></li>
                            
                            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="index.html">Home</a>
                  <a href="#taxis">Car</a>
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
        <div id="main_slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
         <!-- <div class="col-md-6">

            <div class="image_1"><img src="images/img-1.png"></div>
          </div>-->
         <!-- <div class="col-md-6">-->
         <h1 class="our_text">For<span style="color: #912f56;">um</span></h1>
            
            <div class="contact_bg">
            <div class="input_main">
              <div class="container">
            <!-- <a href="tri_date.php">Tri Par date</a> -->
            
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>liste des postes</h2>
                        <a href="index.php" class="button-1"> retour a la liste des postes</a>
                        
                        
                    
                    </div>

<form action="" method="POST">
 <div><pre>
 
<label for="titre">titre: <input type="text"  id="titre" name="titre" >    
<label for="contenu">contenu : <input type="text"  id="contenu" name="contenu">

<label for="date_de_pub">date_de_pub :  <input type="date" id="date_de_pub"  name="date_de_pub" >


				
			</div>    </pre> 
<button    type="submit" class="button-1" name="submit" Onclick="return validateForm()"  >Submit </button> 

        </form>
        <?php if($s==1)
{
$posteC->ajouter($poste);
echo "<script>alert('Vous avez ajouter un poste');</script>";
        echo "<script> window.location.href='index.php'</script>";
}?>  
<script>
        function validateForm() {
            var letters = /^[A-Za-z]+$/;
            var texte = /^[A-Za-z- -]+$/;
            var t = document.getElementById("titre").value;
            var c = document.getElementById("contenu").value;

            if (t == "") {
                alert("le titre est vide !!");
                return false;
            }
            else if (!(t.match(texte) )) {
               alert("Veuillez entrer un titre valid!");
               return false ;
               }
        else if (c == "") {
                alert("le contenu est vide !!");
                return false;
               }
            else if (!(c.match(texte) )) {
        alert("le contenu est invalide !");
        return false ;
        } 
}
        </script>
        
        <div class="section_footer ">
      <div class="container">
          <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Addresse</h2>
                  <p class="ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Links</h2>
                  <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="azeaze.html">Home</span></a></div>
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">About</span></a></div>
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">car</span></a></div>
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">Booking</span></a></div>
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">Contact Us</span></a></div>
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="index">forum</span></a></div>
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
</body>
</html> 