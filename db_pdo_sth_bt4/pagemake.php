<?php

function pagemake($content='', $head='')
{  
  $html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>基本資料庫系統</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</style>

{$head}
</head>
<body>

<div class="container">
   <div id="header">
      <h1>後台資料庫管理</h1>
   </div>
  
   <div id="nav">     
      | <a href="index.php" target="_top">首頁</a>
      | <a href="page.php?code=note2">說明</a> 
      | <a href="list_page.php">資料列表</a> 
      |
   </div>
  
   <div id="main">
    {$content}
   </div>

   <div id="footer">
     <p>版權聲明</p>
   </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="jquery/jquery.min.js"></script>
<script src="jquery/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>  
HEREDOC;

echo $html;
}

?>