<?php
include "FastTemplate/class.FastTemplate.php";


$template_file = "1e.htm";

   $field1 = "³¯«H¹Å";
   $field2 = "shinjia@ms5.hinet.net";
   $field3 = "Taipei.....";
   
$template = new FastTemplate("./");

$template-> define ( array ('pagina' => $template_file ) ); 


$template->assign('{F1}',$field1); 
$template->assign('{F2}',$field2); 
$template->assign('{F3}',$field3); 

$template->parse('OUTPUT','pagina'); 

$template->FastPrint('OUTPUT'); 
?> 

