<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice6</title>
  <h1>PHP - Partie 7 - Exercice 6</h1>
</head>
<body>
  <b style="font-size:15px">Afficher le nombre de jour dans le mois de février de l'année 2016.</b>
  <?php
            $february = new DateTime('2016-02-01');  // le mot new instensie la classe DateTime et $february devient un objet
            $march = new DateTime('2016-03-01');
            $interval = $march->diff($february);
        ?>
        <p>Il y a eu <?= $interval->format('%a') ?> jours en Février 2016</p>
        <!-- %a affichera le nombre total de jours... -->
        <p>Méthode 2</p>
        <p><?php echo cal_days_in_month(CAL_GREGORIAN,2,2016) ?></p>
        <p>Méthode 3</p>
        <?php
          $numberOfDays = date('t', mktime(0, 0, 0, 2, 1, 2016));
          echo $numberOfDays;
        ?>
</body>
</html>
