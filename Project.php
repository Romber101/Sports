<?php
@$set_name = $_GET["name"];
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
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

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 200%;
    }

    td, th {
      border: 1px solid black;
      text-align: center;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }

    .Message{
        font-size: 20pt;
        position: absolute;
        left: 650px;
        top:250px;
    }
    input{
        font-size: 20pt;
    }
</style>

<body background="藍色.jpg">
    <h1 style="text-align: center">系統管理員</h1>
    <h1 style="position:absolute; left:85%;">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $set_name;?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="Drop_Sports.php">登出</a></li>
                </ul>
            </li>
        </ul>
    </h1><br><br><br><br>
    <center>
        <ul>
            <?php
            echo "<li><a href='Sports_page.php?name=$set_name'><b><img src='LeBron素材.jpg'>運動簡介</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<li><a href='Sports_Select.php?name=$set_name'><b><img src='anthony_davis.png'>查詢系統</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<li><a href='Sports_Form_Admin.php?name=$set_name'><b><img src='program素材.jpg'>問題收集</b></a></li>";
            ?>
        </ul>
    </center>
    <br><br><br><br><br><br><br><br><br><br><br>
    <div class="Message">
        <form action="Project_Server.php?name=<?php echo $set_name;?>" method="post">
             日期：<input type="date" name="Calandar" required>
            <button><div>查詢</div></button>
            <br><br>
            <table>
                <tr>
                    <th colspan="4">公告</th>
                </tr>
                <tr>
                    <th>id</th>
                    <th>Calendar</th>
                    <th>basketball</th>
                    <th>player</th>
                </tr>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "az0902@";

                $conn = new PDO("mysql:host=$servername;dbname=login", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "select * from information";
                $set = $conn->query($sql);
                $result = $set->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $start) {
                    echo "<tr>";
                    echo "<td>" . $start["id"] . "</td>";
                    echo "<td>" . $start["calendar"] . "</td>";
                    echo "<td>" . $start["basketball"] . "</td>";
                    echo "<td>" . $start["player"] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </form>
    </div>
</body>
</html>