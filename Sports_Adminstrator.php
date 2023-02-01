<?php
@$set_name=$_GET["name"];
?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $set_name;?></title>
</head>
<style>
    div{
        font-size: 20pt;
        text-align:center;
    }
</style>
<body background="藍色.jpg">
<h1 style="text-align: center">系統管理員</h1>
<h1 style="text-align: right"><?php echo $set_name."<a href='Drop_Sports.php'>登出</a>";?></h1><br>
<div>
    <?php
    echo "<a href='Admin.php?name=$set_name'><b>帳號管理</b></a><br><br>";
    echo "<a href='Sports_Select.php?name=$set_name'><b>查詢系統</b></a><br><br>";
    echo "<a href='Sports_Form_Admin.php?name=$set_name'><b>問題收集</b></a>";
    ?>
</div>
</body>
</html>