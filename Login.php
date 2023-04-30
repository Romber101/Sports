<html>
<head>
    <meta charset="UTF-8">
    <title>Sports_Login</title>
</head>
<style>
    input,div{
        font-size: 20pt;
    }
    img{
        position: absolute;
        left: 400px;
    }
    form{
        position: absolute;
        left: 950px;
        bottom: 450px;
    }
    a{
        position: absolute;
        left: 300px;
    }
    button{
        position: absolute;
    }
</style>
<body background="藍色.jpg">
<h1 style="text-align: center">登入系統</h1>
<br><br>
<img src="鄭博仁.jpg">
<form action="Login_Server.php" method="post">
    <h1>帳號：<input type="text" name="set_user"  required></h1>
    <h1>密碼：<input type="password" name="set_passwd" required></h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit"><div><b>登入</b></div></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="Sports.php"><div><b>註冊</b></div></a>
</form>
</body>
</html>