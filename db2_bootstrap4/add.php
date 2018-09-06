<?php

$html = <<< HEREDOC
<button onclick="history.back();" class="btn btn-primary">返回</button>
<h2>新增資料</h2>
<form action="add_save.php" method="post">

  <div class="form-group row">
    <label for="usercode" class="col-2">代碼</label>
    <div class="col-10">
      <input type="text" class="form-control" name="usercode" id="usercode" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="username" class="col-2">姓名</label>
    <div class="col-10">
      <input type="text" class="form-control" name="username" id="username" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="address" class="col-2">地址</label>
    <div class="col-10">
      <input type="text" class="form-control" name="address" id="address" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="birthday" class="col-2">生日</label>
    <div class="col-10">
      <input type="text" class="form-control" name="birthday" id="birthday" placeholder="yyy-mm-dd">
    </div>
  </div>
  <div class="form-group row">
    <label for="height" class="col-2">身高</label>
    <div class="col-3">
      <input type="text" class="form-control" name="height" id="height" placeholder="">
    </div>
    <label for="weight" class="col-2 offset-2">體重</label>    
    <div class="col-3">
      <input type="text" class="form-control" name="weight" id="weight" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="remark" class="col-2">備註</label>
    <div class="col-10">
      <input type="text" class="form-control" name="remark" id="remark" placeholder="">
    </div>
  </div>

  <div class="row">
    <input type="submit" value="新增" class="btn btn-success">
  </div>
</form>
HEREDOC;

include 'pagemake.php';
pagemake($html, '');
?>