<?php

// 隨機產生顏色值 (十六進位字串)，這一段程式不是主要的功能
function random_color()
{
   $r = str_pad( dechex( mt_rand(0,255) ), 2, '0', STR_PAD_LEFT);
   $g = str_pad( dechex( mt_rand(0,255) ), 2, '0', STR_PAD_LEFT);
   $b = str_pad( dechex( mt_rand(0,255) ), 2, '0', STR_PAD_LEFT);
   return '#' . $r . $g . $b;
}



$color = random_color();

$script = <<< HEREDOC
document.body.style.background = '{$color}';
HEREDOC;


$content = <<< HEREDOC
   <h2>這是主程式的輸出內容</h2>
   <h2>這是主程式的輸出內容</h2>
   <h2>這是主程式的輸出內容</h2>
   <h2>這是主程式的輸出內容</h2>
   <h2>這是主程式的輸出內容</h2>
   <h2>這是主程式的輸出內容</h2>
   <h2>這是主程式的輸出內容</h2>
   <h2>這是主程式的輸出內容</h2>
HEREDOC;



// 指定要套用的樣版檔
$template_file = 'page.html';



// 讓樣版完全分離的用法
$template_code = '$html = <<< HEREDOC
' . file_get_contents($template_file) . '
HEREDOC;
';

eval($template_code);

echo $html;
?>
