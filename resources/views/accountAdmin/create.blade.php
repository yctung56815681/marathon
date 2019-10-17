<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>帳號新增</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> --}}


    <!-- Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        .Top {
            width: auto;
            /* height: 200px; */
            height: 50px;
            position: relative;

            /* background-image: url("/img/header.jpg"); */
            /* background-size: cover; */
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
    <!--------------------------------------------------------------------------------------Top-------------------------------------------------------------------------------------->
    <div class="Top bg-dark">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="/ui"><i class="fas fa-landmark fa-2x"></i>首頁</a>
                </div>
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <a href="/logout"><i class="fas fa-sign-out-alt fa-2x"></i>登出</a>
                </ul>
            </div>
        </nav>
    </div>

    <!--------------------------------------------------------------------------------------Left-------------------------------------------------------------------------------------->
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
                        <a class="dropdown-item" href="#">賽事列表</a>
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
            {{-- <div class="row"> --}}
            <div class="p-3 bg-secondary text-white text-center">帳號新增</div>
            {{-- <div class="pt-2 text-center">
                <h5>帳號新增</h5>
            </div> --}}

            <form method="post" action="/accountAdmin" onsubmit="return checkPassword()">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-success"><i class="far fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="帳號" id="username" name="username" value=""
                        required>
                    <div class="input-group-append">

                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-success"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="新密碼" id="password" name="password" value=""
                        required>
                    <div class="input-group-append">

                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-success"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="確認密碼" id="password2" name="password2"
                        value="" required>
                    <div class="input-group-append">

                    </div>
                </div>

                <button type="submit" class="btn btn-sm btn-info"><i class="far fa-check-square"></i> 確認</button>
                <button type="reset" class="btn btn-sm btn-warning"><i class="far fa-window-close"></i> 重置</button>
            </form>
            {{-- </div> --}}

            <!-- Button to Open the Modal -->
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Open modal
            </button> --}}

            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content" style="background-color: lightpink">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <span class="modal-title text-danger font-weight-bolder"
                                style="font-size: 1.3rem">錯誤訊息</span>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="alert alert-danger">
                                "新密碼" 與" 確認密碼" 不符
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">關閉</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- The Modal -->
        </div>
    </div>

    <script>
        function checkPassword() {
            if ($("#password").val() != $("#password2").val()) {
                $('#myModal').modal('show');
                return false;
            } else {
                return true;
            }
        }

    </script>
</body>

</html>
