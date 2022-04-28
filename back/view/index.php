<?php
include '../controller/posteC.php';

$adC=new posteC();

$liste =$adC->afficherposte();

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
            <li><a href ="index.php"><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </a></li>
            <li><a href ="index.php"><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span></a> </li>
            <li><a href ="index.php"><img src="teacher2.png" alt="">&nbsp;<span>Clients</span></a> </li>
            <li><a href ="index.php"><img src="school.png" alt="">&nbsp;<span>Reclamations</span></a> </li>
            <li><a href ="index.php"><img src="payment.png" alt="">&nbsp;<span>Income</span> </a></li>
            <li><a href ="index.php"><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></a></li>
            <li><a href ="index.php"><img src="info.png" alt="">&nbsp; <span>forum</span></a></li>
            <li><a href ="index.php"><img src="settings.png" alt="">&nbsp;<span>Settings</span></a> </li>
        
        </ul>
    </div>

    <div class="container">
        <div class="header">
            <div class="nav">
               
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
                        
                        <a href="ajouter.php" class="btn" >Ajouter poste
                        
                    </a>
                    </div>
                    
                    <table>
                    <tr>
            <td> <h5>id_poste</h5></td>
            <td><h5>titre</h5></td>
            <td><h5>contenu</h5></td>
            
            <td><h5>date_de_pub</h5></td>
            
            <td><h5>Modifier</h5></td>
            <td><h5>Supprimer</h5></td>
            <td><h5>Details</h5></td>
            <td><h5>ajouter commentaire</h5></td>
            <td><h5>voir commentaire</h5></td>
            
        </tr>
        <!--<form method="get" action="index.php">
                    <input type="text" name="key" placeholder="chercher..." />
                    <input type="submit" value="chercher" placeholder="chercher..." class="btn btn-default btn-primary" />

                </form>-->
        <?php
            foreach ($liste as  $adh){
        ?>
            <tr>
                <td><?php echo $adh['id_poste'];?></td>
                <td><?php echo $adh['titre'];?></td>
                <td><?php echo $adh['contenu'];?></td>
               
                <td><?php echo $adh['date_de_pub'];?></td>
            
                
                <td><a href="modifier.php?id_poste=<?php echo $adh['id_poste']; ?>" class="btn">modifier</a></td>
                <td><a href="supprimer.php?id_poste=<?php echo $adh['id_poste']; ?>" class="btn">Supprimer</a></td>
    
                <td>
                    <form method="POST"
                    action="detail.php">
    
                    <input type="submit" value="voir Details" class="btn" >
                    <input type="hidden" name="id_poste" value="<?php echo $adh["id_poste"] ; ?>">
            </form>

            <td><a href="ajoutercommentaire.php?id_poste=<?php echo $adh['id_poste']; ?>" class="btn">ajouter commentaire</a></td> 
            <td><a href="com.php?id_poste=<?php echo $adh['id_poste']; ?>" class="btn">voir commentaire</a></td>
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