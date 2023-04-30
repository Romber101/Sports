<html>
<head>
    <meta charset="UTF-8">
    <title>Sports_Register</title>
</head>
<style>
    input,div{
        font-size: 20pt;
    }
    button{
        position: absolute;
        right: 150px;
    }
    img{
        position: absolute;
        left: 400px;
    }
    form{
        position: absolute;
        bottom: 400px;
        left: 1000px;
    }
</style>
<body background="藍色.jpg">
<h1 style="text-align: center">註冊系統</h1><br>
<img src="運動中心素材3.jpg">
<center>
    <br><br>
    <form action="Sports_Server.php" method="post">
        <h1>名字：<input type="text" name="username" required></h1>
        <h1>帳號：<input type="text" name="user" required></h1>
        <h1>密碼：<input type="password" name="passwd" required></h1>
        <button type="submit"><div><b>註冊</b></div></button>
    </form>
</center>
</body>
</html>