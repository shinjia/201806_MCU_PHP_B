<?php

$link = mysqli_connect('localhost', 'root', '', 'class');
mysqli_query($link, 'set character set utf8mb4');



$sqlstr = " INSERT INTO person (usercode, username, address, birthday, height, weight, remark) VALUES ('p009', 'Johxxxxn', '台南', '2010-2-8', '172', '80', ''); ";


mysqli_query($link, $sqlstr);


mysqli_close($link);


echo 'ok';
?>