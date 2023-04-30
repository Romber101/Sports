<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Sports_page</title>
</head>
<style>
    h1 {
        text-align: right;
    }

    div {
        font-size: 20pt;
    }
</style>
<body background="藍色.jpg">
<h1 style="text-align: center">運動簡介</h1>
<?php
$set_name = $_GET["name"];
?>
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
<div>
    <ul>
        <li style="position: absolute; right: 190pt;">
            運動定義：具有計畫性、組織性和重複性，以用於改善或維持一項或多項身體適能，進而達到健康促進的目的。
        </li>
        <br><br>
        <li style="position: absolute; right: 700pt; left: 270pt">運動的強度：<br></li>
    </ul>
    <center>
        <img src="運動.png">
    </center>
</div>
</body>
</html>
