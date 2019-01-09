<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/calendar.css">
  <title></title>
</head>
<body>
  <nav class="navbar navbar-dark bg-primary mb-3">
    <a href="/index.php" class="navbar-brand">Mon calendrier</a>
  </nav>
  <form action="index.php" method="get">
    <select name="month">
      <option value="1">Janvier</option>
      <option value="2">Février</option>
      <option value="3">Mars</option>
      <option value="4">Avril</option>
      <option value="5">Mai</option>
      <option value="6">Juin</option>
      <option value="7">Juillet</option>
      <option value="8">Août</option>
      <option value="9">Septembre</option>
      <option value="10">Octobre</option>
      <option value="11">Novembre</option>
      <option value="12">Décembre</option>
    </select>

    <select name="year">
          <option value="">Année</option>
          <?php
          for ($year = 1970, $value = 1970; $year <= 2032, $value <= 2032 ; $year ++ , $value ++) {
            ?>
            <option value="<?= $value?>"><?= $year;?></option>
            <?php
          }
           ?>
        </select>
    <button type="submit" name="button">Valider</button>
  </form>
  <?php
  require '../src date/month.php';
    $month = new App\Date\Month($_GET['month'] ?? null , $_GET['year'] ?? null);
$start = $month->getStartingDay()->modify('last monday');
  ?>
  <div class="d-flex flex-row align-items-center justify-content-between mx-1">
    <a href="index.php?month=<?= $month->previousMonth()->month; ?>&year=<?= $month->previousMonth()->year; ?>" class="btn btn-primary">&lt;</a>
      <h1> <?php echo $month->toString(); ?></h1>
      <a href="index.php?month=<?= $month->nextMonth()->month; ?>&year=<?= $month->nextMonth()->year; ?>" class="btn btn-primary">&gt;</a>
  </div>

  <table class="calendar-tab calendar-<?php echo $month->getWeeks();?>weeks">
    <?php for ($i=0; $i < $month->getWeeks(); $i++): ?>
      <tr>
        <?php foreach($month->days as $k => $day):
          $date = (clone $start)->modify("+" . ($k + $i * 7) . " days")
          ?>
        <td class="<?= $month->withinMonth($date) ? '' :  'calendar-othermonth'; ?>">
        <?php if ($i === 0):?>
          <div class="calendar-weekday"><?php echo $day; ?></div>
        <?php endif; ?>
        <div class="calendar-day"><?php echo $date->format('d'); ?></div>
        </td>
      <?php endforeach; ?>
      </tr>
    <?php endfor; ?>

  </table>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
