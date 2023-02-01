<html>
<head>
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
<h1 style="text-align: right"><?php echo $set_name."<a href='Login.php'>登出</a>";?></h1><br>
<div>
    <form action="Sports_Form_Server.php" method="post">
        請輸入名字：<input type="text" name="set_name" value="<?php echo $set_name; ?>" required><br><br>
        請輸入問題：<textarea name="program" placeholder="請輸入問題" rows="5" cols="20"></textarea><br><br>
        <button type="submit"><div>mession</div></button><br><br>
        <?php
        if($set_name=="root"){
            echo "<a href='Project.php?name=root'>返回</a>";
        }
        elseif($set_name!="root"){
            echo "<a href='wellcome.php?name=$set_name'>返回</a>";
        }
        ?>
    </form>
</div>
</body>
</html>