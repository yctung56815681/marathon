<!DOCTYPE html>
<html lang="en">
<head>
  <title>個人會員資料管理(修改會員資料)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<form method="post" action="/memberAdmin/{{ $mem->id }}" class="form-horizontal">
@csrf
@method('PUT')
<fieldset>

<!-- Form Name -->
<legend>修改會員資料</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">姓名:</label>  
  <div class="col-md-4">
  <input id="name" name="name" value="{{ $mem->name }}" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="twId">身分證字號:</label>  
  <div class="col-md-4">
  <input id="twId" name="twId" value="{{ $mem->twId }}" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="sex">性別:</label>  
        <div class="col-md-4">
        <input id="sex" name="sex" value="{{ $mem->sex }}" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="year">出生年:</label>  
        <div class="col-md-4">
        <input id="year" name="year" value="{{ $mem->year }}" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="month">月:</label>  
        <div class="col-md-4">
        <input id="month" name="month" value="{{ $mem->month }}" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="day">日期:</label>  
        <div class="col-md-4">
        <input id="day" name="day" value="{{ $mem->day }}" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="city">居住城市:</label>  
        <div class="col-md-4">
        <input id="city" name="city" value="{{ $mem->city }}" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="town">鄉鎮市:</label>  
        <div class="col-md-4">
        <input id="town" name="town" value="{{ $mem->town }}" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="address">地址:</label>  
    <div class="col-md-4">
        <input id="address" name="address" value="{{ $mem->address }}" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="email">e-mail:</label>  
        <div class="col-md-4">
        <input id="email" name="email" value="{{ $mem->mail }}" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="cellPhone">電話:</label>  
        <div class="col-md-4">
        <input id="cellPhone" name="cellPhone" value="{{ $mem->cellPhone }}" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="emName">緊急聯絡人:</label>  
        <div class="col-md-4">
        <input id="emName" name="emName" value="{{ $mem->emName }}"type="text" placeholder="" class="form-control input-md">
  </div>
</div>
  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="emRelationship">與緊急聯絡人關係:</label>  
        <div class="col-md-4">
        <input id="emRelationship" name="emRelationship" value="{{ $mem->emRelationship }}" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
  <!-- Text input-->
<div class="form-group">
        <label class="col-md-4 control-label" for="emCellphone">緊急聯絡人電話:</label>  
        <div class="col-md-4">
        <input id="emCellphone" name="emCellphone" value="{{ $mem->emCellphone }}" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="okOrCancel"></label>
  <div class="col-md-8">
    <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success">確認修改</button>
    <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-danger">取消修改</button>
  </div>
</div>

</fieldset>
</form>


</div>

</body>
</html>