<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Réponse</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Réponse</h1>
    <p>
    <?php
      echo 'Votre fichier est ' . htmlentities($_POST['file']);
    ?>
    </p>
  </body>
</html>