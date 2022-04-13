<?php
include '../controller/adherentc.php';

$adC=new reservationc();

$liste =$adC->afficher();

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
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="ajouteradherent.php" class="btn">Add New resrevation</a>
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
                        <h2>Recent reservations</h2>
                        <a href="#" class="btn">View All</a>
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
                <td><a href="#" class="btn">modifier</a></td>
                <td><a href="supprimerAdherent.php?numabon=<?php echo $adh['numabon']; ?>" class="btn">Supprimer</a></td>
                <td>
                    <form method="POST"
                    action="detailsAdherent.php">
                    <input type="submit" value="voir Details" >
                    <input type="hidden" name="numabon" value="<?php echo $adh["numabon"] ; ?>">
            </form>
            </td>

            </tr>
        <?php
            }
        ?>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New offers</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Offer</th>
                            <th>option</th>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>Tunis-->Ariana</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>Tunis-->Ariana</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>Tunis-->Ariana</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>Tunis-->Ariana</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>

                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>