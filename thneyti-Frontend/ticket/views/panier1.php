
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="style.css">

  <!--
    - google font link
  -->

</head>

<body>
</body>
</html>
<?php
include '../controller/commandeC.php';
include '../model/commande.php';

$commandeC=new commandeC();
$s=0;

if(
isset($_POST['numcarte']) && isset($_POST['codecarte']) && isset($_POST['nbticketbus']) && isset($_POST['nbticketmetro']) && isset($_POST['nbtickettrain']) && isset($_POST['nom']) && isset($_POST['prixtotal'])
)

{
    $commande=new commande(


    $_POST['nom'],
    $_POST['numcarte'],
    $_POST['codecarte'],
    $_POST['nbticketbus'],
    $_POST['nbticketmetro'],
    $_POST['nbtickettrain'],

    $_POST['prixtotal'],

  );
 $s=1;
}

 ?>
<html>
<head></head>
  <!--

    - main container
  -->
  <body>
<form action="" method="POST">
  <main class="container">

    <h1 class="heading">
      <ion-icon name="cart-outline"></ion-icon> Shopping Cart
    </h1>

    <div class="item-flex">

      <!--
       - checkout section
      -->
      <section class="checkout">

        <h2 class="section-heading">Payment Details</h2>

        <div class="payment-form">

          <div class="payment-method">

            <button class="method selected">
              <ion-icon name="card"></ion-icon>

              <span>e-dinar</span>

              <ion-icon class="checkmark fill" name="checkmark-circle"></ion-icon>
            </button>



          </div>



            <div class="cardholder-name">
              <label for="nom" class="label-default">name</label>
              <input type="text" name="nom" id="nom" class="input-default" required>
            </div>

            <div class="card-number">
              <label for="card-number" class="label-default">num carte</label>
              <input type="number" name="numcarte" id="numcarte" class="input-default" required>
            </div>
            <div class="card-number">
              <label for="codecarte" class="label-default">code carte</label>
              <input type="number" name="codecarte" id="codecarte" class="input-default" required>
            </div>





        </div>
        <script>
          function smth() {
          var x =  document.getElementsByClassName('12').item(0);

            document.getElementById('nbticketbus').value = x.innerHTML;

            var x =  document.getElementsByClassName('13').item(0);

              document.getElementById('nbticketmetro').value = x.innerHTML;

              var x =  document.getElementsByClassName('14').item(0);

                document.getElementById('nbtickettrain').value = x.innerHTML;

                var x =  document.getElementsByClassName('15').item(0);

                  document.getElementById('prixtotal').value = x.innerHTML;

                 

          }
          function rim() {
          

                var x = document.getElementById('prixtotal').value;
                var a = document.getElementById('coupon').value;
                let y = parseFloat(x);
                var z = y;
                var i = document.getElementById('result') ;
                if (a == "WGAWXH"){
                z = y * 0.8;
                  document.getElementById('prixtotal').value = z;
                  i.innerHTML = "20%";
                  document.getElementById("activate").disabled = true; }
                  if (a == "NKYEPB"){
                z = y * 0.5 ;
                  document.getElementById('prixtotal').value = z;
                  i.innerHTML = "50%";
                  document.getElementById("activate").disabled = true; }
                  if (a == "NTXWAS"){
                z = y * 0.85 ;
                  document.getElementById('prixtotal').value = z;
                  i.innerHTML = "25%";
                  document.getElementById("activate").disabled = true; }

          }

        </script>
        <button class="btn btn-primary" type="button" onclick="smth()" id="hehe">
          <b>confirmer</b>  <span ></span>
        </button>
        <button class="btn btn-primary" type="submit" >
          <b>Payer</b> $ <span id="payAmount">0</span>
        </button>

      </section>


      <!--
        - cart section
      -->
      <section class="cart">

        <div class="cart-item-box">

          <h2 class="section-heading">Votre panier</h2>

          <div class="product-card">

            <div class="card">

              <div class="img-box">
                <img src="./images/bus.jpg" alt="Green tomatoes" width="80px" class="product-img">
              </div>

              <div class="detail">

                <h4 class="product-name">ticket bus</h4>

                <div class="wrapper">

                  <div class="product-qty" >
                    <button type="button" id="decrement">
                      <ion-icon name="remove-outline"></ion-icon>
                    </button>

                    <span id="quantity" class="12">0</span>

                    <button id="increment" type="button" >
                      <ion-icon name="add-outline"></ion-icon>
                    </button>

                  </div>

                  <div class="price">
                    $ <span id="price">1.25</span>
                  </div>

                </div>
                <input type="hidden" name="nbticketbus" id="nbticketbus" readonly>
              </div>



            </div>
            <div class="card">

              <div class="img-box">
                <img src="./images/metro.jpg" alt="Green tomatoes" width="80px" class="product-img">
              </div>

              <div class="detail">

                <h4 class="product-name">ticket metro</h4>

                <div class="wrapper">

                  <div class="product-qty">
                    <button id="decrement" type="button">
                      <ion-icon name="remove-outline"></ion-icon>
                    </button>

                    <span id="quantity" class="13">0</span>

                    <button id="increment" type="button">
                      <ion-icon name="add-outline"></ion-icon>
                    </button>
                  </div>

                  <div class="price">
                    $ <span id="price">1.25</span>
                  </div>

                </div>
                <input type="hidden" name="nbticketmetro" id="nbticketmetro" readonly >
              </div>



            </div>

          </div>

          <div class="product-card">

            <div class="card">

              <div class="img-box">
                <img src="./images/train.jpg" alt="Cabbage" width="80px" class="product-img">
              </div>

              <div class="detail">

                <h4 class="product-name">ticket train</h4>

                <div class="wrapper">

                  <div class="product-qty">
                    <button id="decrement" type="button">
                      <ion-icon name="remove-outline"></ion-icon>
                    </button>

                    <span id="quantity" class="14">0</span>

                    <button id="increment" type="button">
                      <ion-icon name="add-outline"></ion-icon>
                    </button>
                  </div>

                  <div class="price">
                    $ <span id="price">0.80</span>
                  </div>

                </div>

              </div>



            </div>
            <input type="hidden" name="nbtickettrain" id="nbtickettrain" readonly>
          </div>


        </div>

        <div class="discount-token">

            <label for="discount-token" class="label-default">Gift card/Discount code</label>

            <div class="wrapper-flex">

              <input type="text" name="coupon" id="coupon" class="input-default">
              <br>
              <div id="result"></div>

              <button  type="button"class="btn btn-outline" id="activate" onclick="rim()" >Apply</button>

            </div>

          </div>



          <div class="amount">

            <div class="subtotal">
              <span>Subtotal</span> <span>$ <span id="subtotal">0</span></span>
            </div>

            <div class="tax">
              <span>Tax</span> <span>$ <span id="tax">0</span></span>
            </div>



            <div class="total">
              <span>Total</span> <span>$ <span id="total" class="15">0</span></span>
            </div>
            <input type="text" name="prixtotal" id="prixtotal"  readonly required >
          </div>

        </div>

      </section>

    </div>

  </main>



  
</form>
<?php if($s==1)
{
$commandeC->ajouter($commande);
echo "<script>alert('Vous avez ajouter une commande');</script>";
echo "<script> window.location.href='transportalternatif.php'</script>";
}?>
  <!--
    - custom js link
  -->
  <script src="./script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
