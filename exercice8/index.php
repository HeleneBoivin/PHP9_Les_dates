<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice8</title>
  <h1>PHP - Partie 7 - Exercice 8</h1>
</head>
<body>
    <b style="font-size:15px">Afficher la date du jour - 22 jours</b>
    <?php
    $date = date('d-m-Y', strtotime('-22 day'));
    echo $date;
?>
  </body>
</html>
