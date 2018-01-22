<?php
$servername = "localhost";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS mine";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
     $sql = "use mine";
     $conn->exec($sql);
     // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS lict (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(30) NOT NULL,
    mail VARCHAR(30) NOT NULL,
    pass VARCHAR(50)
    )";
    $conn->exec($sql);
    echo "Table created successfully<br>";
    $sql = "INSERT INTO lict (name, mail, pass)
    VALUES ('".$_POST["name"]."','".$_POST["mail"]."','".$_POST["pass"]."')";
    if ($conn->query($sql))
        echo "New record created successfully";
    else
        echo "New record created successfully";
    // use exec() because no results are returned
    $conn->exec($sql);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>