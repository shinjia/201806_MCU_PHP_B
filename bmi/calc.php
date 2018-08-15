<?php
$height = isset($_POST['height']) ? $_POST['height'] : '';
$weight = isset($_POST['weight']) ? $_POST['weight'] : '';


// 錯誤狀況的處理
if($height==0)
{
	// echo '發生錯誤了，身高不得為零。請<a href="input.php?h=' . $height .'&w=' . $weight .'">重新輸入</a>';
	// exit;
	$url = 'input.php?h=' . $height .'&w=' . $weight .'&status=X';
	header('Location:' . $url);
}

// 計算BMI值
$bmi = $weight / (($height/100)*($height/100));

// 取兩位小數
$bmi = round($bmi, 2);

// 條件判斷處理
if($bmi>=24)
{
	$msg = '月巴月半';
	$pic = 'images/s1.jpg';
	$url = 'page1.html';
}
elseif($bmi<24 && $bmi>=22)
{
	$msg = '過重';
	$pic = 'images/s2.jpg';
	$url = 'page2.html';
}
elseif($bmi<24 && $bmi>=17.5)
{
	$msg = '正常';	
	$pic = 'images/s3.jpg';
	$url = 'page3.html';
}
elseif($bmi<17.5)
{
	$msg = '太輕';
	$pic = 'images/s4.jpg';
	$url = 'page4.html';
}
else
{
	$msg = '程式一定出錯！';
	echo $msg; 
	exit;
}


// header('Location:' . $url);   // 強制切換網頁


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>BMI</title>
</head>

<body>
<h1>Hello World</h1>
<p>你的BMI值為 {$bmi}</p>
<p>{$msg}</p>
<p><img src="{$pic}"></p>
<p><a href="input.php?h={$height}&w={$weight}">重新計算</a></p>
<p><a href="{$url}">建議</a></p>
<iframe src="{$url}" width="800" height="200"></iframe>
<hr />
<p>height: {$height}</p>
<p>weight: {$weight}</p>
</body>
</html>
HEREDOC;

echo $html;
?>