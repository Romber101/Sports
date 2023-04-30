<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
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
?>
<h1 style="position:absolute; left:85%;">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $set_name;?>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Login.php">登出</a></li>
            </ul>
        </li>
    </ul>
</h1><br><br><br><br>
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
        $password = "az0902@";

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
        echo "<a href='Sports_Adminstrator.php?name=root'><h1>返回</h1></a>";
    elseif ($set_name != "root")
        echo "<a href='wellcome.php?name=$set_name'><h1>返回</h1></a>";
    ?>
</center>
</body>
</html>