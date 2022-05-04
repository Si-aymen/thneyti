<?php
require_once '../controller/reservationc.php';
require_once '../controller/moyen_de_transportc.php';

$adC=new reservationc();
$moyc=new moyen_de_transportc();
$liste_moy = $moyc->afficher();
$liste =$adC->afficher();
$nb=$adC->getRowsNumber();
$n=$moyc->getRowsNumber_moy();



                                 $db=config::getConnexion();
                                 
                                $sort="";
                                if(isset ($_GET['sort']))
                                {
                                if ($_GET['sort']=="a-z")
                                {
                                    $sort="ASC";
                                }
                                if($_GET['sort']=="z-a")
                                {
                                    $sort="DESC";
                                }
                            }
                            $liste_moy=$db->prepare("SELECT * FROM moyen_de_transport ORDER BY depart $sort");
                           
                           $liste_moy->execute();
                        
                              

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
            <li><a href="index.php"><img src="dashboard (2).png" alt="">&nbsp; <span> Dashboard</span> </a></li>
            <li><a href="index.php"><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </a> </li>
            <li><a href="index.php"><img src="teacher2.png" alt="">&nbsp;<span>Clients</span>  </a></li>
            <li><a href="index.php"><img src="school.png" alt="">&nbsp;<span>Reclamations</span>  </a></li>
            <li><a href="reservation_index.php"><img src="payment.png" alt="">&nbsp;<span>reservation</span>  </a></li>
            <li><a href="index.php"><img src="help-web-button.png" alt="">&nbsp; <span>Help</span> </a></li>
            <li><a href="index.php"><img src="settings.png" alt="">&nbsp;<span>Settings</span> </a> </li>
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
                    <a href="stat.php" class="btn">stats</a>
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
                        <h1><?php echo $adC->getRowsNumber();?></h1>
                        <h1><?php// $nb?></h1>
                        <h3>reservations</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <h1><?php echo $moyc->getRowsNumber_moy();?></h1>
                        <h3>moyen de transport</h3>
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
                        <h2>Recent reservations</h2>
                        <a href="ajouterreservation.php" class="btn">add new reservation</a>
                    </div>
                    <table>
                    <tr>
            <td>Num</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Adresse</td>
            <td>Email</td>
            <td>Date Inscription</td>
            <td>Modifier</td>
            <td>Supprimer</td>
            <td>Details</td>
            
        </tr>
        <?php
            foreach ($liste as  $adh){
        ?>
            <tr>
                <td><?php echo $adh['numabon'];?></td>
                <td><?php echo $adh['nom'];?></td>
                <td><?php echo $adh['prenom'];?></td>
                <td><?php echo $adh['adresse'];?></td>
                <td><?php echo $adh['email'];?></td>
                <td><?php echo $adh['dateinscription'];?></td>
                <td><a href="modifierreservation.php?numabon=<?php echo $adh['numabon'];?>" class="btn">modifier</a></td>
                <td><a href="supprimerAdherent.php?numabon=<?php echo $adh['numabon']; ?>" class="btn">Supprimer</a></td>
                <td><a href="detailsReservation.php?numabon=<?php echo $adh['numabon']; ?>" class="btn">details</a></td>

            </tr>
        <?php
            }
        ?>
                </div>
                </table>

 
                
            </div>    
        </div>
        



        <div class="content-2">
            
                <div class="recent-payments">
               
                    <div class="title">

                        <h2>moyen de transport</h2>
                        <a href="ajouter_moyen_de_transport.php" class="btn">add new Moy transport</a>
                        </div>
                        <form action="reservation_index.php" class="d-none d-md-flex ms-4" method="GET" >
                        <button type="submit" class="btn btn-primary" id="basic">Sort by</button>
            <select name="sort"  value="sort">
                    <option value="" class="d-none d-md-flex ms-4" selected>---Select Option---</option>
          <option value="a-z" <?php if(isset ($_GET['sort']) && $_GET['sort']=="a-z"){echo "selected";} ?> > Lastname (ASC)</option>
          <option value="z-a" <?php if(isset ($_GET['sort']) && $_GET['sort']=="z-a"){echo "selected";} ?>>Lastname (DESC)</option>
      </select>

      
     
     
            </form>

<table>
                    <tr>
            <td>id_moy</td>
            <td>prix</td>
            <td>disponibilite</td>
            <td>depart</td>
            <td>destination</td>
            <td>date_depart</td>
            <td>AR</td>
            <td>date_retour</td>
            <td>Modifier</td>
            <td>Supprimer</td>
            <td>Details</td>
            
        </tr>
        <?php
            foreach ($liste_moy as  $adh){
        ?>
            <tr>
                <td><?php echo $adh['id_moy'];?></td>
                <td><?php echo $adh['prix'];?></td>
                <td><?php echo $adh['disponibilite'];?></td>
                <td><?php echo $adh['depart'];?></td>
                <td><?php echo $adh['destination'];?></td>
                <td><?php echo $adh['date_depart'];?></td>
                <td><?php echo $adh['AR'];?></td>
                <td><?php echo $adh['date_retour'];?></td>
                <td><a href="modifierreservation.php?id_moy=<?php echo $adh['id_moy'];?>" class="btn">modifier</a></td>
                <td><a href="supprimer_moyen_de_transport.php?id_moy=<?php echo $adh['id_moy']; ?>" class="btn">Supprimer</a></td>
                <td>
                    <form method="POST"
                    action="detailsReservation.php">
                    <input type="submit" value="voir Details" class="btn" >
                    <input type="hidden" name="id_moy" value="<?php echo $adh["id_moy"] ; ?>">
            </form>
            </td>
            </tr>
        <?php
            }
        ?>
                    </table>

                </div>
                </div>
                


</body>

</html>