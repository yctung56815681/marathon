<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>修改會員資料</title>
        <style>
            .Top {
                width: auto;
                height: 200px;
                position: relative;

                background-image: url("/img/header.jpg");
                background-size: cover;
            }

            .Left {

                /* width: 25%; */
                width: 200px;
                height: auto;
                position: relative;
                background-color: yellow;
                display: inline-block;
            }

            .Right {
                width: 85%;
                height: auto;
                position: absolute;
                background-color:#F0F8FF;
                display: inline-block;

            }

            .content {}

        </style>


    </head>

<body>
    <!--------------------------------------------------------------------------------------TOP-------------------------------------------------------------------------------------->
    <div class="Top">



    </div>

    <!--------------------------------------------------------------------------------------content-------------------------------------------------------------------------------------->
    <div class="Left">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            會員資料管理
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <a class="dropdown-item" href="/memberAdmin">個人會員管理</a>
                        <a class="dropdown-item" href="#">團體會員管理</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            賽事管理
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <a class="dropdown-item" href="#">賽事列表</a>
                        {{-- <a class="dropdown-item" href="#">賽事編輯</a> --}}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            訂單管理
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <a class="dropdown-item" href="#">個人訂單管理</a>
                        <a class="dropdown-item" href="#">團體訂單管理</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="Right">


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

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
