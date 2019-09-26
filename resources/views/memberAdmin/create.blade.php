<!DOCTYPE html>
<html lang="en">
<head>
  <title>個人會員資料管理(新增會員資料)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">


  <form method="post" action="/memberAdmin" class="form-horizontal">
    @csrf
<fieldset>

<!-- Form Name -->
<legend>會員資料表</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">姓名:</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="twId">身分證字號:</label>  
  <div class="col-md-4">
  <input id="twId" name="twId" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="sex">性別:</label>  
        <div class="col-md-4">
        <input id="sex" name="sex" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="year">出生年:</label>  
        <div class="col-md-4">
        <input id="year" name="year" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="month">月:</label>  
        <div class="col-md-4">
        <input id="month" name="month" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="day">日期:</label>  
        <div class="col-md-4">
        <input id="day" name="day" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="city">居住城市:</label>  
        <div class="col-md-4">
        <input id="city" name="city" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="town">鄉鎮市:</label>  
        <div class="col-md-4">
        <input id="town" name="town" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="address">地址:</label>  
    <div class="col-md-4">
        <input id="address" name="address" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="email">e-mail:</label>  
        <div class="col-md-4">
        <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="cellPhone">電話:</label>  
        <div class="col-md-4">
        <input id="cellPhone" name="cellPhone" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="emName">緊急聯絡人:</label>  
        <div class="col-md-4">
        <input id="emName" name="emName" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="emRelationship">與緊急聯絡人關係:</label>  
        <div class="col-md-4">
        <input id="emRelationship" name="emRelationship" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="emCellphone">緊急聯絡人電話:</label>  
        <div class="col-md-4">
        <input id="emCellphone" name="emCellphone" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="okOrCancel"></label>
  <div class="col-md-8">
    <button type="submit" name="okOrCancel" class="btn btn-success">確認新增</button>
    <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-danger">取消新增</button>
  </div>
</div>

</fieldset>
</form>


</div>

</body>
</html>