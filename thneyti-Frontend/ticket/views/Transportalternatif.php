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

<script type="text/javascript" src="panier.js"></script>
<script type="text/javascript">
    function ajouter()
    {
        var code = parseInt(document.getElementById("id").value);
        var qte = parseInt(document.getElementById("qte").value);
        var prix = parseInt(document.getElementById("prix").value);
        var monPanier = new Panier();
        monPanier.ajouterArticle(code, qte, prix);
        var tableau = document.getElementById("tableau");
        var longueurTab = parseInt(document.getElementById("nbreLignes").innerHTML);
        if (longueurTab > 0)
        {
            for(var i = longueurTab ; i > 0  ; i--)
            {
                monPanier.ajouterArticle(parseInt(tableau.rows[i].cells[0].innerHTML), parseInt(tableau.rows[i].cells[1].innerHTML), parseInt(tableau.rows[i].cells[2].innerHTML));
                tableau.deleteRow(i);
            }
        }
        var longueur = monPanier.liste.length;
        for(var i = 0 ; i < longueur ; i++)
        {
            var ligne = monPanier.liste[i];
            var ligneTableau = tableau.insertRow(-1);
            var colonne1 = ligneTableau.insertCell(0);
            colonne1.innerHTML += ligne.getCode();
            var colonne2 = ligneTableau.insertCell(1);
            colonne2.innerHTML += ligne.qteArticle;
            var colonne3 = ligneTableau.insertCell(2);
            colonne3.innerHTML += ligne.prixArticle;
            var colonne4 = ligneTableau.insertCell(3);
            colonne4.innerHTML += ligne.getPrixLigne();
            var colonne5 = ligneTableau.insertCell(4);
            colonne5.innerHTML += "<button class=\"btn btn-primary\" type=\"submit\" onclick=\"supprimer(this.parentNode.parentNode.cells[0].innerHTML)\"><span class=\"glyphicon glyphicon-remove\"></span> Retirer</button>";
        }
        document.getElementById("prixTotal").innerHTML = monPanier.getPrixPanier();
        document.getElementById("nbreLignes").innerHTML = longueur;
    }

    function supprimer(code)
    {
        var monPanier = new Panier();
        var tableau = document.getElementById("tableau");
        var longueurTab = parseInt(document.getElementById("nbreLignes").innerHTML);
        if (longueurTab > 0)
        {
            for(var i = longueurTab ; i > 0  ; i--)
            {
                monPanier.ajouterArticle(parseInt(tableau.rows[i].cells[0].innerHTML), parseInt(tableau.rows[i].cells[1].innerHTML), parseInt(tableau.rows[i].cells[2].innerHTML));
                tableau.deleteRow(i);
            }
        }
        monPanier.supprimerArticle(code);
        var longueur = monPanier.liste.length;
        for(var i = 0 ; i < longueur ; i++)
        {
            var ligne = monPanier.liste[i];
            var ligneTableau = tableau.insertRow(-1);
            var colonne1 = ligneTableau.insertCell(0);
            colonne1.innerHTML += ligne.getCode();
            var colonne2 = ligneTableau.insertCell(1);
            colonne2.innerHTML += ligne.qteArticle;
            var colonne3 = ligneTableau.insertCell(2);
            colonne3.innerHTML += ligne.prixArticle;
            var colonne4 = ligneTableau.insertCell(3);
            colonne4.innerHTML += ligne.getPrixLigne();
            var colonne5 = ligneTableau.insertCell(4);
            colonne5.innerHTML += "<button class=\"btn btn-primary\" type=\"submit\" onclick=\"supprimer(this.parentNode.parentNode.cells[0].innerHTML)\"><span class=\"glyphicon glyphicon-remove\"></span> Retirer</button>";
        }
        document.getElementById("prixTotal").innerHTML = monPanier.getPrixPanier();
        document.getElementById("nbreLignes").innerHTML = longueur;
    }
</script>
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

<!-- owl stylesheets -->
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">


<style>

button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background: #610B4B;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }

button:hover {
      background: #bf1e81;
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
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#taxis">car</a></li>
                            <li><a href="#booking">Booking</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                            <li><a href="#about">support</a></li>

                            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <section  class="container">
                      <article class="well form-inline pull-left col-lg-5">
                          <legend>panier</legend>
                          <table>
                          <tr><td><label class="col-lg-3">Identifiant</label></td>  <td><input type = "number" id = "id" style="width:120px" class="input-sm form-control" ></td></tr>

                          <tr><td><label class="col-lg-3" >Quantité</label></td>  <td><input type = "number" id = "qte" style="width:120px" class="input-sm form-control" ></td></tr>
                          <tr><td><label class="col-lg-3">Prix</label></td>  <td><input type = "number" id = "prix" style="width:120px" class="input-sm form-control" ></td></tr>
                          <tr><td><button class="btn btn-primary" type="submit" onclick="ajouter()"><span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier</button></td></tr>
                          </table>

                      </article>
                  </section>
                  <section class="container">
                      <article class="well form-inline pull-left col-lg-5">
                          <legend>Contenu du panier</legend>
                          <table id="tableau" class="table">
                              <thead>
                                  <tr>
                                      <th>Code</th>
                                      <th>Qte</th>
                                      <th>Prix unitaire</th>
                                      <th>Prix de la ligne</th>
                                      <th>Supprimer</th>
                                  </tr>
                              </thead>
                          </table>
                          <br><label>Prix du panier total</label> : <label id = "prixTotal"></label>
                          <label id = "nbreLignes" hidden>0</label>
                      </article>
                  </section>
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

    <!-- banner section end -->
    <!-- our taxis section start -->
    <div id="taxis" class="taxis_section layout_padding">
      <div class="container">
        <h1 class="our_text">Alternative <span style="color: #912F56;">Transport</span></h1>
        <div class="taxis_section_2">
          <div class="row">
            <div class="col-sm-4">
              <div class="taxi_main">
                <div class="round_1">01</div>
                <h2 class="carol_text">Ticket metro</h2>
                <div class="images_2"><a ><img src="images/metro.jpg"></a></div>
                <p class="reader_text">1.25$</p>
                <div class="btn-block">
                  <center>

        </center>
        </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="taxi_main">
                <div class="round_1">02</div>
                <h2 class="carol_text">Ticket train</h2>
                <div class="images_2"><a ><img src="images/train.jpg"></a></div>
                <p class="reader_text">0.8$ </p>
                <div class="btn-block">
                  <center>

        </center>
        </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="taxi_main">
                <div class="round_1">03</div>
                <h2 class="carol_text">Ticket bus</h2>
                <div class="images_2"><a ><img src="images/bus.jpg"></a></div>
                <p class="reader_text">1.25$</p>


              </div>

            </div>

          </div>
          <div class="btn-block">
            <center><a href="panier1.php">
              <button type="" >panier</button>
              </a>
  </center>
        </div>
      </div>
    </div>
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
</body>
</html>
