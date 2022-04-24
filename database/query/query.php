<?php

// $co = connexionBdd();
$status = "";


function sendMessage() {
  global $co;
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];



  global $status;

  if (empty($name) || empty($email) || empty($message) ){
    $status = "All fields are compulsory";
  } else {
    if (strlen($name) >= 255) {
      $status = "Please enter a valid name";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $status = "Please enter a valid email";
    } else {
      $querie = "INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)";

      $statement = $co->prepare($querie);

      $statement->execute(['name' => $name, 'email' => $email, 'message' => $message]);

      $message = "";
      $name = "";
      $email = "";
      $status = "Your message was sent";
    }
  }
}








