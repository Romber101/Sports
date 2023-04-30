<?php
$set_username=$_POST["username"];
$set_user=$_POST["user"];
$set_passwd=$_POST["passwd"];
if(($set_username!="root")&&($set_user!="aa123456")&&($set_passwd!="a123456")){
    $servername = "localhost";
    $username = "root";
    $password = "az0902@";

    $conn = new PDO("mysql:host=$servername;dbname=login", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql_query="insert into data(name,username,password) values ('$set_username','$set_user','$set_passwd')";
    $conn->exec($sql_query);
    header("location:Login.php");
}
elseif(($set_username=="root")&&($set_user=="aa123456")&&($set_passwd=="a123456")){
    header("location:Sports.php");
}