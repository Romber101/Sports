<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>常見問題</title>
</head>

<style>
    div,input{
        font-size: 20pt;
        text-align: center;
    }
    textarea{
        font-size: 20pt;
        resize: none;
    }
</style>

<body background="藍色.jpg">
<?php
@$set_name=$_GET["name"];
?>
<h1 style="text-align: center">常見問題</h1>
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
    <form action="Sports_Form_Server.php" method="post">
        請輸入名字：<input type="text" name="set_name" value="<?php echo $set_name; ?>" required><br><br>
        請輸入問題：<textarea name="program" placeholder="請輸入問題" rows="5" cols="20"></textarea><br><br>
        <button type="submit"><div>mession</div></button><br><br>
    </form>
</div>
</body>
</html>