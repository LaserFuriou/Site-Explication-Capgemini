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
      echo 'Votre adresse e-mail est ' . htmlentities($_POST['email']) . '.';
    ?>
    </p>
  </body>
</html>