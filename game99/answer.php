<?php

$a = isset($_GET['a']) ? $_GET['a'] : 1;
$b = isset($_GET['b']) ? $_GET['b'] : 1;

$ans = $a * $b;


$n1 = $ans % 10;       // 個位數
$n2 = floor($ans/10);  // 十位數

/*
$pic1 = '<img src="images/' . $n1 . '.jpg">';
$pic2 = '<img src="images/' . $n2 . '.jpg">';
*/

if($ans<10)
{
	$pic1 = '<img src="images/' . $n1 . '.jpg">';
	$pic2 = '';
}
else
{
	$pic1 = '<img src="images/' . $n1 . '.jpg">';
	$pic2 = '<img src="images/' . $n2 . '.jpg">';
}


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Game99</title>
</head>

<body>
<h1>九九乘法CAI</h1>
<p>{$a} 乘以 {$b} 的答案是 {$ans}</p>
<p>{$pic2}{$pic1}</p>

<p><a href="question.php">再試一題</a></p>

</body>
</html>
HEREDOC;

echo $html;
?>