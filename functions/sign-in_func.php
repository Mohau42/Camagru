<?php
session_start();

try {
    require_once('../database/connect.php');
  if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['passwrd'];
    if(!empty($username) || !empty($password)){
      $query = "SELECT username, passwrd FROM users";
      $statement = $conn->prepare($query);
      $statement->execute( array('username' =>  $_POST['username'], 'password' => $_POST['passwrd']));
      $count = $statement->rowCount();
      if($count > 0){
        $_SESSION['username'] = $_POST['username'];
        header('location: ../profile.php');
      } else {
        echo "login failed";
      }
    } else {
      echo "All fields are required";
    }
   }
} catch (PDOException $e) {
  echo $query . "<br>" . $e->getMessage() . "<br>";
}

?>
