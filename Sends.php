<html>
<head>
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
echo "<h1 style='text-align: right'>".$set_name."<a href='Login.php'>登出</a></h1><br>";
?>
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
        <button type="submit">借球</button>
        <?php
        echo "<a href='wellcome.php?name=$set_name'><h3>返回</h3></a>";
        ?>
    </form>
</div>

</body>
</html>