<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>租借系統</title>
</head>
<style>
    input,div,select,button{
        font-size: 20pt;
        text-align: center;
    }
</style>
<body background="藍色.jpg">
<h1 style="text-align: center">租借系統</h1>
<?php
$set_name=$_GET["name"];
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
    <form action="Sends_Server.php" method="post">
        姓名：<input type="text" name="Sports_name" value="<?php echo $set_name;?>" readonly><br><br>
        請選擇球類：<select name="Sports_pre">
            <option value="basketball">籃球</option>
            <option value="baseball">棒球</option>
            <option value="football">網球</option>
        </select><br><br>
        顆數：<input type="text" name="Sports_number" required><br><br>
        日期：<input type="date" name="Calandar"><br><br>
        <button type="submit">借球</button><br><br>
    </form>
</div>

</body>
</html>