<?php
include '../controller/userC.php';

$adC=new userC();

$liste =$adC->afficherUser();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>THNEYTI ADMIN</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>THNEYTI</h1>
        </div>
        <ul>
            <li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </li>
            <li><img src="teacher2.png" alt="">&nbsp;<span>Clients</span> </li>
            <li><img src="school.png" alt="">&nbsp;<span>Reclamations</span> </li>
            <li><img src="payment.png" alt="">&nbsp;<span>Income</span> </li>
            <li><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></li>
            <li><img src="settings.png" alt="">&nbsp;<span>Settings</span> </li>
        </ul>
    </div>

    <div class="container">
        <div class="header">
            <div class="nav">

            <div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                <div class="user">
                <div class="fb-share-button" data-href="http://localhost/WEB/Utilisateur/back/views/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8000%2FAffichepofro&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><img src="notifications.png" alt=""></a></div>

                    
                    <div class="img-case">
                        <a href="../../front/index.html" >
                        <img src="user.png" alt="">
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>194</h1>
                        <h3>Offres</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Offres reservees </h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Reclamations</h3>
                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>3500</h1>
                        <h3>Effectuees</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div>
            </div>


		
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Liste Utilisateurs</h2>
                       
                    </div>
                    
                    <table>
                    <tr>
            <td> <h5>ID</h5></td>
            <td><h5>Nom</h5></td>
            <td><h5>Prenom</h5></td>
            <td><h5>Date de Naissance</h5></td>
            <td><h5>Email</h5></td>
            <td> <h5>Mot de passe</h5></td>
            <td><h5>Adresse</h5></td>
            <td><h5>Sexe</h5></td>
            <td><h5>Permis</h5></td>
            <td><h5>Tel</h5></td> 
            <td><h5>Role</h5></td> 
            <td><h5>Modifier</h5></td>
            <td><h5>Supprimer</h5></td>
            <td><h5>Details</h5></td>

        </tr>
        <?php
            foreach ($liste as  $adh){
        ?>
            <tr>
            
                 <td><?php echo $adh ['id'];?></td>
                 <td><?php echo $adh ['nom'];?></td>
                 <td><?php echo $adh ['prenom'];?></td>
                 <td><?php echo $adh ['date_de_naissance'];?></td>
                 <td><?php echo $adh ['email'];?></td>
                 <td style=" -webkit-text-security: disc; /* Default */ "><?php echo $adh ['mot_de_passe'];?></td>
                 <td><?php echo $adh ['adresse'];?></td>
                 <td><?php echo $adh ['sexe'];?></td>
                 <td><?php echo $adh ['permis'];?></td>
                 <td><?php echo $adh ['tel'];?></td>
                 <td><?php echo $adh ['role'];?></td>

         
                <td><a href="modifier.php?id=<?php echo $adh['id']; ?>" class="btn">Modifier</a></td>
                <td><a href="supprimer.php?id=<?php echo $adh['id']; ?>" class="btn">Supprimer</a></td>
    
                <td>
                    <form method="POST"
                    action="detail.php">
    
                    <input type="submit" value="Details" class="btn" >
                    <input type="hidden" name="id" value="<?php echo $adh["id"] ; ?>">
            </form>
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
</body>

</html>