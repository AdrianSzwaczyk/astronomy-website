<?php

$client = new MongoDB\Client("mongodb://localhost:27017");
$db = $client->users;
$collection = $db->users;

if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Jeœli formularz jest formularzem rejestracji, sprawdŸ, czy has³a s¹ takie same
  if ($_POST['form'] == 'register') {
    if ($password != $confirm_password) {
      $error_message = "Has³a nie s¹ takie same";
    } else {
      // Jeœli has³a s¹ takie same, zarejestruj u¿ytkownika
      $user = [
        'username' => $username,
        'password' => password_hash($password, PASSWORD_DEFAULT)
      ];
      $collection->insertOne($user);
      $success_message = "Rejestracja przebieg³a pomyœlnie, mo¿esz siê teraz zalogowaæ";
    }
  } else {
    // Jeœli formularz jest formularzem logowania, sprawdŸ, czy podane dane s¹ prawid³owe
    $user = $collection->findOne(['username' => $username]);
    if ($user && password_verify($password, $user['password'])) {
      session_start();
      $_SESSION['logged_in'] = true;
      header('Location: home.php');
      exit;
    } else {
      // Jeœli dane logowania s¹ nieprawid³owe, wyœwietl komunikat o b³êdzie
      $error_message = "Nieprawid³owa nazwa u¿ytkownika lub has³o";
    }
  }
}

?>