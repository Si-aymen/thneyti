<?PHP
include "../controller/ReclamationC.php";
include "../controller/reponseC.php";
include "../controller/categorieC.php";

if (isset($_POST['nomcateg']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['cin']) and isset($_POST['email']) and isset($_POST['province'])and isset($_POST['sexe'])and isset($_POST['commentaire']))
{

$reclam=new reclamation($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['email'],$_POST['province'],$_POST['sexe'],$_POST['commentaire']);
$reclamC=new ReclamationC();
$reclamC->ajouter($reclam);

$rep=new reponse($_POST['cin'],'','');
$repC=new reponseC();
$repC->ajouter($rep);

$categorie=new categorie($_POST['nomcateg'],$_POST['commentaire'],$_POST['cin']);
$categorieC=new categorieC();
$categorieC->ajouter($categorie);

header('Location: index_home.php');
	
}
else
{
	
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
                            <li><a href="index_home.php">Home</a></li>
                            <li><a href="../index.php">car</a></li>
                            <li><a href="../index.php#booking">Booking</a></li>
                            <li><a href="../index.php#contact">Contact Us</a></li>
                            <li><a href="../index.php#about">support</a></li>
                            <li><a href="#"><img src="images/search-icon.png"></a></li>
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
          <div class="col-md-6">

            <div class="image_1"><img src="images/img-1.png"></div>
          </div>
          <div class="col-md-6">
            <h1 class="booking_text">Add Reclamation</h1>
            <div class="contact_bg">
            <div class="input_main">
              <div class="container">
                <h2 class="request_text">Please enter the required informations</h2>


                <form method="post">
        
            <legend>Veuillez remplir le formulaire</legend>


            <br><label>Categorie de reclamation ? </label>
            <select name="nomcateg" id="nomcateg" autocomplete="off">
                <option value="tech">Technique</option>
                <option value="eco">Econnomique</option>
                <option value="Autre">Autre</option>

            </select><br>

            <br><br>

            <label>Nom</label>
            <input type="text" name="nom" id="nom" autocomplete="off">

            <label>Prenom</label>
            <input type="text" name="prenom" id="prenom" autocomplete="off">

            <br><br>

            <br><label>CIN</label>
            <input type="text" name="cin" id="cin" autocomplete="off">

            <label>E-Mail</label>
            <input type="text" name="email" id="email" autocomplete="off">
            
            <br><br>
            
            <br><label>De quelle province étes-vous ?</label>
            <input type="text" name="province" id="province" autocomplete="off">

            <br><br>

            <br><label>Sexe ?</label>
            <select name="sexe" id="sexe" autocomplete="off">
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                <option value="Autre">Autre</option>

            </select><br>

            <br><label>Commentaire</label><br>
            <textarea rows="10" cols="50" id="commentaire" name="commentaire"></textarea><br>

            <br><button type="submit" class="btn btn-primary" name="submit">Submit</button><br>
           
           
        </form>
                  </div>
                  </div>

          </div>
          </div>
        </div>
    </div>


  </div>

</div>

      </div>
    </div>
    <!-- banner section end -->
    <!-- our taxis section start -->

    <!-- our taxis section end -->
    <!-- why ride section start -->

    <!-- why ride section end -->
    <!-- location section start -->

    <!-- download section end -->
  <!-- section footer start -->
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
      <p class="copyright">2022 All Rights Reserved. <a href="https://html.design">THNEYTI</a></p>
    </div>
  </div>





</body>
</html>
