<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice4</title>
  <h1>PHP - Partie 7 - Exercice 4</h1>
</head>
<body>
  <b style="font-size:15px">Afficher le timestamp du jour.</b></br>
  <?php
  $date = date_create();
  ?>
  <p><?php echo date_timestamp_get($date);?></p>
  <b style="font-size:15px">Afficher le timestamp du mardi 2 août 2016 à 15h00.</b></br>
  <?php
  $date = date_create('2016-08-02 15:00:00');
  ?>
  <p><?php echo date_timestamp_get($date);?></p>
  <b style="font-size:15px">Autre méthode pour le timestamp du mardi 2 août 2016 à 15h00.</b></br>
  <p><?php echo strtotime("2 August 2016 15:00");?></p>

</body>
</html>
