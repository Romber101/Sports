<?php
@$set_name = $_GET["name"];
?>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo $set_name; ?></title>
</head>
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    li {
        display: inline;
    }

    img {
        width: 20px;
        height: 20px;
    }

    div{
        font-size: 20pt;
    }

    b{
        font-size: 20pt;
        text-align: center;
    }
</style>

<body background="藍色.jpg">
    <h1 style="text-align: center">系統管理員</h1>
    <h1 style="text-align: right"><?php echo $set_name . "<a href='Drop_Sports.php'>登出</a>"; ?></h1><br>
    <center>
    <ul>
        <?php
        echo "<li><a href='Sports_page.php?name=$set_name'><b><img src='LeBron素材.jpg'>運動簡介</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<li><a href='Sports_Select.php?name=$set_name'><b><img src='anthony_davis.png'>查詢系統</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<li><a href='Sports_Form_Admin.php?name=$set_name'><b><img src='program素材.jpg'>問題收集</b></a></li>";
        ?>
    </ul>
        <video controls width="900px" height="750px">
            <source src="guest系統.webm">
        </video>
        <a href="Drop_Sports.php"><div>返回</div></a>
    </center>
</body>
</html>