<?php
include '../controller/ticketC.php';
include '../controller/commandeC.php';
$adC=new ticketC();
$adm = new commandeC();

$liste =$adC->afficherTicket();
$liste1 = $adm -> affichercommande();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>THNEYTI Admin Panel</title>
<style>
.switch {
  width: 55px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.switch div {
  position: relative;
  display: block;
  background: #eee;
  width: 30px;
  border-radius: 50px;
  padding: 0 5px;
  box-sizing: border-box;
  cursor: pointer;
}
.fa-adjust {
  transform: rotate(180deg);
}
.switch input {
  display: none;
}
.slider {
  background-color: #999;
  transition: 0.4s;
  border-radius: 34px;
  height: 12px;
  width: 12px;
  display: inline-block;
  position: relative;
}
input:checked + .slider {
  transform: translateX(8px);
}

main {
  display: flex;
  align-items: center;
  justify-content: center;

}

.light-theme {
  --themeDropDownBg: var(--goldCrayola);
  --themeIconBorderColor: var(--sage);
  --navBg: var(--sage);
  --navLinkHoverBg: var(--paleSpringBud);
  --mainBg: var(--goldCrayola);
  --fontColor: var(--black);
}
.dark-theme {
  --themeDropDownBg: var(--msuGreen);
  --themeIconBorderColor: var(--richBlackForeground);
  --navBg: var(--richBlackForeground);
  --navLinkHoverBg: var(--msuGreen);
  --mainBg: var(--msuGreen);
  --fontColor: var(--white);
}

* {
  color: var(--fontColor);
}

nav {
  background: var(--navBg);
}

nav ul li:hover {
  background-color: var(--navLinkHoverBg);
}

main {
  background: var(--mainBg);
}
* {

  box-sizing: border-box;
}
#text {
    padding: 10px;
    border-radius: 20px;
    border: 2px solid steelblue;
    font-size: 1.5rem;
    letter-spacing: 2px;
    outline: none;
}
h1 {
    font-family: sans-serif;
}
.side-menu .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
</style>
<script>
function dark() {
  var element = document.getElementById('ff1');
  element.classList.toggle("dark-mode");
}
const themeSwitch = document.querySelector('input');

themeSwitch.addEventListener('change', () => {
  document.body.classList.toggle('dark-theme');
});



</script>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/regular.min.js"
  />
</head>

<body class="light-theme">
    <div class="side-menu" id="mySidenav">
        <div class="brand-name">
            <h1>THNEYTI</h1>
        </div>
        <ul>            <li><a href="dashboard.php"><img src="dashboard (2).png" alt="">&nbsp; <span> Dashboard</span> </a></li>
            <li><a href="offre.php"><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </a> </li>
            <li><a href="index.php"><img src="teacher2.png" alt="">&nbsp;<span>Clients</span>  </a></li>
            <li><a href="indexreclamation.php"><img src="school.png" alt="">&nbsp;<span>Reclamations</span>  </a></li>
            <li><a href="indexrep.php"><img src="school.png" alt="">&nbsp;<span>Réponses</span>  </a></li>
            <li><a href="indexcat.php"><img src="school.png" alt="">&nbsp;<span>Catégories</span>  </a></li>
            <li><a href="reservation_index.php"><img src="payment.png" alt="">&nbsp;<span>reservation</span>  </a></li>
            <li><a href="forum.php"><img src="info.png" alt="">&nbsp;<span>forum</span>  </a></li>
            <li><a href ="index_coupon.php"><img src="coupon.png" alt="">&nbsp;<span>code</span></a> </li>
            <li><a href ="index_pub.php"><img src="settings.png" alt="">&nbsp;<span>publicite</span></a> </li>       
            <li><a href="indexticket.php"><img src="settings.png" alt="">&nbsp;<span>Commande</span> </a> </li>
        </ul>
    </div>
    <main>
    <div >
    <div class="container" id="ez">
        <div class="header">
            <div class="nav">
            <div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() 
{
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>



<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
              

<div class="user">
                <div class="fb-share-button" data-href="http://localhost/WEB/Utilisateur/back/views/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8000%2FAffichepofro&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><img src="notifications.png" alt=""></a></div>

                    
                    <div class="img-case">
                        <a href="../../front/index.php  " >
                        <img src="user.png" alt="">
                        </a>
                        
                    </div>
                </div>

              <span onclick="openNav()">open</span>

                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                <div class="user">
                  <label class="switch">
          <i class="fas fa-adjust"></i>
          <div>
            <input type="checkbox" />
            <span class="slider round"></span>
          </div>
        </label>

                </div>
                <div class="user">

                   
                    <div class="img-case">
                      
                    </div>
                </div>
            </div>
        </div>

        <div id="">
        <div class="content" >
            <br>

            <div class="content-2" >
                <div class="recent-payments" id="ff1">
                    <div class="title">
                        <h2>tickets recents</h2>
                        <a href="ajouterticket.php" class="btn">ajouter ticket</a>
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


                <td><a href="modifierticket.php?id=<?php echo $adh['id']; ?>" class="btn">modifier</a></td>
                <td><a href="supprimerticket.php?id=<?php echo $adh['id']; ?>" class="btn">Supprimer</a></td>

                <td>
                    <form method="POST"
                    action="detailticket.php">

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
                        <h2>gerer commande</h2>
                        <a href="afficherListecommande.php" class="btn">imprimer liste des commandes</a>
                    </div>

                    <table>
                    <tr>
            <td> <h5>id</h5></td>
            <td> <h5>nom</h5></td>
            <td><h5>numcarte</h5></td>
            <td><h5>codecarte</h5></td>
            <td> <h5>nbticketbus</h5></td>
            <td> <h5>nbticketmetro</h5></td>
            <td> <h5>nbtickettrain</h5></td>
            <td> <h5>prixtotal</h5></td>


        </tr>
        <?php
            foreach ($liste1 as  $ad){
        ?>
            <tr>

              <tr>
                <td><?php  echo $ad['id'];?></td>
                <td><?php  echo $ad['nom'];?></td>
                <td><?php  echo $ad['numcarte'];?></td>
                <td><?php  echo $ad['codecarte'];?></td>
                <td><?php  echo $ad['nbticketbus'];?></td>
                <td><?php  echo $ad['nbticketmetro'];?></td>
                <td><?php  echo $ad['nbtickettrain'];?></td>
                <td><?php  echo $ad['prixtotal'];?></td>

                    </tr>

                <td>

            </td>

            </tr>
        <?php
            }
        ?>
                    </table>





                </div>
                <div class="recent-payments">

                <center>  <h3> QR code admin </h3> </center>
                  <input
    type="text"
    spellcheck="false"
    id="text"
    value="http://localhost/thneyti/views/transportalternatif.php"
  />
   <center><div id="qrcode"></div> </center>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
  <script type="text/javascript">

  const qrcode = document.getElementById("qrcode");
  const textInput = document.getElementById("text");

  const qr = new QRCode(qrcode);
  qr.makeCode(textInput.value.trim());

  textInput.oninput = (e) => {
    qr.makeCode(e.target.value.trim());
  };

  </script>

                </div>
            </div>

        </div>
      </div>
    </div>
  </div>
  </main>
</body>

</html>
