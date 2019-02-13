<?php

$field1 = "陳信嘉";
$field2 = "shinjia@ms5.hinet.net";
$field3 = "Taipei.....";


echo "<html>";
echo "<head>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=big5\">";
echo "<title>Example1</title>";
echo "</head>";

echo "<body>";
echo "<p>個人基本資料</p>";
echo "<table border=\"1\" cellspacing=\"0\" cellpadding=\"0\">";
echo "  <tr> ";
echo "    <td bgcolor=\"#0033CC\"><font color=\"#99CC99\">姓名</font></td>";
echo "    <td>" . $field1 . "</td>";
echo "  </tr>";
echo "  <tr> ";
echo "    <td bgcolor=\"#0033CC\"><font color=\"#99CC99\">e-mail</font></td>";
echo "    <td><a href=\"mailto:" . $field2 . "\">" . $field2 . "</a></td>";
echo "  </tr>";
echo "  <tr> ";
echo "    <td bgcolor=\"#0033CC\"><font color=\"#99CC99\">地址</font></td>";
echo "    <td>" . $field3 . "</td>";
echo "  </tr>";
echo "</table>";
echo "<hr>";
echo "</body>";
echo "</html>";
?>