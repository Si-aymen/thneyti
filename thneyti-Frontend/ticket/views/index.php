<?php
include '../controller/ticketC.php';

$adC=new ticketC();

$liste =$adC->afficherTicket();

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
                    <a href="ajouter.php" class="btn">Add user</a>
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <br>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>tickets recents</h2>
                        <a href="afficherListeTicket.php" class="btn">View All</a>
                    </div>

                    <table>
                    <tr>
            <td> <h5>ID</h5></td>
            <td><h5>Quandtité</h5></td>
            <td><h5>prix</h5></td>

        </tr>
        <?php
            foreach ($liste as  $adh){
        ?>
            <tr>

                 <td><?php echo $adh ['id'];?></td>
                 <td><?php echo $adh ['quantite'];?></td>
                 <td><?php echo $adh ['prix'];?></td>


                <td><a href="modifier.php?id=<?php echo $adh['id']; ?>" class="btn">modifier</a></td>
                <td><a href="supprimer.php?id=<?php echo $adh['id']; ?>" class="btn">Supprimer</a></td>

                <td>
                    <form method="POST"
                    action="detail.php">

                    <input type="submit" value="voir Details" class="btn" >
                    <input type="hidden" name="id" value="<?php echo $adh["id"] ; ?>">
            </form>
            </td>

            </tr>
        <?php
            }
        ?>
                    </table>





                </div>
                <br>

                <div class="recent-payments">
                    <div class="title">
                        <h2>gerer transport</h2>
                        <a href="afficherListeTicket.php" class="btn">View All</a>
                    </div>

                    <table>
                    <tr>
            <td> <h5>nb personnes</h5></td>
            <td><h5>nb restant</h5></td>
            <td><h5>likablility</h5></td>

        </tr>
        <?php
            foreach ($liste as  $adh){
        ?>
            <tr>

                 <td><?php echo $adh ['id'];?></td>
                 <td><?php echo $adh ['quantite'];?></td>
                 <td><?php echo $adh ['prix'];?></td>


                <td><a href="modifier.php?id=<?php echo $adh['id']; ?>" class="btn">modifier</a></td>
                <td><a href="supprimer.php?id=<?php echo $adh['id']; ?>" class="btn">Supprimer</a></td>

                <td>
                    <form method="POST"
                    action="detail.php">

                    <input type="submit" value="voir Details" class="btn" >
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
