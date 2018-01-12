<?php
    require("check.php");
    exec("taskkill -f -im wv2ray.exe",$data);
    echo "OK";
?>