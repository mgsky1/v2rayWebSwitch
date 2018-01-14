<?php
    require("check.php");
    $cmd = "sudo service v2ray start";
    exec($cmd,$data);
    echo "OK"; 
?>
