<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice5</title>
  <h1>PHP - Partie 7 - Exercice 5</h1>
</head>
<body>
    <b style="font-size:15px">Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</b>
    <?php
$datetime1 = date_create('2016-05-16');
$datetime2 = date_create();
$interval = date_diff($datetime1, $datetime2);
echo $interval->format('%R%a days');
?>
  </body>
</html>
