<?php
    require("check.php");
    $cmd = "sudo service v2ray stop";
    exec($cmd,$data);
    echo "OK";
?>
