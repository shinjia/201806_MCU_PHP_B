<?php



$name = '陳信嘉';
$age = 25*2;
$email = 'shinjia168@gmail.com';
$photo = 'images/head1.jpg';

/*
$name = '阮經天';
$age = 25;
$email = 'aabc@sfdssdc.com';
$photo = 'images/head2.jpg';
*/


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<h1>Hello World</h1>
<p>姓名：{$name}</p>
<p>年齡：{$age}</p>
<p>email：{$email}</p>
<p><img src="{$photo}"></p>

</body>
</html>
HEREDOC;

echo $html;
?>