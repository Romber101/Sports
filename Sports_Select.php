<html>
<head>
    <meta charset="UTF-8">
    <title>查詢系統</title>
</head>
<style>
    input, div {
        font-size: 20pt;
        text-align: center;
    }

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
<h1 style="text-align: center">查詢系統</h1>
<?php
$set_name = $_GET["name"];
echo "<h1 style='text-align: right'>" . $set_name . "<a href='Login.php'>登出</a></h1><br>";
?>
<center>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Sports_Pre</th>
            <th>Sports_number</th>
            <th>Calandar</th>
            <th>歸還</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "az1054182019@";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=login", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if ($set_name == "root") {
                $sql = "select * from sends";
                $set = $conn->query($sql);
                $result = $set->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $start) {
                    echo "<tr>";
                    echo "<td>" . $start["id"] . "</td>";
                    echo "<td>" . $start["name"] . "</td>";
                    echo "<td>" . $start["ball"] . "</td>";
                    echo "<td>" . $start["numbers"] . "</td>";
                    echo "<td>" . $start["calandar"] . "</td>";
                    echo "<td><a href='Sports_Delete.php?id=$start[id]&&name=$set_name'><b>歸還</b></a></td>";
                    echo "</tr>";
                }
            } else if ($set_name != "root") {
                $sql = "select * from sends where name='$set_name'";
                $set = $conn->query($sql);
                $result = $set->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $start) {
                    echo "<tr>";
                    echo "<td>" . $start["id"] . "</td>";
                    echo "<td>" . $start["name"] . "</td>";
                    echo "<td>" . $start["ball"] . "</td>";
                    echo "<td>" . $start["numbers"] . "</td>";
                    echo "<td>" . $start["calandar"] . "</td>";
                    echo "<td><a href='Sports_Delete.php?id=$start[id]&&name=$start[name]'><b>歸還</b></a></td>";
                    echo "</tr>";
                }
            }

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        ?>
    </table>
    <?php
    if ($set_name == "root")
        echo "<a href='Project.php?name=root'><h1>返回</h1></a>";
    elseif ($set_name != "root")
        echo "<a href='wellcome.php?name=$set_name'><h1>返回</h1></a>";
    ?>
</center>
</body>
</html>