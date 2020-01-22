<?php

foreach($_POST as $key => $value) {
   

     file_put_contents("ip.txt","get it :". $key."****", FILE_APPEND);
        //filtering data
         $key =  str_replace("_"," ",$key);
         $key =  str_replace("equal","=",$key);;
         $key =  str_replace("br31","[",$key);
         $key =  str_replace("br32","]",$key);
         $key =  str_replace("<script>","fuck off mf ",$key);
         $key =  str_replace("?php","fuck off mf ",$key);
         
    // $key =  str_replace("\"","'",$key);
    
    echo $key ;
}
    
    

?>