<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員資料</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        .Top {
            width: auto;
            height: 50px;
            position: relative;

            /* background-image: url("/img/header.jpg");
                background-size: cover; */
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
            background-color: #F0F8FF;
            display: inline-block;

        }

        .content {}

    </style>
</head>

<body>
    <!--------------------------------------------------------------------------------------TOP-------------------------------------------------------------------------------------->
    <div class="Top bg-dark">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="/ui" class="text-warning"><i class="fas fa-landmark fa-2x text-warning"></i>首頁</a>
                </div>
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <a href="/logout" class="text-warning"><i class="fas fa-sign-out-alt fa-2x text-warning"></i>登出</a>
                </ul>
            </div>
        </nav>
    </div>

    <!--------------------------------------------------------------------------------------content-------------------------------------------------------------------------------------->
    <div class="Left">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            會員及訂單管理
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <a class="dropdown-item" href="/memberAdmin">會員管理</a>
                        <a class="dropdown-item" href="/orderGroupAdmin">訂單管理</a>
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
            <!-- <div class="card">
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
            </div> -->
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            帳號管理
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <a class="dropdown-item" href="/accountAdmin"> 帳號列表</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--------------------------------------------------------------------------------------right-------------------------------------------------------------------------------------->
    <div class="Right">
        <div class="container">
            <div class="p-3 bg-secondary text-white text-center">會員資料</div>

            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>身分證字號:</th>
                    <td>{{$mem->memberTwId}}</td>
                    <th>姓名:</th>
                    <td>{{$mem->memberName}}</td>
                </tr>
                <tr>
                    <th>性別:</th>
                    <td>{{$mem->memberGender}}</td>
                    <th>出生日期:</th>
                    <td>{{$mem->memberYear}}-{{$mem->memberMonth}}-{{$mem->memberDay}}</td>
                </tr>
                <tr>
                    <th>居住城市:</th>
                    <td>{{$mem->memberCity}}</td>
                    <th>鄉鎮市:</th>
                    <td>{{$mem->memberTown}}</td>
                </tr>
                <tr>
                    <th>地址:</th>
                    <td>{{$mem->memberAddr}}</td>
                    <th>e-mail:</th>
                    <td>{{$mem->memberEmail}}</td>
                </tr>
                <tr>
                    <th>電話:</th>
                    <td>{{$mem->memberMobile}}</td>
                    <th>緊急聯絡人:</th>
                    <td>{{$mem->memberEmergencyContact}}</td>
                </tr>
                <tr>
                    <th>與緊急聯絡人關係:</th>
                    <td>{{$mem->memberEmergencyRelationship}}</td>
                    <th>緊急聯絡人電話:</th>
                    <td>{{$mem->memberEmergencyMobile}}</td>
                </tr>
                <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td>
                    <a  class="btn btn-sm btn-success " role="button" onclick="history.go(-1)"><i class="far fa-plus-square"></i> 返回</a>
                    <a class="btn btn-sm btn-info" role="button" href="/memberAdmin/{{$mem->idMember}}/edit"><i class="far fa-edit"></i> 編輯</a>
                    </td>
                </tr>
            </table>
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
    </div>
</body>

</html>
