<?php
  require_once('../database/connect.php');

  if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['passwrd']) && isset($_POST['confirmPassword'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['passwrd'];
    $hashPass = md5($password);
    $confirmPassword = $_POST['confirmPassword'];
    if (!empty($firstname) && !empty($lastname) && !empty($username) && !empty($email) && !empty($password) && !empty($confirmPassword)){
      if (strlen($password) < 6) {
        echo "Password too short";
      } else {
        if ($password != $confirmPassword) {
          echo "no match";
        } else {
          try {
            $sql = "INSERT INTO users(firstname, lastname, username, email, passwrd)
            VALUES ('$firstname', '$lastname', '$username', '$email', '$hashPass')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "New record created successfully<br>";
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage() . "<br>";
            }
        }
      }
    } else {
      echo "empty";
    }
  }


$conn = null;
?>
