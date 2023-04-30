<?php
@$set_name=$_GET["name"];
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title><?php echo $set_name;?></title>
</head>
<style>
    nav{
        position: absolute;
        left: 200px;
    }
    label{
        font-size: 20pt;
    }
</style>
<body background="藍色.jpg">
<h1 style="color: blue"><marquee direction="up"><a href="Drop_Sports.php">比賽查詢系統</a></marquee></h1>
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
</h1><br><br><br><br><br><br><br>
<center>
    <form action="Sports_player_Server.php" method="post">
        <label>請選擇日期：<input type="date" name="calendar" required></label><br><br>
        <label>請選擇聯盟：<select id="player" name="player" required>
                <option value="sbl">SBL</option>
                <option value="plg">PLG</option>
                <option value="tone">T1</option>
            </select></label><br><br>
        <label>請輸入隊伍：<select id="basketball" name="basketball" onclick="TestHello();" required>
                <?php
                for($item=1;$item<7;$item++){
                    echo "<option id='Item$item'></option>";
                }
                ?>
                <script>
                    function TestHello(){
                        const sbl=["","裕隆","台銀","台啤","柏力","隊伍1","隊伍2"];
                        const plg=["","夢想家","國王","勇士","鋼鐵人","隊伍1","隊伍2"];
                        const t1=["","中信","台啤","雲豹","太陽","獵鷹","海神"];
                        const SetPlayer=document.getElementById("player").value;
                        if(SetPlayer=="sbl"){
                            document.getElementById("Item1").innerText=sbl[1];
                            document.getElementById("Item2").innerText=sbl[2];
                            document.getElementById("Item3").innerText=sbl[3];
                            document.getElementById("Item4").innerText=sbl[4];
                            document.getElementById("Item5").innerText=sbl[5];
                            document.getElementById("Item6").innerText=sbl[6];
                        }
                        else if(SetPlayer=="plg"){
                            document.getElementById("Item1").innerText=plg[1];
                            document.getElementById("Item2").innerText=plg[2];
                            document.getElementById("Item3").innerText=plg[3];
                            document.getElementById("Item4").innerText=plg[4];
                            document.getElementById("Item5").innerText=plg[5];
                            document.getElementById("Item6").innerText=plg[6];
                        }
                        else if(SetPlayer=="tone"){
                            document.getElementById("Item1").innerText=t1[1];
                            document.getElementById("Item2").innerText=t1[2];
                            document.getElementById("Item3").innerText=t1[3];
                            document.getElementById("Item4").innerText=t1[4];
                            document.getElementById("Item5").innerText=t1[5];
                            document.getElementById("Item6").innerText=t1[6];
                        }
                    }
                </script>
            </select></label>VS<label><select id="basketball2" name="basketball2" onclick="TestHello1();" required>
                <?php
                for($item=8;$item<14;$item++){
                    echo "<option id='Item$item'></option>";
                }
                ?>
                <script>
                    function TestHello1(){
                        const sbl=["","裕隆","台銀","台啤","柏力","隊伍1","隊伍2"];
                        const plg=["","夢想家","國王","勇士","鋼鐵人","隊伍1","隊伍2"];
                        const t1=["","中信","台啤","雲豹","太陽","獵鷹","海神"];
                        const SetPlayer=document.getElementById("player").value;
                        if(SetPlayer=="sbl"){
                            document.getElementById("Item8").innerText=sbl[1];
                            document.getElementById("Item9").innerText=sbl[2];
                            document.getElementById("Item10").innerText=sbl[3];
                            document.getElementById("Item11").innerText=sbl[4];
                            document.getElementById("Item12").innerText=sbl[5];
                            document.getElementById("Item13").innerText=sbl[6];
                        }
                        else if(SetPlayer=="plg"){
                            document.getElementById("Item8").innerText=plg[1];
                            document.getElementById("Item9").innerText=plg[2];
                            document.getElementById("Item10").innerText=plg[3];
                            document.getElementById("Item11").innerText=plg[4];
                            document.getElementById("Item12").innerText=plg[5];
                            document.getElementById("Item13").innerText=plg[6];
                        }
                        else if(SetPlayer=="tone"){
                            document.getElementById("Item8").innerText=t1[1];
                            document.getElementById("Item9").innerText=t1[2];
                            document.getElementById("Item10").innerText=t1[3];
                            document.getElementById("Item11").innerText=t1[4];
                            document.getElementById("Item12").innerText=t1[5];
                            document.getElementById("Item13").innerText=t1[6];
                        }
                    }
                </script>
            </select></label><br><br>
        <button type="submit"><label>新增</label></button>
    </form>
</center>
</body>
</html>