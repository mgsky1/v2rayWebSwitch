<?php 
  require("check.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>V2ray Web Switch Local</title>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-switch.min.css" rel="stylesheet">
        <link href="bootstrap/css/button.css" rel="stylesheet">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap-switch.min.js"></script>
    </head>
    <body>
      <div style="text-align:center; margin-top:100px">
         <h1>V2ray Web Switch Local</h1>
        <div class="switch switch-large">
            <input type="checkbox" name="my-checkbox" checked/>
        </div>
        <div id="info" style="margin-top:10px"></div>
            <a href="logout.php" class="button button-primary button-small">Logout</a>
      </div>
    </body>
    <script src="bootstrap/js/controller.js"></script>
</html>
