<?php

require_once '../database/connexion.php';
connexionBdd();
require_once '../database/query/authentfication.php';

authentification();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?= include 'component/header.php' ?>

<form method="POST" >

  <input type="text" name="user" id="user" placeholder="Votre identitifiant">
  
  <input type="password" name="password" id="password" placeholder="Votre mot de passe">

  <input type="submit" value="se connecter">

</form>
<?= include 'component/footer.php' ?>
  
</body>
</html>