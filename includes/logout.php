<?php
session_start();
session_destroy();
  header("location: ../forms/sign-in_form.php");
?>
