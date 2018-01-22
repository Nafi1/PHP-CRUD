<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$dbname = "mydb";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO lict (name, mail, pass)
    VALUES ('".$_POST["name"]."','".$_POST["mail"]."','".$_POST["pass"]."')";
    if ($conn->query($sql))
        echo "New record created successfully";
    else
        echo "Data not successfully Inserted.";
    // use exec() because no results are returned
    //$conn->exec($sql);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
}
?>