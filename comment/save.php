<?php
$nickname = isset($_POST['nickname']) ? $_POST['nickname'] : '';
$comment = isset($_POST['comment']) ? $_POST['comment'] : '';


// $filename = 'data.txt';
$filename = 'save/data_' . date('Ymd', time()) . '.txt';

$today = date('Y-m-d H:i:s', time());
/*
$data = '姓名：' . $nickname;
$data .= '意見：' . $comment;
*/

$data = <<< HEREDOC
時間：{$today}
姓名：{$nickname}
意見：{$comment}
-----------------------------------------------------

HEREDOC;

// 存檔 (方法一)
// file_put_contents($filename, $data, FILE_APPEND);


// 存檔 (方法二)
$old = file_get_contents($filename);
$new = $data . $old;
file_put_contents($filename, $new);




$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<h1>Hello World</h1>
<p>你好，資料已收到......</p>

<hr />
{$data}
</body>
</html>
HEREDOC;

echo $html;
?>