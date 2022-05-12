<?php
include '../controller/posteC.php';

$adC=new posteC();





/*if (isset($_GET['key'])) {
        $liste = $adC->rechercheReclamation($_GET['key']);
    } else 
$liste =$adC->afficherposte();

$liste->execute();*/


/*if (
    isset($_POST["search"]) 
    
        )
   {
        if (
            !empty($_POST["search"])  
         
        )
        {
   $liste=$adC->rechercherposte($_POST["search"]);
        }*/
        $db=config::getConnexion();
                                   
        $sort="";
        if(isset ($_GET['sort']))
        {
        if ($_GET['sort']=="a-z")
        {
            $sort="titre ASC";
        }
        if($_GET['sort']=="z-a")
        {
            $sort="titre DESC";
        }
        if ($_GET['sort']=="ua-z")
        {
            $sort="user ASC";
        }
        if($_GET['sort']=="uz-a")
        {
            $sort="user DESC";
        }
                              }
                              $liste=$db->prepare("SELECT * FROM poste ORDER BY  $sort");
                             
                             $liste->execute();



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
                            <li><a href="C:\xampp\htdocs\crud projet\front\views\forumf.php">Forum</a></li>
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
              <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                      <center>
                    <div class="user">

              <div class="container">
                    <div class="header">
              <div class="nav">
              <center> 
              <div class="user">    
              <form method="get" action="forumf.php">
                <div class="search">
                    <input type="text" name="key" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                </form>
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="user.png" alt="">
                    </div>
                 </div>
                  </div>
                    </div>
                    </div>
                 </div>
                   
                 </div>
                <center>
          
                  <!-- Inner main header -->
            <div class="inner-main-header">
                <a class="nav-link nav-icon rounded-circle nav-link-faded mr-3 d-md-none" href="#" data-toggle="inner-sidebar"><i class="material-icons">arrow_forward_ios</i></a>
                

                <form action="forumf.php" class="d-none d-md-flex ms-4" method="GET" >
 <center>
<select name="sort"  value="sort">
<option value="" class="d-none d-md-flex ms-4" selected>---Select Option---</option>
<option value="a-z" <?php if(isset ($_GET['sort']) && $_GET['sort']=="a-z"){echo "selected";} ?> > titre (ASC)</option>
<option value="z-a" <?php if(isset ($_GET['sort']) && $_GET['sort']=="z-a"){echo "selected";} ?>>titre (DESC)</option>
<option value="ua-z" <?php if(isset ($_GET['sort']) && $_GET['sort']=="a-z"){echo "selected";} ?> > user (ASC)</option>
<option value="uz-a" <?php if(isset ($_GET['sort']) && $_GET['sort']=="z-a"){echo "selected";} ?>>user (DESC)</option>
</select>

<button type="submit" class="button-1 btn-primary" id="basic">Sort by</button>
<center>

                
    </form>
    
              
            </div>
            <!-- /Inner main header -->
            </div>
               
           
        <?php
            foreach ($liste as  $adh){
        ?>
        <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                <div class="card mb-2">
                    <div class="card-body p-2 p-sm-3">
                        <div class="media forum-item">
                        <li><td><h3>   user : </h3></td><li><td><?php echo $adh['user'];?></td>
                        <li><td><h3>   titre : </h3></td><li><td><?php echo $adh['titre'];?></td>
                        <li><td><h3>   contenu :</h3></td><li><td><?php echo $adh['contenu'];?></td>
                        
                            <div class="text-muted small text-center align-self-center">
                            <span> <a href="ajoutercommentairef.php?id_poste=<?php echo $adh['id_poste']; ?>" class="button-1 btn-primary">ajouter commentaire</a><span> 
            
                            <span><a href="comf.php?id_poste=<?php echo $adh['id_poste']; ?>" class="button-1">voir commentaire</a><span>
                            <span><i class="far fa-comment ml-2"></i><?php echo $adh['date_de_pub'];?> </span>
                               <!-- <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                <span><i class="far fa-comment ml-2"></i> 3</span>-->
                            </div>
                        </div>
                    </div>
                </div>
              
            <tr>
                
                
                
               
                
            
                
              
               
    
                
           
            </td>

            </tr>
        <?php
            }
        ?>
                    </table>
                
                      
                       
                        
                    
                </div>
            </div>
        </div>
    </div>

               
                
                <center>
                
    <a href="ajouterb.php" class="button-1 has-icon btn-block" >Ajouter poste
                        
                        </a>
               
               <center>



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
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="forumf">forum</span></a></div>
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