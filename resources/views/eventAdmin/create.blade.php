<!DOCTYPE html>
<html lang="en">

        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>首頁</title>

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

        <div class="Right col-10" id="rightFunction">
                <form method="post" action="/eventAdmin" class="form-horizontal">
                    @csrf

                    <div id="eventBag">

                    賽事活動名稱

                    <input id="" name="eventTittle" class="form-control col-8" type="text">
                    <br>
                    活動舉辦城市
                    <br>
                    <select id="" name="cityid" class="form-control col-8">
                            <option value="1">台北</option>
                            <option value="2">新北</option>
                            <option value="3">基隆</option>
                            <option value="4">桃園</option>
                            <option value="5">新竹</option>
                            <option value="6">苗栗</option>
                            <option value="7">台中</option>
                            <option value="8">彰化</option>
                            <option value="9">南投</option>
                            <option value="10">雲林</option>
                            <option value="11">嘉義</option>
                            <option value="12">台南</option>
                            <option value="13">高雄</option>
                            <option value="14">屏東</option>
                            <option value="15">宜蘭</option>
                            <option value="16">花蓮</option>
                            <option value="17">台東</option>
                            <option value="18">澎湖</option>
                            <option value="19">金門</option>
                            <option value="20">連江</option>
                            </select>
                    <br>
                    賽事活動地點
                    <input id="" name="eventAddr" class="form-control col-8" type="text">
                    <br>
                    賽事規格-報名名稱-定價
                    <br>
                    <div >
                        <br>
                        長程賽事名稱 : <input id="" name="runNameL" type="text"> -- 長程賽事里程 : <input id="" name="runNameLongL" style="text-align:right" type="text"> km -- 長程報名價格 : <input id="" name="runPriceL" style="text-align:right" type="text"> 元
                        <br>
                        中程賽事名稱 : <input id="" name="runNameM" type="text"> -- 中程賽事里程 : <input id="" name="runNameLongM" style="text-align:right" type="text"> km -- 中程報名價格 : <input id="" name="runPriceM" style="text-align:right" type="text"> 元
                        <br>
                        短程賽事名稱 : <input id="" name="runNameS" type="text"> -- 短程賽事里程 : <input id="" name="runNameLongS" style="text-align:right" type="text"> km -- 短程報名價格 : <input id="" name="runPriceS" style="text-align:right" type="text"> 元
                        <br>
                    </div>
                    <br>
                    <br>
                    賽事主視覺圖片
                    <br>
                    <hr>
                <input id="" name="eventImage"  type="file">
                    <hr>


                    <br>

                    活動報名開始時間
                    <input name="eventSignupStartTime" class="form-control col-6" type="datetime-local">
                    {{-- <p id="eventSignupStartTimeparse" name="eventSignupStartTimeparse"></p> --}}
                    <br>
                    活動報名截止時間
                    <input name="eventSignupEndTime" class="form-control col-6" type="datetime-local">
                    <br>
                    賽事活動開始時間
                    <input name="eventRunStartTime" class="form-control col-6" type="datetime-local">
                    <br>
                    賽事活動終止時間
                    <input name="eventRunEndTime" class="form-control col-6" type="datetime-local">

                    <br>
                    主辦連絡電話
                    <input id="" name="eventTel"class="form-control col-2" type="text">
                    <hr>
                    <hr>
                    <br>
                    最新消息-圖片
                    <br>
                    <input id="" name="eventNewsImage" type="file">
                    <hr>
                    <br>
                    最新消息-團體報名
                    <textarea id="" name="eventNewstext1" class="form-control col-8"  cols="30" rows="10"></textarea>
                    <br>
                    最新消息-個人報名
                    <textarea id="" name="eventNewstext2" class="form-control col-8"  cols="30" rows="10"></textarea>
                    <hr>
                    <hr>
                    <br>
                    報名辦法-圖片
                    <br>
                    <input id="" name="eventMethodImage" value="" type="file">
                    <hr>
                    <br>
                    報名辦法-報名方式
                    <textarea id="" name="eventMethodtext1" class="form-control col-8"  cols="30" rows="10"></textarea>
                    <br>
                    報名辦法-退費辦法
                    <textarea id="" name="eventMethodtext2" class="form-control col-8"  cols="30" rows="10"></textarea>
                    <hr>
                    <hr>
                    <br>
                    競賽獎勵-圖片
                    <br>
                    <input id="" name="eventRaceImage" type="file">
                    <hr>
                    <br>
                    競賽獎勵-報名方式
                    <textarea id="" name="eventRacetext1" class="form-control col-8"  cols="30" rows="10"></textarea>
                    <br>
                    競賽獎勵-退費辦法
                    <textarea id="" name="eventRacetext2" class="form-control col-8"  cols="30" rows="10"></textarea>
                    <hr>
                    <hr>
                    活動規範-圖片
                    <br>
                    <input id="" name="eventRuleImage" type="file">
                    <hr>
                    <br>
                    活動規範-規則限制
                    <textarea id="" name="eventRuletext1" class="form-control col-8"  cols="30" rows="10"></textarea>
                    <br>
                    活動規範-違規罰則
                    <textarea id="" name="eventRuletext2" class="form-control col-8"  cols="30" rows="10"></textarea>
                    <br>
                    <hr>



                    <hr>
                    {{-- <textarea name="editor1" id="editor"></textarea> --}}
                    <br>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="okOrCancel"></label>
                        <div class="col-md-8">
                            <button type="submit" name="okOrCancel" class="btn btn-success">確認新增</button>
                            <button type="reset" id="okOrCancel"  onclick="window.history.back(-1)" name="okOrCancel" class="btn btn-danger">取消新增</button>
                        </div>
                    </div>
                </form>





            </div>
            {{-- <div>
                <button onclick="getD()">GETD</button>
            </div> --}}
            {{-- <div class="form-group">
                <label class="col-md-4 control-label" for="okOrCancel"></label>
                <div class="col-md-8">
                <button  name="okOrCancel" class="btn btn-success">確認新增</button>
                <button  id="okOrCancel" name="okOrCancel" class="btn btn-danger">取消新增</button>
                </div>
            </div> --}}




        </div>



    {{-- <script>
        function getD(){

            console.log(document.getElementById('imgfile').value);
            console.log(typeof(document.getElementById('imgfile').value));

            }

    </script> --}}
    <script>

    </script>

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