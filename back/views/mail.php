<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mail</title>
</head>
<body>
    <?php
    $destinataire="manouch2001.ra@gmail.com";
    $sujet="test de mail"; 
    $message="there is a new update in your rservation  ";
    $headers=" from :aymen.rahali@esprit.tn";
    mail($destinataire,$sujet,$message);
    ?>
</body>
</html>