<?php
$min = 1;
$max = 42;
$total = 6;


$a_full = range($min, $max);
shuffle($a_full);
$a_box = array_slice($a_full, 0, $total);




// 結果取出來，陣列用 foreach 迴圈逐一讀取
$pic = '';
foreach($a_box as $one)
{
	$pic .= '<img src="images/' . $one . '.jpg">';
}


// 排序
sort($a_box);

$pic2 = '';
foreach($a_box as $one)
{
	$pic2 .= '<img src="images/' . $one . '.jpg">';
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