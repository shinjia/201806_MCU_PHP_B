<?php
// 引入template原始檔
include "Vincent_TP/template.inc.php";
include "Vincent_TP/template_vincent.inc.php";


// 設定template檔案
$html_file = "1d.htm";
$tp = new VINCENT_TP($html_file);


//
$field1 = "陳信嘉";
$field2 = "shinjia@ms5.hinet.net";
$field3 = "Taipei.....";


// 指定template的變數
$tp->set("F1", $field1);
$tp->set("F2", $field2);
$tp->set("F3", $field3);


// 顯示html碼
$tp->show();

?>