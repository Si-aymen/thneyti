<?php

include '../controller/commandeC.php';
include '../model/commande.php';

$AC = new commandeC();//appel au controlleur
$liste = $AC-> affichercommande();
// var_dump($liste);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>commandes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script>
  function rrr() {
    document.getElementById('bout').setAttribute("style", "display: none;");

    window.print();
  }




  </script>
  <style media="screen">
  body {
background: #fafafa url(https://jackrugile.com/images/misc/noise-diagonal.png);
color: #444;
font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
text-shadow: 0 1px 0 #fff;
}

strong {
font-weight: bold;
}

em {
font-style: italic;
}

table {
background: #f5f5f5;
border-collapse: separate;
box-shadow: inset 0 1px 0 #fff;
font-size: 12px;
line-height: 24px;
margin: 30px auto;
text-align: left;
width: 800px;
}

th {
background: url(https://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
border-left: 1px solid #555;
border-right: 1px solid #777;
border-top: 1px solid #555;
border-bottom: 1px solid #333;
box-shadow: inset 0 1px 0 #999;
color: #fff;
font-weight: bold;
padding: 10px 15px;
position: relative;
text-shadow: 0 1px 0 #000;
}

th:after {
background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
content: '';
display: block;
height: 25%;
left: 0;
margin: 1px 0 0 0;
position: absolute;
top: 25%;
width: 100%;
}

th:first-child {
border-left: 1px solid #777;
box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
box-shadow: inset -1px 1px 0 #999;
}

td {
border-right: 1px solid #fff;
border-left: 1px solid #e8e8e8;
border-top: 1px solid #fff;
border-bottom: 1px solid #e8e8e8;
padding: 10px 15px;
position: relative;
transition: all 300ms;
}

td:first-child {
box-shadow: inset 1px 0 0 #fff;
}

td:last-child {
border-right: 1px solid #e8e8e8;
box-shadow: inset -1px 0 0 #fff;
}

tr {
background: url(https://jackrugile.com/images/misc/noise-diagonal.png);
}

tr:nth-child(odd) td {
background: #f1f1f1 url(https://jackrugile.com/images/misc/noise-diagonal.png);
}

tr:last-of-type td {
box-shadow: inset 0 -1px 0 #fff;
}

tr:last-of-type td:first-child {
box-shadow: inset 1px -1px 0 #fff;
}

tr:last-of-type td:last-child {
box-shadow: inset -1px -1px 0 #fff;
}

tbody:hover td {
color: transparent;
text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
color: #444;
text-shadow: 0 1px 0 #fff;
}
  </style>
</head>
<body>
<div class="constrainer">
      <center>  <button class="btn btn-primary my-5 " id="bout" onclick="rrr()"><a
        class="text-light">imprimer  </a>

</button> </center>

  <!-- hedhy ta3 tableau -->
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id </th>
      <th scope="col">nom</th>
      <th scope="col">numcarte</th>
      <th scope="col">codecarte </th>
      <th scope="col">nbticketbus </th>
      <th scope="col">nbticketmetro </th>
      <th scope="col">nb tickets train </th>
      <th scope="col">prix total </th>


    </tr>
  </thead>
</body>


  <?php

  foreach($liste as $ad) {

?>
<tr>
  <td><strong><?php  echo $ad['id'];?></strong></td>
  <td><?php  echo $ad['nom'];?></td>
  <td><?php  echo $ad['numcarte'];?></td>
  <td><?php  echo $ad['codecarte'];?></td>
  <td><?php  echo $ad['nbticketbus'];?></td>
  <td><?php  echo $ad['nbticketmetro'];?></td>
  <td><?php  echo $ad['nbtickettrain'];?></td>
  <td><?php  echo $ad['prixtotal'];?></td>

      </tr>
<?php
  }
  ?>
  </table>
</body>
</html>
