<?php

function pagemake($content='', $head='')
{  
  $html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>基本資料庫系統</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/sticky-footer-navbar.css" >

  <script src="jquery/jquery.min.js"></script>
  <script src="jquery/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

{$head}
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Newsletter</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">首頁</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="list_all.php">全部顯示 list_all</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="list_page.php">分頁顯示 list_page</a>
    </li>


    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        說明
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="page.php?code=note2">Note</a>
        <a class="dropdown-item" href="#">範例二</a>
        <a class="dropdown-item" href="#">範例三</a>
      </div>
    </li>
  </ul>
</nav>

<div class="container">
   <div class="row">
     <div class="col">
       <div class="alert alert-primary">後台資料庫管理</div>
     </div>
   </div>
    
   <div class="row">
     <div class="col">
       {$content}
     </div>
   </div>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">版權聲明xxx</span>
      </div>
    </footer>
</div>

</body>
</html>  
HEREDOC;

echo $html;
}

?>