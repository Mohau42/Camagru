<?php
  require('../functions/register_func.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
      <h1>Register</h1><br><br>
    <form class="form-inline" action="registration_form.php" method="post">
      <label for="firstname">First Name: </label><br/>
      <input type="text" name="firstname" value=""><br/><br/>
      <label for="lastname">Last Name: </label><br/>
      <input type="text" name="lastname" value=""><br/><br/>
      <label for="username">Username: </label><br/>
      <input type="text" name="username" value=""><br/><br/>
      <label for="email">E-mail: </label><br/>
      <input type="text" name="email" value=""><br/><br/>
      <label for="passwrd">Password: </label><br/>
      <input type="password" name="passwrd" value=""><br/><br/>
      <label for="Confirm Password">Confirm Password</label><br/>
      <input type="password" name="confirmPassword" value=""><br/><br/>
      <input type="submit" name="submit" value="sign-up">
      
    </form>
  
  </body>
</html>
