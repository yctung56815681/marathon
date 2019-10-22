<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>帳號列表</title>

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
            {{-- <div class="row"> --}}
            <div class="p-3 bg-secondary text-white text-center">帳號列表</div>
            {{-- <div class="pt-2 text-center">
                <h5>帳號列表</h5>
            </div> --}}

            <table class="table table-striped table-bordered table-hover">
                <thead class="table-info">
                    <tr>
                        <th scope="col" class="text-nowrap">帳號</th>
                        {{-- <th scope="col" class="text-nowrap">密碼</th> --}}
                        <th style="width:160px"><a class="btn btn-sm btn-success" role="button" href="/accountAdmin/create"><i class="far fa-plus-square"></i> 新增</a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($account as $item)
                    <tr>
                        <td>{{$item->username}}</td>
                        {{-- <td>{{$item->password}}</td> --}}
                        <td>
                            <a class="btn btn-sm btn-info" role="button" href="/accountAdmin/{{$item->idAccount}}/edit"><i class="far fa-edit"></i> 編輯</a>
                            {{-- @method("DELETE")
                            <button type="submit" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> 刪除</button> --}}
                            <button type="button" class="btn btn-sm btn-danger" onclick="$('#myModal{{$item->idAccount}}').modal('show');"><i class="far fa-trash-alt"></i> 刪除</button>

                            <!-- The Modal -->
                            <div class="modal fade" id="myModal{{$item->idAccount}}">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="background-color: lightyellow">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <span class="modal-title text-warning font-weight-bolder"
                                                style="font-size: 1.3rem">提示訊息</span>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="alert alert-warning">
                                                確定要刪除帳號？
                                            </div>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <form method="post" action="/accountAdmin/{{$item->idAccount}}">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> 刪除</button>
                                                <button type="button" class="btn btn-sm btn-info" data-dismiss="modal">返回</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- The Modal -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <caption id="pageList" class="text-center"></caption>
            </table>
            {{-- </div> --}}
        </div>
    </div>

    <script>
        var numRow = 10;
        var numPage = Math.ceil({{$num}} / numRow);
        var page = Math.floor({{$id}} / numRow) + 1;

        // if (page > 1)
        //     $("#pageList").append("<a href='/accountAdmin/" + (page - 2) * 10 + "'>上一頁</a>");
        // for (i = 1; i <= numPage; i++) {
        //     if (i == page)
        //         $("#pageList").append("&nbsp;&nbsp;&nbsp;" + i);
        //     else
        //         $("#pageList").append("&nbsp;&nbsp; <a href='/accountAdmin/" + (i - 1) * 10 + "'>" + i +
        //             "</a>");
        // }
        // if (page < numPage)
        //     $("#pageList").append("&nbsp;&nbsp; <a href='/accountAdmin/" + page * 10 + "'>下一頁</a>");

        $("#pageList").append("<div class='btn-group btn-group-sm'>");
        if (page > 1)
            $("#pageList").append("<a class='btn btn-sm btn-secondary' role='button' href='/accountAdmin/" + (page - 2) * 10 + "'>上一頁</a>");
        for (i = 1; i <= numPage; i++) {
            if (i == page)
                $("#pageList").append("<a class='btn btn-sm btn-outline-primary' role='button' href='#'>&nbsp;" + i + "&nbsp;</a>");
            else
                $("#pageList").append("<a class='btn btn-sm btn-primary' role='button' href='/accountAdmin/" + (i - 1) * 10 + "'>&nbsp;" + i + "&nbsp;</a>");
        }
        if (page < numPage)
            $("#pageList").append("<a class='btn btn-sm btn-secondary' role='button' href='/accountAdmin/" + page * 10 + "'>下一頁</a>"); $("#pageList").append("</div>");
    </script>
</body>

</html>
