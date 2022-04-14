
<?php
include "../controller/couponC.php";
include_once '../Model/coupon.php';
$error = "";
$coupon = null;
$couponC = new couponC();



if (
    isset($_POST["id"]) &&
    isset($_POST["date_deb"]) &&
    isset($_POST["date_experation"]) &&
    isset($_POST["taux_reduction"]) &&
    isset($_POST["code_coupon"])
) {
    if (
        !empty($_POST["id"]) &&

        !empty($_POST["date_deb"]) &&
        !empty($_POST["date_experation"]) &&
        !empty($_POST["taux_reduction"]) &&
        !empty($_POST["code_coupon"])
    ) {
        $coupon = new Coupon(
            $_POST['id'],

            $_POST['date_deb'],
            $_POST['date_experation'],
            $_POST['taux_reduction'],
            $_POST['code_coupon']
        );

        $couponC->modifier($coupon, $_GET['id']);
        header('refresh:5;url=index.php');
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
    
    <button><a href="index.php">Retour à la liste</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_GET['id'])) {
        $id = $couponC->recuperercoupon($_GET['id']);

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
                        <input type="number" name="id" id="id" value="<?php echo $id['id']; ?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="date_deb">date_deb:
                        </label>
                    </td>
                    <td><input type="date" name="date_deb" id="date_deb"  value="<?php echo $id['date_deb']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="date_experation">date_experation:
                        </label>
                    </td>
                    <td><input type="date" name="date_experation" id="date_experation"  value="<?php echo $id['date_experation']; ?>"></td>
                </tr>

                <tr>
                    <td>
                        <label for="taux_reduction">taux_reduction:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="taux_reduction" id="taux_reduction"  value="<?php echo $id['taux_reduction']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="code_coupon">code_coupon:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="code_coupon" id="code_coupon"  value="<?php echo $id['code_coupon']; ?>">
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