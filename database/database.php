<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "camagru";


try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "CREATE DATABASE camagru";
// use exec() because no results are returned
$conn->exec($sql);
echo "Database created successfully<br>";
}
catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage(). "<br>";
    }



try {


    // sql to create table
    $sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    passwrd VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table users created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage() . "<br>";
    }

$conn = null;
?>
