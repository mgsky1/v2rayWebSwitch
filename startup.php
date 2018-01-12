<?php
    require("check.php");
    $cmd = "D:\\v2ray\\wv2ray.exe";//v2ray executable file PATH
    pclose(popen("start /B ". $cmd, "r")); 
    echo "OK"; 
?>