<?php
@$set_name=$_GET["name"];
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title><?php echo $set_name;?></title>
</head>
<style>
    .Proccess{
        font-size: 20pt;
        text-align:center;
        position: absolute;
        left:1200px;
        top: 350px;
    }

    nav{
        position: absolute;
        left: 200px;
    }
</style>
<body background="藍色.jpg">
<h1 style="color: blue"><marquee direction="up"><a href="Drop_Sports.php">系統管理員</a></marquee></h1>
<h1 style="position:absolute; left:85%;">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $set_name;?>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Drop_Sports.php">登出</a></li>
            </ul>
        </li>
    </ul>
</h1><br><br><br><br>
<nav>
    <br><br><br><br><br><br><br>
    <img src="Run.jpg">
</nav>
<div class="Proccess">
    <?php
    echo "<a href='Admin.php?name=$set_name'><b>帳號管理</b></a><br><br>";
    echo "<a href='Sports_Select.php?name=$set_name'><b>查詢系統</b></a><br><br>";
    echo "<a href='Sports_player.php?name=$set_name'><b>比賽查詢系統</b></a><br><br>";
    echo "<a href='Sports_Form_Admin.php?name=$set_name'><b>問題收集</b></a>";
    ?>
</div>
</body>
</html>