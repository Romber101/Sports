<?php

@$set_username = $_POST["set_user"];
@$set_password = $_POST["set_passwd"];

$match="/[a-zA-Z]/";

$servername = "127.0.0.1";
$username = "root";
$password = "az0902@";

try {
    if(($set_username=="aa123456")&&($set_password=="a123456")){
        header("location:adminstrator.php?name=root");
    }
    elseif(($set_username!="aa123456")&&($set_password!="aa123456")){
        $conn = new PDO("mysql:host=$servername;dbname=login", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="select * from data where username='$set_username' and password='$set_password'";
        $start=$conn->query("set names utf8");
        $sth=$conn->prepare($sql);
        $sth->execute();
        $result=$sth->fetch(PDO::FETCH_ASSOC);
        if($result["username"]==$set_username && $result["password"]==$set_password){
            header("location:adminstrator.php?name=$result[name]");
        }
        elseif($result["username"]!=$set_username && $result["password"] != $set_password){
            header("location:Login.php");
        }
    }
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>