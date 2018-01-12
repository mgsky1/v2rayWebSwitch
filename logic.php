<?php 
     require("check.php");
     exec("tasklist",$data);
     $isFind = False;
     foreach($data as $exp)
     {
         if(strstr($exp,"wv2ray"))
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