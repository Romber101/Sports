<?php
$set_name=$_POST["Sports_name"];
$prepare=$_POST["Sports_pre"];
$set_number=$_POST["Sports_number"];
$set_calandar=$_POST["Calandar"];

$servername = "localhost";
$username = "root";
$password = "az0902@";

$conn = new PDO("mysql:host=$servername;dbname=login", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql_query="insert into sends(name,ball,numbers,calandar) values ('$set_name','$prepare','$set_number','$set_calandar')";
$conn->exec($sql_query);
header("location:Sports_Select.php?name=$set_name");