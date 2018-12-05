<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 6</title>
  </head>
  <body>
    <?php
    $date = new DateTime('1-02-2016');
    echo 'Il y a '. $date->format('t'). ' jours durant le mois de février 2016';
    ?>
  </body>
</html>
