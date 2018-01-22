<!DOCTYPE html>
<html lang = "en-US">
 <head>
 <meta charset = "UTF-8">
 <title>Home Page</title>
<style>
<</style>
</head>
<body>
<form action="c.php" method="post">
  <fieldset>
    <legend>Student information:</legend>
    Name:<br>
    <input type="text" name="name" required="required" placeholder="maximum 20 characters" size="20" maxlength="20"><br>
    Batch:<br>
    <input type=number name="batch" required="required" min="1" max="22" /><br>
    CGPA:<br>
    <input type=number name="cgpa" step=0.01 required="required" min="1" max="4" /><br>
    UID:<br>
    <input type="text" name="uid" required="required" placeholder="example:131-35-500" size="14" maxlength="14"><br><br>
    <input type="submit" value="Submit" name="submit"/>
    <input type="reset" value="Reset"/>
  </fieldset>
</form>
</body>

</html>