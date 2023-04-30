<html>
<head>
    <meta charset="UTF-8">
    <title>Wellcome</title>
</head>
<script>
    function Data(){
        alert("目前沒有資料")
    }
</script>
<body background="藍色.jpg">
<h1 style="text-align: center"><b>歡迎光臨</b></h1><br>
<center>
    <img src="運動中心素材2.jpg"><br><br>
    <form method="get">
        <button name="sys_button" onclick="Data()"><h1>歡迎進入系統</h1></button>
        <a href="Project.php?name=root"><h1>root系統畫面</h1></a>
    </form>
</center>
<?php
if(isset($_GET["sys_button"])){
    $servername = "localhost";
    $username = "root";
    $password = "az0902@";

    $conn = new PDO("mysql:host=$servername;dbname=login", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="truncate table data";
    $conn->exec($sql);
    header("location:Login.php");
}
?>
</body>
</html>

