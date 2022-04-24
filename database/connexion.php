<?php

function connexionBdd(){
  require 'database/config.php';

  try {
    global $co;
    $co = new PDO("mysql:host=". $server .";dbname=" . $dbName,$user,$pass);

    $co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $co->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    
  } catch (PDOException $exception) {
    echo "DB fail exception :" .$exception->getMessage(); 
  }
  return $co;
}
// $co = connexionBdd();