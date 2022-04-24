<?php
  // require '../connexion.php';
  // $co = connexionBdd();

  function authentification() {
    global $co,$user,$password;

    $nickname = $_POST['user'];
    $password = $_POST['password'];

    // if (!empty($_POST['user']) && !empty($_POST['password'])) {
    var_dump($co);

    if (!empty($_POST['user'])) {
      echo 'test';
      $querie = "SELECT * FROM user where name_user = ? and password = ? limit 1";
      $statement = $co->prepare($querie);
      die(var_dump($statement));



      $statement->execute();

      
      $statement->setFetchMode(PDO::FETCH_ASSOC);
      $statement->execute(array($nickname,$password));

      var_dump($statement);

      $user = $statement->fetchAll();
      var_dump($user);


      if(count($user) == 0)
        echo 'Mauvais login ou mot de passe';
      else {
        // header('location: backoffice.php');
        echo 'dhdhd';
      }
    }
    
  }
?>