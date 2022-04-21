<?php
include '../controller/pubC.php';

$adC=new pubC();

$liste =$adC->affichercoupon();


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
            <li><a href ="index_coupon.php"><img src="coupon.png" alt="">&nbsp;<span>code</span></a> </li>
            <li><a href ="index_pub.php"><img src="settings.png" alt="">&nbsp;<span>publicite</span></a> </li>
            <li><a href ="index.php"><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></a></li>
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
            <!-- <a href="tri_date.php">Tri Par date</a> -->
            
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>recent publicité</h2>
                        <a href="index_pub.php" class="btn">View All</a>
                        <!-- Button trigger modal -->

                        <a href="ajouterpub.php" class="btn" >Add publicité
                        
                    </a>
                    </div>
                    
                    <table>
                    <tr>
            <td> <h5>ID</h5></td>
            <td><h5>photo</h5></td>
            <td><h5>date debut</h5></td>
            <td><h5>date fin</h5></td>
           
            
            <td><h5>Modifier</h5></td>
            <td><h5>Supprimer</h5></td>
            <td><h5>Details</h5></td>
            
        </tr>
        <?php
            foreach ($liste as  $adh){
        ?>
            <tr>
                <td><?php echo $adh['id_publication'];?></td>
                <td><?php echo $adh['photo'];?></td>
                <td><?php echo $adh['date_debut'];?></td>
                <td><?php echo $adh['date_fin'];?></td>
               
            
                
                <td><a href="modifier_pub.php?id_publication=<?php echo $adh['id_publication']; ?>" class="btn">modifier</a></td>
                <td><a href="supprimer_pub.php?id_publication=<?php echo $adh['id_publication']; ?>" class="btn">Supprimer</a></td>
    
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