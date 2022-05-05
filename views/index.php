<?php
include '../controller/ReclamationC.php';

$adC=new ReclamationC();

if (isset($_GET['key'])) {
        $liste = $adC->rechercheReclamation($_GET['key']);
    } else 
$liste=$adC->afficherReclamation() ;

//$liste =$adC->afficherReclamation();

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
        <ul>
            <li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </li>
            <li><a href="indexcat.php" ><img src="school.png" alt="">&nbsp;<span>Catégories</span></a> </li>
            <li><a href="index.php" ><img src="school.png" alt="">&nbsp;<span>Reclamations</span></a> </li>
            <li><a href="indexrep.php" ><img src="school.png" alt="">&nbsp;<span>Réponses</span></a> </li>
            <li><img src="payment.png" alt="">&nbsp;<span>Income</span> </li>
            <li><img src=".png" alt="">&nbsp;<span>code</span> </li>
            <li><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></li>
            <li><img src="settings.png" alt="">&nbsp;<span>Settings</span> </li>
        </ul>
    </div>

    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="ajouter.php" class="btn">Ajouter Reclamation</a>
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
                        <h3>Offers</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>offre reserved </h3>
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
                        <h1>35000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>recent reclamation</h2>
                        <a href="pdf.php" class="btn">PDF</a>
                        <a href="tri_reclamation.php" class="btn">Trier</a>
                    </div>
                    
                    <table>
                    <tr>
            
                <td><h5>nom</h5></td>
                <td><h5>prenom</h5></td>
                <td><h5>cin</h5></td>
                <td><h5>email</h5></td>
                <td><h5>province</h5></td>
                <td><h5>sexe</h5></td>
                <td><h5>commentaire</h5></td>
            
                <td><h5>Modifier</h5></td>
                <td><h5>Supprimer</h5></td>
                <td><h5>Repondre</h5></td>
                <td><h5>Mail</h5></td>
                <td><h5>Details</h5></td>
            
             </tr>
             <form method="get" action="index.php">
                    <input type="text" name="key" placeholder="chercher..." />
                    <input type="submit" value="chercher" placeholder="chercher..." class="btn btn-default btn-primary" />

                </form>
      <?php
            foreach ($liste as  $adh){
        ?>
            <tr>
                <td><?php echo $adh['nom'];?></td>
                <td><?php echo $adh['prenom'];?></td>
                <td><?php echo $adh['cin'];?></td>
                <td><?php echo $adh['email'];?></td>
                <td><?php echo $adh['province'];?></td>
                <td><?php echo $adh['sexe'];?></td>
                <td><?php echo $adh['commentaire'];?></td>
            
                
                <td><a href="modifier.php?cin=<?php echo $adh['cin']; ?>" class="btn">modifier</a></td>
                <td><a href="supprimer.php?cin=<?php echo $adh['cin']; ?>" class="btn">Supprimer</a></td>
                <td><a href="indexrep.php?cin=<?php echo $adh['cin']; ?>" class="btn">Répondre</a></td>
                <td><a href="mail.php?cin=<?php echo $adh['cin']; ?>" class="btn">Mail</a></td>
    
                <td>
                    <form method="POST"
                    action="detail.php">
    
                    <input type="submit" value="Details" class="btn" >
                    <input type="hidden" name="cin" value="<?php echo $adh["cin"] ; ?>">
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