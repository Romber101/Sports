<html>
<head>
    <meta charset="UTF-8">
    <title>Program</title>
</head>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 50%;
    }

    td, th {
        border: 1px solid black;
        text-align: center;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<body background="藍色.jpg">
<?php
@$set_admin=$_GET["name"];
?>
<h1 style="text-align: center">Program</h1>
<h1 style="text-align: right"><?php echo $set_admin."<a href='Login.php'>登出</a>";?></h1>
<center>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>program</th>
            <th>刪除</th>
        </tr>
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "az1054182019@";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=login", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if($set_admin=="root"){
                $sql="select * from common";
                $set=$conn->query($sql);
                $result=$set->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $start){
                    echo "<tr>";
                    echo "<td>".$start["id"]."</td>";
                    echo "<td>".$start["name"]."</td>";
                    echo "<td>".$start["program"]."</td>";
                    echo "<td><a href='Sport_Form_Delete.php?id=$start[id]&&name=$set_admin'>刪除</a></td>";
                    echo "</tr>";
                }
            }
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
        ?>
    </table>
    <?php
    if($set_admin=="root"){
        echo "<a href='Project.php?name=root'><h1>返回</h1></a>";
    }
    elseif($set_admin!="root"){
        echo "<a href='Sports_Adminstrator.php?name=$set_admin'><h1>返回</h1></a>";
    }
    ?>
</center>
</body>
</html>