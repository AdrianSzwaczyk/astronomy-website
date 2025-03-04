<?php

$client = new MongoDB\Client("mongodb://localhost:27017");
$db = $client->users;
$collection = $db->users;

if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Je�li formularz jest formularzem rejestracji, sprawd�, czy has�a s� takie same
  if ($_POST['form'] == 'register') {
    if ($password != $confirm_password) {
      $error_message = "Has�a nie s� takie same";
    } else {
      // Je�li has�a s� takie same, zarejestruj u�ytkownika
      $user = [
        'username' => $username,
        'password' => password_hash($password, PASSWORD_DEFAULT)
      ];
      $collection->insertOne($user);
      $success_message = "Rejestracja przebieg�a pomy�lnie, mo�esz si� teraz zalogowa�";
    }
  } else {
    // Je�li formularz jest formularzem logowania, sprawd�, czy podane dane s� prawid�owe
    $user = $collection->findOne(['username' => $username]);
    if ($user && password_verify($password, $user['password'])) {
      session_start();
      $_SESSION['logged_in'] = true;
      header('Location: home.php');
      exit;
    } else {
      // Je�li dane logowania s� nieprawid�owe, wy�wietl komunikat o b��dzie
      $error_message = "Nieprawid�owa nazwa u�ytkownika lub has�o";
    }
  }
}

?>