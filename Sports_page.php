<html>
<head>
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
echo "<h1>" . $set_name . "<a href='Login.php'>登出</a></h1><br>";
?>
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
<?php
if ($set_name == "root")
    echo "<a href='Project.php?name=root'><div style='text-align: center'>返回</div></a>";
elseif ($set_name != "root")
    echo "<a href='wellcome.php?name=$set_name'><div style='text-align: center'>返回</div></a>";
?>
</body>
</html>
