<?php

$num = mt_rand(0, 9);
$pic = 'images/' . $num . '.jpg';

// $pic = 'images/7.jpg'; // 假字
// $pic = 'images/$num.jpg';  // 單引號不會置換
// $pic = "images/$num.jpg";  // 雙引號會置換變數
// 'images/'   .   $num   .   '.jpg'    


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>幸運數字</title>
</head>

<body>
<h1>Hello World</h1>
<p>你好，你的幸運數字是......</p>
<p><img src="{$pic}"></p>
<p><a href="index.php">重新產生</a></p>
</body>
</html>
HEREDOC;

echo $html;
?>