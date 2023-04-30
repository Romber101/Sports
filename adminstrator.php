<?php
@$set_name=$_GET["name"];
if($set_name=="root")
    header("location:Sports_Adminstrator.php?name=root");
elseif ($set_name!="root")
    header("location:wellcome.php?name=$set_name");
?>