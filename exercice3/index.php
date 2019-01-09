<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice3</title>
  <h1>PHP - Partie 9 - Exercice 3</h1>
</head>
<body>
  <b style="font-size:15px">Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
    Bonus : Le faire en français.</b>
    <p><?php echo date('l j F Y');?></p>
    <?php
    setlocale(LC_TIME, 'fr_FR.UTF8');
    echo strftime('%A %d %B %Y');
    ?>
  </body>
  </html>
