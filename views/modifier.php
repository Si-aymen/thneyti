<?php
include "../controller/couponC.php";
include_once '../Model/coupon.php';

$coupon = new couponC();
$error = "";


if (
    
    isset($_POST["date_deb"]) &&
    isset($_POST["date_experation"]) &&
    isset($_POST["taux_reduction"]) &&
    isset($_POST["code_coupon"])
) {
    if (
       
        !empty($_POST["date_deb"]) &&
        !empty($_POST["date_experation"]) &&
        !empty($_POST["taux_reduction"]) &&
        !empty($_POST["code_coupon"])
    ) {
        $user = new coupon(
           
            $_POST['date_deb'],
            $_POST['date_experation'],
            $_POST['taux_reduction'],
            $_POST['code_coupon']
        );

        $coupon->modifier($coupon, $_GET['id']);
        header('refresh:5;url=afficherListeCoupon.php');
    } else
        $error = "Missing information";
}

?>
<html>

<head>
    <title>Modifier coupon</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    
    <button><a href="afficherListeCoupon.php">Retour à la liste</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_GET['id'])) {
        $user = $coupon->recuperercoupon($_GET['id']);

    ?>
        <form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='4' colspan='1'>
                        Fiche Personnelle
                    </td>
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="id" id="id" value="<?php echo $user['id']; ?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="date_deb">date_deb:
                        </label>
                    </td>
                    <td><input type="date" name="date_deb" id="date_deb"  value="<?php echo $user['date_deb']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="date_experation">date_experation:
                        </label>
                    </td>
                    <td><input type="date" name="date_experation" id="date_experation"  value="<?php echo $user['date_experation']; ?>"></td>
                </tr>

                <tr>
                    <td>
                        <label for="taux_reduction">taux_reduction:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="taux_reduction" id="taux_reduction"  value="<?php echo $user['taux_reduction']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="code_coupon">code_coupon:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="code_coupon" id="code_coupon"  value="<?php echo $user['code_coupon']; ?>">
                    </td>
                </tr>
               

                <tr>
                    
                    <td>
                        <input type="submit" value="Modifier" name="modifer">
                    </td>
                    <td>
                        <input type="reset" value="Annuler">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>