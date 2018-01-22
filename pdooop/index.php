<!DOCTYPE html>
<html lang = "en-US">
 <head>
 <meta charset = "UTF-8">
 <title>Home Page</title>
<style>
<</style>
</head>
<body>
<form action="#" method="post">
  <fieldset>
    <legend>Personal information:</legend>
    User-name:<br>
    <input type="text" name="name" placeholder="maximum 22 character allowed" size="25" maxlength="20"><br>
    E-mail:<br>
    <input type="email" name="mail" required="required" placeholder="john123@gmail.com"/><br>
    Password:<br>
    <input type="password" name="pass"><br>
    <input type="submit" value="Submit" name="submit"/>
    <input type="reset" value="Reset"/>
  </fieldset>
</form>
<?php
require 'n.php';
?> 
</body>

</html>