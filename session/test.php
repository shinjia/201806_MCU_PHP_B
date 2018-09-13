<?php
session_start();

$ss = session_id();


$html = <<< HEREDOC
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Test</title>
</head>

<body>
<p>Session id: {$ss}</p>
<p><a href="test.php" target="_blank">test.php (超連結)</a></p>
<p><button onclick="window.open('test.php')">test.php (新視窗)</p>
</body>
</html>
HEREDOC;

echo $html;
?>