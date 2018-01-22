<?php
include 'dbconnect.php';
if(isset($_POST['edited_submit'])){
	$id=$_POST['txt_id'];
	$name=$_POST['edited_name'];
	$mail=$_POST['edited_mail'];
	$pass=$_POST['edited_pass'];
	try {
		  $stmt=$conn->prepare ("UPDATE lict SET name=:name, mail=:mail, pass=:pass
		   WHERE id=:id");
		  $stmt->execute(array(':name'=>$name,':mail'=>$mail,':pass'=>$pass,':id'=>$id));

    // Prepare statement
    //$stmt = $conn->prepare($sql);
		  if($stmt)
    // execute the query
    //$stmt->execute();

    // echo a message to say the UPDATE succeeded
    //echo $stmt->rowCount() . " records UPDATED successfully";
    header('Location:update.php');
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

}
$id=0;
$name = '';
$mail = '';
$pass = '';
if(isset($_GET['id'])){
$id=$_GET['id'];

	$stmt = $conn->prepare('SELECT * FROM lict WHERE id=:id'); 
	$stmt->execute(array(':id'=>$id));
	$row=$stmt->fetch();
	$id=$row['id'];
	$name=$row['name'];
	$mail=$row['mail'];
	$pass=$row['pass'];
	}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>View Page</title>
</head>
<body>
<h2>Edit</h2>
<form action="#" method="post">
  <fieldset>
    <legend>Personal information:</legend>
    User-name:<br>
    <input type="text" name="edited_name" placeholder="maximum 22 character allowed" size="25" maxlength="20" value="<?=$name;?>"><br>
    E-mail:<br>
    <input type="email" name="edited_mail" required="required" placeholder="john123@gmail.com" value="<?=$mail;?>"/><br>
    Password:<br>
    <input type="password" name="edited_pass" value="<?=$pass;?>"><br>
    <input type="hidden" name="txt_id" value="<?=$id;?>">
    <input type="submit" value="Submit" name="edited_submit"/>
    <input type="reset" value="Reset"/>
  </fieldset>
</form>
</body>
</html>