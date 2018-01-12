<?php
     session_start();
     $pwd = $_POST["pwd"];
     if($pwd != "YOUR PASSWORD")
     {
        $exp = "<script>alert('Wrong Password!');window.location.href='index.php';</script>";
     }
     else
     {
          $_SESSION["user_name"] = "YOUR SETTINGS";
          $exp = "<script>window.location.href='pannel.php';</script>";
     }
    echo $exp;
?>