<?php
$min = 1;
$max = 12;
$total = 6;

$a_box = array();

// 『產生隨機亂數』，『放入陣列內』
$chk = '';
for($i=1; $i<=$total; $i++)
{
   do 
   {
      $num = mt_rand($min, $max);
      $chk .= $num . ', ';
   } while( in_array($num, $a_box) );

   $a_box[] = $num;
}

// 逐一取出陣列的值
$str1 = '';
foreach($a_box as $one)
{
   $str1 .= '<img src="images/' . $one . '.jpg">';
}

sort($a_box);

// 逐一取出陣列的值
$str2 = '';
foreach($a_box as $one)
{
   $str2 .= '<img src="images/' . $one . '.jpg">';
}



$html = <<< HEREDOC
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Lotto6</title>
</head>

<body>
<p>幸運樂透數字</p>
檢查每次出現的數字：{$chk}
<p>原來的順序：{$str1}</p>
<p>由小排到大：{$str2}</p>
</body>
</html>
HEREDOC;

echo $html;
?>