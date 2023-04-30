<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>帳號管理</title>
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
@$set_admin = $_GET["name"];
?>
<h1 style="text-align: center">帳號管理</h1>
<h1 style="position:absolute; left:85%;">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $set_admin;?>
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
            <th>username</th>
            <th>password</th>
            <th>刪除</th>
        </tr>
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "az0902@";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=login", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if ($set_admin == "root") {
                $sql = "select * from data";
                $set = $conn->query($sql);
                $result = $set->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $start) {
                    echo "<tr>";
                    echo "<td>" . $start["id"] . "</td>";
                    echo "<td>" . $start["name"] . "</td>";
                    echo "<td>" . $start["username"] . "</td>";
                    echo "<td>" . $start["password"] . "</td>";
                    echo "<td><a href='Delete.php?id=$start[id]&&name=$set_admin'><b>刪除</b></a></td>";
                    echo "</tr>";
                }
            } elseif ($set_admin != "root") {
                $sql = "select * from data where name='$set_admin'";
                $set = $conn->query($sql);
                $result = $set->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $start) {
                    echo "<tr>";
                    echo "<td>" . $start["id"] . "</td>";
                    echo "<td>" . $start["name"] . "</td>";
                    echo "<td>" . $start["username"] . "</td>";
                    echo "<td>" . $start["password"] . "</td>";
                    echo "<td><a href='Delete.php?id=$start[id]&&name=$start[name]'><b>刪除</b></a></td>";
                    echo "</tr>";
                }
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        ?>
    </table>
</center>
</body>
</html>