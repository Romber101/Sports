<?php
$id=$_GET["id"];
$set_name=$_GET["name"];

$servername = "localhost";
$username = "root";
$password = "az0902@";

try {
    $conn = new PDO("mysql:host=$servername;dbname=login", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="delete from data where id=$id";
    $conn->exec($sql);
    header("location:Admin_Delete.php?name=$set_name");
} catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}