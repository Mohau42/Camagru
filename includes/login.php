<?php
session_start();
if(isset($_SESSION['username']))
{
  echo "<h2>Login Success, Welcome - " .$_SESSION['username'] . "</h2>";
  echo '<br/><br/><a href="includes/logout.php">log out</a>';
} else {
  header("location: ../forms/sign-in_form.php");
}
?>
