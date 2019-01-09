<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>TP Calendrier</title>
  <h1>PHP - Partie 9 - TP Calendrier</h1>
</head>
<body>
  <b style="font-size:15px">Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
    En fonction des choix, afficher un calendrier</b>
    <div>
      <form action="index.php" method="GET">
        <select name="choix" class="year">
          <option value="">Janvier</option>
          <option value="">Février</option>
          <option value="">Mars</option>
          <option value="">Avril</option>
          <option value="">mai</option>
          <option value="">Juin</option>
          <option value="">Juillet</option>
          <option value="">Aout</option>
          <option value="">Septembre</option>
          <option value="">octobre</option>
          <option value="">Novembre</option>
          <option value="">Décembre</option>
        </select>
        <?php
        // Variable qui ajoutera l'attribut selected de la liste déroulante
        $selected = '';

        // Parcours du tableau
        echo '<select name="annees">',"\n";
        for($i=1950; $i<=2030; $i++)
        {
          // L'année est-elle l'année courante ?
          if($i == date('Y'))
          {
            $selected = ' selected="selected"';
          }
          // Affichage de la ligne
          echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
          // Remise à zéro de $selected
          $selected='';
        }
        echo '</select>',"\n";
        ?>
        <?php $month=new_month(1, 2018); ?>
        <?php $month->getWeeks(); ?>
        <table class = "table">
          <tr>
            <th>Lundi</th>
            <th>Mardi</th>
            <th>Mercredi</th>
            <th>Jeudi</th>
            <th>Vendredi</th>
            <th>Samedi</th>
            <th>Dimanche</th>
          </tr>
          <tr>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
          </tr>
          <tr>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
          </tr>
          <tr>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
          </tr>
          <tr>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
          </tr>
          <tr>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
          </tr>
          <tr>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
            <td>""</td>
          </tr>

        </table>
      </div>
    </body>
    </html>
