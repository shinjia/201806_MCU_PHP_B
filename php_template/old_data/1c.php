<?php

$template_file = "1c.htm";

   $field1 = "³¯«H¹Å";
   $field2 = "shinjia@ms5.hinet.net";
   $field3 = "Taipei.....";
   
   $pattern=array("{F1}", "{F2}", "{F3}");
   $replacement=array($field1, $field2, $field3);
   $tpl_content = file($template_file);
   
   $res = str_replace($pattern, $replacement, $tpl_content); 

echo join("", $res);



?>


