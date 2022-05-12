<?php
include '../controller/userC.php';
//include '../model/user.php';
// ---QUFORM-----


$userC=new userC();

$s=0;
if(isset($_POST['nom'])&&
isset($_POST['prenom'])&&
isset($_POST['date_de_naissance'])&&
isset($_POST['email'])&&
isset($_POST['mot_de_passe'])&&
isset($_POST['adresse'])&&
isset($_POST['sexe'])&&
isset($_POST['permis'])&&
isset($_POST['tel'])
)

{
    $user=new user(
    $_POST['nom'],
    $_POST['prenom'],
    $_POST['date_de_naissance'],
    $_POST['email'],
    $_POST['mot_de_passe'],
    $_POST['adresse'],
    $_POST['sexe'],
    $_POST['permis'],
    $_POST['tel']
  );
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
                    <div class="logo"><a href="index_home.php"><img src="images/logo.png"></a></div>
                </div>
                <div class="col-sm-6 col-lg-9">
                  <div class="menu_text">
                      <ul>
                          <li><a href="../index.php">Car</a></li>
                          <li><a href="afficher_moy.php">moyens de transport </a></li>
                          <li><a href="transportalternatif.php">transport +</a></li>
                          <li><a href="ajouterReclamation.php">Support</a></li>


                          <div id="myNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="overlay-content">
                <a href="connexion.php">sign in</a>
                <a href="ajouter.php">sign up</a>




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
            <h1 class="booking_text">Registration</h1>
            <div class="contact_bg">
            <div class="input_main">
              <div class="container">
                <h2 class="request_text">Please enter the required informations</h2>
                <form method='POST' action="">

                <div class="form-group">
                  <label>Nom</label>
                  <input type="text" class="email-bt" id="nom" placeholder="Votre nom" name="nom" required>
                </div>
                <div class="form-group">
                  <label>Prenom</label>
                  <input type="text" class="email-bt" id="prenom" placeholder="Votre Prenom" name="prenom" required>
                </div>
                <div class="form-group">
                  <label>Date de naissance</label>
                  <div id="current_date"></p>
                            <script>
                            date = new Date();
                            year = date.getFullYear();
                            month = date.getMonth() + 1;
                            day = date.getDate();
                            document.getElementById("current_date").innerHTML = month + "/" + day + "/" + year;
                            </script>
                  <input type="date" class="email-bt" id="date_de_naissance" name="date_de_naissance" min="1923-12-12" max="current_date"required>
                </div>
                <div class="form-group">
                  <label>E-mail</label>
                  <input type="email" class="email-bt" id="email" placeholder="Votre email" name="email" required>
                </div>
                <div class="form-group">
                  <label>Mot de passe (8 caracteres minimum)</label>
                  <input type="password" class="email-bt" id="mot_de_passe" placeholder="Votre mot de passe" name="mot_de_passe"  minlength="8" required>

                </div>

                <input type="checkbox" onclick="Afficher()"> Afficher le mot de passe
                <script>
                  function Afficher()
                  {
                  var input = document.getElementById("mot_de_passe");
                  if (input.type === "password")
                  {
                  input.type = "text";
                  }
                  else
                  {
                  input.type = "password";
                  }
                  }
                  </script>

                <div class="form-group">
                  <label>Adresse</label>
                  <input type="text" class="email-bt" id="adresse" placeholder="Votre Adresse" name="adresse" required>
                </div>
                <div class="form-group">
                  <label>Sexe</label><br>
                  <input type="radio" id="homme" name="sexe" value="homme" > <label for="homme">Homme</label><br>
                  <input type="radio" id="femme" name="sexe" value="femme"> <label for="femme">Femme</label><br>
                </div>
                <div class="form-group">
                  <label>Permis</label><br>
                  <input type="radio" id="oui" name="permis" value="oui" > <label for="oui">Oui</label><br>
                  <input type="radio" id="non" name="permis" value="non"> <label for="non">Non</label><br>
                </div>
                <div class="form-group">
                  <label>Numero de Telephone</label>
                  <input type="tel" class="email-bt" id="tel" placeholder="Votre numero de telephone" name="tel" required>
                </div>
                <div class="quform-element quform-element-recaptcha">
                <div class="quform-spacer">
                    <label>Are you human? <span class="quform-required">*</span></label>
                    <div class="quform-input">
                        <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                        <noscript>Please enable JavaScript to submit this form.</noscript>
                    </div>
                </div>
            </div>
                <input type="submit" value="Envoyer" class="button-1" onclick="return verif()">
                <input type="reset" value="Annuler" class="button-1">



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
                  <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="azeaze.html">Home</span></a></div>
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

    <!-- Javascript files-->
    <script type="text/javascript" src="quform/js/scripts.js"></script>
    <script>
    window.QuformRecaptchaLoaded = function () {
        if (window.grecaptcha && window.jQuery) {
            jQuery('.g-recaptcha').each(function () {
                var $recaptcha = jQuery(this);

                if ($recaptcha.is(':empty')) {
                    $recaptcha.data('recaptcha-id', grecaptcha.render($recaptcha[0]));
                }
            });
        }
    };
</script>
    <script src="https://www.google.com/recaptcha/api.js?onload=QuformRecaptchaLoaded&amp;render=explicit" async defer></script>
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


<script src="formV.js"> </script>
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
<?php if($s==1)
{

$userC->ajouter($user);
echo "<script>alert('Vous avez ajoute un user');</script>";
        echo "<script> window.location.href='ajouter.php'</script>";

}
$hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);
?>
</body>
</html>
