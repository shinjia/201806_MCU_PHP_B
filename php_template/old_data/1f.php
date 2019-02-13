<?php

require 'Smarty/libs/Smarty.class.php';

$smarty = new Smarty;


    define('__SITE_ROOT', '.'); // 最後沒有斜線
    $smarty->template_dir = __SITE_ROOT . "/";
    $smarty->compile_dir = __SITE_ROOT . "/Smarty/templates_c/";
    //$smarty->config_dir = __SITE_ROOT . "/configs/";
    //$smarty->cache_dir = __SITE_ROOT . "/cache/";
    $smarty->left_delimiter = '{';
    $smarty->right_delimiter = '}';




$smarty->compile_check = true;
//$smarty->debugging = true;

$smarty->assign("F1","Vincent Chen");
$smarty->assign("F2","shinjia@ms5.hinet.net");
$smarty->assign("F3","Taipei.......");

$smarty->display('1f.htm');

?>
