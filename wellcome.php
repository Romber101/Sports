<?php
@$set_name=$_GET["name"];
?>

<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $set_name."管理員"; ?></title>
</head>
<style>
    div{
        font-size: 20pt;
        position: absolute;
        top:300px;
        left: 1200px;
    }

    nav{
        position: absolute;
        left: 150px;
    }
</style>
<body background="藍色.jpg">
<h1 style="color: blue"><marquee direction="up">運動中心系統</marquee></h1>
<h1 style="text-align: right"><?php echo $set_name."<a href='Login.php'>登出</a>";?></h1><br>
<nav>
    <br>
    <img src="運動中心素材.png">
</nav>
<div>
    <br>
    <?php
    echo "<a href='Admin.php?name=$set_name'><b>帳號管理</b></a><br><br>";
    echo "<a href='Sports_page.php?name=$set_name'><b>運動簡介</b></a><br><br>";
    echo "<a href='Sends.php?name=$set_name'><b>租借系統</b></a><br><br>";
    echo "<a href='Sports_Form.php?name=$set_name'><b>常見問題</b></a>";
    ?>
</div>
</body>
</html>