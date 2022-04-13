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
    <title>Document</title>
</head>
<body>
    <table> <table border = 1 >
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
                <td>Modifier</td>
                <td><a href="supprimerAdherent.php?numabon=<?php echo $adh['numabon']; ?>">Supprimer</a></td>
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
</body>
</html>