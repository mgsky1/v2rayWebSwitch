<?php 
     require("check.php");
     exec("ps -e | grep v2ray",$data);
     $isFind = False;
     foreach($data as $exp)
     {
         if(strstr($exp,"v2ray"))
         {
            $isFind = True;
            break;
         }
     }

     if($isFind)
     {
         echo "FOUND";
     }
     else
     {
         echo "NOT FOUND";
     }
?>
