<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exercice 3</title>
  </head>
  <body>
      <p>
      <?php
      //grâce a la condition et a isset on va pouvoir recuperer le startDate et le endDate pour l'afficher
        if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
        echo $_GET['startDate'] . ' ' . $_GET['endDate'];
      }
      ?>
      </p>
  </body
</html>