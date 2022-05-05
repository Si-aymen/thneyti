<?PHP

ob_start();
include "../controller/userC.php";

$userC= new userC();

if (
  isset($_POST["nom"])&&
  isset($_POST['prenom'])&&
isset($_POST['date_de_naissance'])&&
isset($_POST['email'])&&
isset($_POST['mot_de_passe'])&&
isset($_POST['adresse'])&&
isset($_POST['sexe'])&&
isset($_POST['permis'])&&
isset($_POST['role'])&&
isset($_POST['tel'])
  
) {
  if (
      !empty($_POST["nom"])&& 
      !empty($_POST["prenom"]) &&
      !empty($_POST["date_de_naissance"])&& 
      !empty($_POST["email"]) &&
      !empty($_POST["mot_de_passe"])&& 
      !empty($_POST["adresse"]) &&
      !empty($_POST["sexe"]) &&
      !empty($_POST["permis"]) &&
      !empty($_POST["role"]) &&
      !empty($_POST["tel"]) 
  ) 
      {
        

        $user=new user( 
          $_POST['nom'],
          $_POST['prenom'],
          $_POST['date_de_naissance'],
          $_POST['email'],
          
          $_POST['adresse'],
          $_POST['sexe'],
          $_POST['permis'],
          $_POST['role'],
          $_POST['tel']
        );
        var_dump($user);
      $userC->modifier($user,$_GET['id']);
      //header('Location:index.php');
  
}
  else
      $error = "Missing information";
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


<div class="banner_section">
      <div class="container-fluid">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
          <div class="col-md-3">

            
          </div>
          <div class="col-md-6">
            <h1 class="booking_text">Modification</h1>
            <div class="contact_bg">
            <div class="input_main">
              <div class="container">
                <h2 class="request_text">Please enter the modified informations</h2>

                <?php  
                    if (isset($_GET['id'])){
                      $result=$userC->recupererUser($_GET['id']);
                      
                    
                ?>

                <form method='POST' action="">
                
                <div class="form-group">
                  <label>Nom</label>
                  <input type="text" class="email-bt" id="nom" value="<?php echo $result ['nom'];?>" name="nom" required>
                </div>
               
                <div class="form-group">
                  <label>Prenom</label>
                  <input type="text" class="email-bt" id="prenom" value="<?php echo $result ['prenom'];?>" name="prenom" required>
                </div>
                <div class="form-group">
                  <label>Date de naissance</label>
                  <input type="date" class="email-bt" id="date_de_naissance" name="date_de_naissance"  value="<?php echo $result ['date_de_naissance'];?>" required>
                </div>
                <div class="form-group">
                  <label>E-mail</label>
                  <input type="email" class="email-bt" id="email" value="<?php echo $result ['email'];?>" name="email" required>
                </div>
                

                <div class="form-group">
                  <label>Adresse</label>
                  <input type="text" class="email-bt" id="adresse" value="<?php echo $result ['adresse'];?>" name="adresse" required>
                </div>
                <div class="form-group">
                  <label>Sexe</label><br>
                  <input type="radio" id="homme" name="sexe" value="homme" <?php if ($result['sexe'] == 'homme') { echo "checked='checked'"; } ?> > <label for="homme">Homme</label><br>
                  <input type="radio" id="femme" name="sexe" value="femme" <?php if ($result['sexe'] == 'femme') { echo "checked='checked'"; } ?> > <label for="femme">Femme</label><br>
                </div>
                <div class="form-group">
                  <label>Permis</label><br>
                  <input type="radio" id="oui" name="permis" value="oui" <?php if ($result['permis'] == 'oui') { echo "checked='checked'"; } ?> > <label for="oui">Oui</label><br>
                  <input type="radio" id="non" name="permis" value="non" <?php if ($result['permis'] == 'non') { echo "checked='checked'"; } ?>> <label for="non">Non</label><br>
                </div>
                <div class="form-group">
                  <label>Numero de Telephone</label>
                  <input type="tel" class="email-bt" id="tel" value="<?php echo $result ['tel'];?>" name="tel" >
                </div>
                <div class="form-group">
                  <label>Role</label><br>
                  <input type="radio" id="client" name="role" value="client" <?php if ($result['role'] == 'client') { echo "checked='checked'"; } ?> > <label for="client">Client</label><br>
                  <input type="radio" id="admin" name="role" value="admin" <?php if ($result['role'] == 'admin') { echo "checked='checked'"; } ?>> <label for="admin">Admin</label><br>
                </div>
                <input type="submit" value="modifier" class="button-1" onclick="return verif()">
                <input type="reset" value="Annuler" class="button-1">



                  </form>

                  <?php } ?>
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




</div>
                      <div class="modal-footer d-flex justify-content-center">
                        
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
     
</body>
