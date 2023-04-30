<?php
@$set_name=$_GET["name"];
?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
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
<h1 style="color: blue"><marquee direction="up"><a href="Drop_Sports.php">運動中心系統</a></marquee></h1>
<h1 style="position:absolute; left:85%;">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $set_name;?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Login.php">登出</a></li>
          </ul>
        </li>    
    </ul>  
</h1><br><br><br><br>
<nav>
    <br><br><br>
    <img src="運動中心素材.png">
</nav>
<div>
    <br>
    <?php
    echo "<a href='Admin.php?name=$set_name'><b>帳號管理</b></a><br><br>";
    echo "<a href='Sports_page.php?name=$set_name'><b>運動簡介</b></a><br><br>";
    echo "<a href='Sends.php?name=$set_name'><b>租借系統</b></a><br><br>";
    echo "<a href='Sports_Form.php?name=$set_name'><b>常見問題</b></a><br><br>";
    ?>
</div>
</body>
</html>