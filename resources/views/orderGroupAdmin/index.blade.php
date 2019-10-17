<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>群組列表</title>

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
                <div class="p-3 bg-secondary text-white text-center">群組管理</div>
            {{-- <div class="pt-2 text-center">
                <h5>帳號列表</h5>
            </div> --}}

            <table class="table table-striped table-bordered table-hover">
                <thead class="table-info">
                    <tr>
                        <th width="15%" class="text-center" scope="col">群組編號</th>
                        <th width="15%" class="text-center" scope="col">群組名稱</th>
                        <th width="55%" class="text-center" scope="col">會員姓名 / 身分證字號</th>
                        <td width="15%">
                            <a href="/orderGroupAdmin/create" class="btn btn-sm btn-success"><i class="far fa-plus-square"> </i> 新增</a>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($obj as $item)
                    <tr>
                        <td class=" text-black text-center">
                        {{$item->orderGroupNo}}
                        </td>
                        <td class=" text-black text-center">
                            {{$item->orderGroupName}}
                            </td>
                        <td>
                        @foreach($item->order as $item2)
                            <a href="/orderAdmin/{{$item2->idOrder}}" class="btn btn-outline-primary">{{$item2->memberTwId}} / {{$item2->memberName}}</a>
                        @endforeach
                        </td>
                        <td>
                            <button type="button" class="btn-sm btn-danger" data-toggle="modal"
                                data-target="#exampleModal"><i class="far fa-trash-alt"></i> 撤銷</button>
                        </td>
                    </tr>
                    @endforeach
                    <!-- 撤銷 model跳出 -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="message-text"
                                                class="control-label">確定要撤銷群組資料？</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn-sm btn-info" data-dismiss="modal"><i
                                            class="far fa-plus-square"></i> 返回</button>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-sm btn-danger"><i
                                            class="far fa-trash-alt"></i> 撤銷</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- model結束 -->
                    {{-- <tr>
                        <td width="15%" class=" text-black text-center">55412365456321456</td>
                        <td width="70%">
                            <a href="/orderGroupAdmin/edit" class="btn btn-outline-primary">蔡阿福/ A123456789</a>
                        </td>
                        <td width="15%">
                            <!-- 撤銷 model跳出 -->
                            <button type="button" class="btn-sm btn-danger" data-toggle="modal"
                                data-target="#exampleModal" data-whatever="@mdo"><i class="far fa-trash-alt"></i>
                                撤銷訂單</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="message-text"
                                                        class="control-label">確定要撤銷此筆群組會員資料？</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn-sm btn-info" data-dismiss="modal"><i
                                                    class="far fa-plus-square"></i> 返回操作</button>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-sm btn-danger"><i
                                                    class="far fa-trash-alt"></i>確定撤銷</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- model結束 -->
                        </td>
                    </tr> --}}
                    {{-- <tr>
                        <td widh="15%" class=" text-black text-center">55412365456321456</th>
                        <td width="70%">
                            <a href="/orderGroupAdmin/edit" class="btn btn-outline-primary">蔡阿福/ A123456789</a>
                            <a href="/orderGroupAdmin/edit" class="btn btn-outline-primary">蔡阿福/ A123456789</a>
                            <a href="/orderGroupAdmin/edit" class="btn btn-outline-primary">蔡阿福/ A123456789</a>
                            <a href="/orderGroupAdmin/edit" class="btn btn-outline-primary">蔡阿福/ A123456789</a>
                            <a href="/orderGroupAdmin/edit" class="btn btn-outline-primary">蔡阿福/ A123456789</a>
                            <a href="/orderGroupAdmin/edit" class="btn btn-outline-primary">蔡阿福/ A123456789</a>
                            <a href="/orderGroupAdmin/edit" class="btn btn-outline-primary">蔡阿福/ A123456789</a>
                            <a href="/orderGroupAdmin/edit" class="btn btn-outline-primary">蔡阿福/ A123456789</a>
                            <a href="/orderGroupAdmin/edit" class="btn btn-outline-primary">蔡阿福/ A123456789</a>
                            <a href="/orderGroupAdmin/edit" class="btn btn-outline-primary">蔡阿福/ A123456789</a>
                            <a href="/orderGroupAdmin/edit" class="btn btn-outline-primary">蔡阿福/ A123456789</a>
                            <a href="/orderGroupAdmin/edit" class="btn btn-outline-primary">蔡阿福/ A123456789</a>
                            <a href="/orderGroupAdmin/edit" class="btn btn-outline-primary">蔡阿福/ A123456789</a>
                            <a href="/orderGroupAdmin/edit" class="btn btn-outline-primary">蔡阿福/ A123456789</a>
                            <a href="/orderGroupAdmin/edit" class="btn btn-outline-primary">蔡阿福/ A123456789</a>
                        </td>
                        <td width="15%">
                            <!-- 撤銷 model跳出 -->
                            <button type="button" class="btn-sm btn-danger" data-toggle="modal"
                                data-target="#exampleModal" data-whatever="@mdo"><i class="far fa-trash-alt"></i>
                                撤銷訂單</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>

                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="message-text"
                                                        class="control-label">確定要撤銷此筆群組會員資料？</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn-sm btn-info" data-dismiss="modal"><i
                                                    class="far fa-plus-square"></i> 返回操作</button>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-sm btn-danger"><i
                                                    class="far fa-trash-alt"></i>確定撤銷</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- model結束 -->
                        </td>
                    </tr>  --}}
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
        //     $("#pageList").append("<a href='/orderGroupAdmin/" + (page - 2) * 10 + "'>上一頁</a>");
        // for (i = 1; i <= numPage; i++) {
        //     if (i == page)
        //         $("#pageList").append("&nbsp;&nbsp;&nbsp;" + i);
        //     else
        //         $("#pageList").append("&nbsp;&nbsp; <a href='/orderGroupAdmin/" + (i - 1) * 10 + "'>" + i +
        //             "</a>");
        // }
        // if (page < numPage)
        //     $("#pageList").append("&nbsp;&nbsp; <a href='/orderGroupAdmin/" + page * 10 + "'>下一頁</a>");

        $("#pageList").append("<div class='btn-group btn-group-sm'>");
        if (page > 1)
            $("#pageList").append("<a class='btn btn-sm btn-secondary' role='button' href='/orderGroupAdmin/" + (page - 2) * 10 + "'>上一頁</a>");
        for (i = 1; i <= numPage; i++) {
            if (i == page)
                $("#pageList").append("<a class='btn btn-sm btn-outline-primary' role='button' href='#'>&nbsp;" + i + "&nbsp;</a>");
            else
                $("#pageList").append("<a class='btn btn-sm btn-primary' role='button' href='/orderGroupAdmin/" + (i - 1) * 10 + "'>&nbsp;" + i + "&nbsp;</a>");
        }
        if (page < numPage)
            $("#pageList").append("<a class='btn btn-sm btn-secondary' role='button' href='/orderGroupAdmin/" + page * 10 + "'>下一頁</a>"); $("#pageList").append("</div>");
    </script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous">
            </script>
</body>

</html>