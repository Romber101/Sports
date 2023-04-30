<?php
$set_name=$_POST["set_name"];
$set_program=$_POST["program"];

$servername = "localhost";
$username = "root";
$password = "az0902@";

$conn = new PDO("mysql:host=$servername;dbname=login", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql_query="insert into common(name,program) values ('$set_name','$set_program')";
$conn->exec($sql_query);
header("location:wellcome.php?name=$set_name");