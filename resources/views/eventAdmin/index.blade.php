<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>個人會員資料管理</title>
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
                
                height: auto;
                position: relative;
                background-color: yellow;
                display: inline-block;
                
            }

            .Right {
                font-size: 13px;
                
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
    <div class="Left col-2">
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
                        <a class="dropdown-item" href="/eventAdmin">賽事列表</a>
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
    <div class="Right col-10">
        <h4>賽事活動列表 </h4>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>賽事活動編號</th>
        <th>賽事活動名稱</th>
        <th>賽事舉辦城市</th>
        <th>賽事舉辦地點</th>
        <th>活動報名開始時間</th>
        <th>活動報名截止時間</th>
        <th>賽事活動開始時間</th>
        <th>賽事活動結束時間</th>
        <th>賽事活動聯絡電話</th>
        <th>創建時間</th>
        <th>
        <a href="/eventAdmin/create" class="btn btn-success pull-right">新增</a>
        </th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
            @foreach ($eventsList as $eve)
        <tr>
            <td>{{$eve->id}}</td>
            <td>{{$eve->eventTittle}}</td>
            <td>{{$eve->cityid}}</td>
            <td>{{$eve->eventAddr}}</td>
            <td>{{$eve->eventSignupStartTime}}</td>
            <td>{{$eve->eventSignupEndTime}}</td>
            <td>{{$eve->eventRunStartTime}}</td>
            <td>{{$eve->eventRunEndTime}}</td>
            <td>{{$eve->eventTel}}</td>
            <td>{{$eve->created_at}}</td>
            
            <td>
                <span class="pull-right">
                    <form method="post" action="/eventAdmin/{{$eve->id}}">
                        <a href="/eventAdmin/{{$eve->eid}}/edit" class="btn btn-xs btn-info">修改</a>|
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span>刪除</button>
                    </form>
                </span>
            </td>
        </tr>
        @endforeach
        

        </tbody>
    

  </table>
  <div>
    {{-- @foreach ($eventsList as $eve)
        <li>
        <a href="employeeDetails.html?id=1" data-ajax="false"> 
            
            <p>{{ $eve->eventTittle }}</p>
            <p>{{ $eve->eventAddr }}</p>
        </a>
        </li>
    @endforeach --}}
    
  </div>

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
