<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice7</title>
  <h1>PHP - Partie 7 - Exercice 7</h1>
</head>
<body>
    <b style="font-size:15px">Afficher la date du jour + 20 jours.</b>
    <?php
    $date = date('d-m-Y', strtotime('+20 day'));
    echo $date;
?>
  </body>
</html>
