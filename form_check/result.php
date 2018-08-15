<?php
$result = print_r($_POST, TRUE);

$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>BMI</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
看到此頁面，表示通過前端的資料檢查。
<hr>
傳入的資料如下：
<pre>
{$result}
</pre>
</body>
</html>
HEREDOC;

echo $html;
?>