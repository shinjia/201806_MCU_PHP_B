<?php
$min = 1;
$max = 42;
$total = 6;


$a_full = range($min, $max);
$a_box = array_rand($a_full, $total);  // 注意取出為key




// 結果取出來，陣列用 foreach 迴圈逐一讀取
$pic = '';
foreach($a_box as $one)
{
	$pic .= '<img src="images/' . $a_full[$one] . '.jpg">';
}


// 排序
sort($a_box);

$pic2 = '';
foreach($a_box as $one)
{
	$pic2 .= '<img src="images/' . ($one+1) . '.jpg">';
}


$html = <<< HEREDOC
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Test</title>
<style type="text/css">
<!--
body {
	background-color: #FC3;
}
-->
</style></head>

<body>
<p>幸運樂透數字</p>
<p>{$pic}</p>

<p>排序後</p>
<p>{$pic2}</p>
</body>
</html>
HEREDOC;

echo $html;
?>