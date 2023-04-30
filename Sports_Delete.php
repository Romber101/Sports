<?php
$id=$_GET["id"];
$set_name=$_GET["name"];

$servername = "localhost";
$username = "root";
$password = "az0902@";

try {
    $conn = new PDO("mysql:host=$servername;dbname=login", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="delete from sends where id=$id";
    $conn->exec($sql);
    header("location:Sports_Select.php?id=$id&&name=$set_name");
} catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}