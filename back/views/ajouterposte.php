


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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>THNEYTI Admin Panel</title>
</head>
<body>
<div class="side-menu">
        <div class="brand-name">
            <h1>THNEYTI</h1>
        </div>
        <ul>            <li><a href="dashboard.php"><img src="dashboard (2).png" alt="">&nbsp; <span> Dashboard</span> </a></li>
            <li><a href="offre.php"><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </a> </li>
            <li><a href="index.php"><img src="teacher2.png" alt="">&nbsp;<span>Clients</span>  </a></li>
            <li><a href="indexreclamation.php"><img src="school.png" alt="">&nbsp;<span>Reclamations</span>  </a></li>
            <li><a href="indexrep.php"><img src="school.png" alt="">&nbsp;<span>Réponses</span>  </a></li>
            <li><a href="indexcat.php"><img src="school.png" alt="">&nbsp;<span>Catégories</span>  </a></li>
            <li><a href="reservation_index.php"><img src="payment.png" alt="">&nbsp;<span>reservation</span>  </a></li>
            <li><a href="forum.php"><img src="info.png" alt="">&nbsp;<span>forum</span>  </a></li>
            <li><a href ="index_coupon.php"><img src="coupon.png" alt="">&nbsp;<span>code</span></a> </li>
            <li><a href ="index_pub.php"><img src="settings.png" alt="">&nbsp;<span>publicite</span></a> </li>       
            <li><a href="indexticket.php"><img src="settings.png" alt="">&nbsp;<span>Commande</span> </a> </li>
        
        </ul>
    </div>

    <div class="container">
        <div class="header">
            <div class="nav">
            <div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() 
{
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>



<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
              
                <div class="user">
                    
                    <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                   
                </div>
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>194</h1>
                        <h3>poste</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>commentaires</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <h1>forum</h1>
                       
                    </div>
                    <div class="icon-case">
                        <img src="info.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1></h1>
                        <h3></h3>
                    </div>
                    <div class="icon-case">
                       
                    </div>
                </div>
            </div>
            <!-- <a href="tri_date.php">Tri Par date</a> -->
            
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>liste des postes</h2>
                        <a href="forum.php" class="btn"> retour a la liste des postes</a>
                        
                        
                    
                    </div>

<form action="" method="POST">
 <div><pre>
 
<label for="titre">titre: <input type="text"  id="titre" name="titre" >    
<label for="contenu">contenu : <input type="text"  id="contenu" name="contenu">

<label for="date_de_pub">date_de_pub :  <input type="date" id="date_de_pub"  name="date_de_pub" >


				
			</div>    </pre> 
<button    type="submit" class="btn btn-primary" name="submit" Onclick="return validateForm()"  >Submit </button> 

        </form>
        <?php if($s==1)
{
$posteC->ajouterposte($poste);
echo "<script>alert('Vous avez ajouter un poste');</script>";
        echo "<script> window.location.href='forum.php'</script>";
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
        
        
</body>
</html> 