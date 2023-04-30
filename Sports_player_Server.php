<?php
@$setDate=$_POST["calendar"];
@$setBasketball=$_POST["basketball"];
@$setBasketball2=$_POST["basketball2"];
@$setPlayer=$_POST["player"];

$servername = "localhost";
$username = "root";
$password = "az0902@";

$conn = new PDO("mysql:host=$servername;dbname=login", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$Basketball=$setBasketball.'vs'.$setBasketball2;

$sql_query="insert into information(calendar,basketball,player) values ('$setDate','$Basketball','$setPlayer')";
$conn->exec($sql_query);
header("location:Sports_player.php?name=root");