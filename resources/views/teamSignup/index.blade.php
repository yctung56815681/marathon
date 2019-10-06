<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="{{ URL::asset('signupCSS/signup.css') }}" rel="stylesheet" />

</head>

<body>
    <!-- {{------------------------------------------Modal----------------------------------------------------}} -->
    <div id="checkRegex" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: yellow; border-radius: 0 25%;">
                <div class="modal-header">
                    <h5 class="modal-title"></h5><i class="fas fa-exclamation-circle fa-8x" style="margin: 0 auto"></i>
                    </h5>
                </div>
                <div class="modal-body" style="font-size: 2em; text-align: center">
                    <p class="checkRegex"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row" style="flex-direction:row-reverse">
            <!-- {{------------------------------------------Nav----------------------------------------------------}} -->
            <div class="col-md-12 navList">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#" style="color: red">III Marathon</a>
                    <!-- {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button> --}} -->
                    <!-- {{-- <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                                <ul class="navbar-nav ">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                            </div> --}} -->
                </nav>
            </div>

            <!-- {{------------------------------------------header圖片----------------------------------------------------}} -->
            <div class="col-md-12 header">
                <img src="{{ URL::asset("img/{$city}{$year}{$month}.jpg") }}" class="img-fluid" alt="Responsive image">
            </div>
            <!-- {{------------------------------------------倒數計時----------------------------------------------------}} -->
            <div class="col-md-2 countDown">這是倒數計時</div>
            <!-- {{------------------------------------------報名資料----------------------------------------------------}} -->
            <div class="col-md-10 content">
                <form name="memberForm">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div id="group1">
                                    <div class="row d-flex justify-content-between schedule">
                                        <div>
                                            <button class="action" disabled="disabled">團員資料</button>
                                        </div>
                                        <div>
                                            <button disabled="disabled">付款明細</button>
                                        </div>
                                        <div>
                                            <button disabled="disabled">完成報名</button>
                                        </div>
                                    </div>
                                    <!-- 團隊明細 -->
                                    <div id="title0" class="title"><i class="fas fa-dot-circle"></i>團隊明細
                                        <hr>
                                        <div id="teamArray" class="col-md-6 mb-3 " style="margin: 0 auto">

                                        </div>

                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div>
                                            <input type="text" class="myInput myButton" name="teamName" id="teamName"
                                                placeholder="請輸入團隊名稱">
                                        </div>
                                        <div class="btn-group myButton">
                                            <div><input class="btn-primary myInput" type="button" value="下一步取單"
                                                    onclick="goGroup2(); teamFormData()">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 個人資料輸入 -->
                                    <div id="title1" class="title"><i class="fas fa-dot-circle"></i>個人資料
                                        <hr>
                                    </div>
                                    <div id="personalData">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="myName">姓名</label>
                                                <input type="text" class="form-control myInput" name="myName"
                                                    id="myName" placeholder="請輸入姓名">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="name">身分證</label>
                                                <input type="text" class="form-control myInput" name="twId" id="twId"
                                                    placeholder="請輸入身分證">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="name">性別</label>
                                                <div class="d-flex justify-content-start">
                                                    <input type="radio" class="form-control myInput" name="sex"
                                                        value="male">男
                                                    <input type="radio" class="form-control myInput" name="sex"
                                                        value="female">女
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-2 mb-3">
                                                <label for="year">年</label>
                                                <input type="text" class="form-control myInput" name="year" id="year"
                                                    placeholder="請輸入出生民國年分">
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="month">月</label>
                                                <input type="text" class="form-control myInput" name="month" id="month"
                                                    placeholder=" 請輸入出生月份">
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="day">日</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control myInput" name="day" id="day"
                                                        placeholder="請輸入出生日">
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="email">信箱</label>
                                                <input type="text" class="form-control myInput" name="email" id="email"
                                                    placeholder="請輸入信箱">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="cellPhone">電話</label>
                                                <input type="text" class="form-control myInput" name="cellPhone"
                                                    id="cellPhone" placeholder="請輸入電話">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="city">城市</label>
                                                <input type="text" class="form-control myInput" name="city" id="city"
                                                    placeholder="請輸入城市">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="town">鄉鎮</label>
                                                <input type="text" class="form-control myInput" name="town" id="town"
                                                    placeholder="請輸入鄉鎮">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="address">地址</label>
                                                <input type="text" class="form-control myInput" name="address"
                                                    id="address" placeholder="請輸入居住地址">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-5 mb-3">
                                                <label for="emName">姓名</label>
                                                <input type="text" class="form-control myInput" name="emName"
                                                    id="emName" placeholder="請輸入緊急聯絡人姓名">
                                            </div>
                                            <div class="col-md-5 mb-3">
                                                <label for="emCellphone">電話</label>
                                                <input type="text" class="form-control myInput" name="emCellphone"
                                                    id="emCellphone" placeholder="請輸入緊急聯絡人電話">
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="emRelationship">關係</label>
                                                <input type="text" class="form-control myInput" name="emRelationship"
                                                    id="emRelationship" placeholder="請輸入關係">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- 報名項目選擇 -->
                                    <div id="title2" class="title"><i class="fas fa-dot-circle"></i>報名項目
                                        <hr>
                                    </div>
                                    <div id="signupOp">
                                        <div class="row radio d-flex justify-content-between">
                                            <div class=""><input type="radio" name="km" value="5K超值健康組">5K超值健康組</div>
                                            <div class="">NT$800</div>
                                        </div>
                                        <div class="row radio d-flex justify-content-between">
                                            <div class=""><input type="radio" name="km" value="5K豪華健康組">5K豪華健康組</div>
                                            <div class="">NT$1400</div>
                                        </div>
                                        <div class="row radio d-flex justify-content-between">
                                            <div class=""><input type="radio" name="km" value="10K超值路跑組">10K超值路跑組</div>
                                            <div class="">NT$900</div>
                                        </div>
                                        <div class="row radio d-flex justify-content-between">
                                            <div class=""><input type="radio" name="km" value="10K豪華路跑組">10K豪華路跑組</div>
                                            <div class="">NT$1500</div>
                                        </div>
                                        <div class="row radio d-flex justify-content-between">
                                            <div class=""><input type="radio" name="km" value="21K超值半馬組">21K超值半馬組</div>
                                            <div class="">NT$1000</div>
                                        </div>
                                        <div class="row radio d-flex justify-content-between">
                                            <div class=""><input type="radio" name="km" value="21K豪華半馬組">21K豪華半馬組</div>
                                            <div class="">NT$1600</div>
                                        </div>
                                    </div>

                                    <!-- 加購項目 -->
                                    <div id="title3" class="title"><i class="fas fa-dot-circle"></i>加購項目
                                        <hr>
                                    </div>
                                    <div id="addPurchase">
                                        <div class="row d-flex justify-content-between">
                                            <div><input type="checkbox" name="product[]" value="國旗競速路跑鞋-自由藍">國旗競速路跑鞋-自由藍
                                            </div>
                                            <div>NT$1580</div>
                                        </div>
                                        <div class="row d-flex justify-content-between">
                                            <div><input type="checkbox" name="product[]" value="國旗競速路跑鞋-奔放紅">國旗競速路跑鞋-奔放紅
                                            </div>
                                            <div>NT$1580</div>
                                        </div>
                                        <div class="row d-flex justify-content-between">
                                            <div><input type="checkbox" name="product[]"
                                                    value="男子減震慢跑麒麟鞋-雷電金">男子減震慢跑麒麟鞋-雷電金
                                            </div>
                                            <div>NT$1580</div>
                                        </div>
                                        <div class="row d-flex justify-content-between">
                                            <div><input type="checkbox" name="product[]"
                                                    value="女子減震慢跑麒麟鞋-火焰紅">女子減震慢跑麒麟鞋-火焰紅
                                            </div>
                                            <div>NT$1580</div>
                                        </div>
                                        <div class="row d-flex justify-content-between">
                                            <div><input type="checkbox" name="product[]" value="經典漸層雲豹排汗衫">經典漸層雲豹排汗衫
                                            </div>
                                            <div>NT$590</div>
                                        </div>
                                        <div class="row d-flex justify-content-between">
                                            <div><input type="checkbox" name="product[]" value="炫彩雲豹排汗衫">炫彩雲豹排汗衫
                                            </div>
                                            <div>NT$590</div>
                                        </div>
                                        <div class="row d-flex justify-content-between">
                                            <div><input type="checkbox" name="product[]" value="男款排汗短袖紀念衣">男款排汗短袖紀念衣
                                            </div>
                                            <div>NT$390</div>
                                        </div>
                                    </div>
                                    <div class="btn-group d-flex justify-content-center myButton">
                                        <div><a href={{"/signup/{$city}/{$year}/{$month}/index"}}><input
                                                    class="btn btn-primary myInput" type="button" value="報名首頁"></a>
                                        </div>
                                        <div><input class="btn btn-primary myInput" type="reset" value="新增團員"
                                                onclick="person(); createPerson(); "></div>
                                    </div>
                                </div>
                                <div id="group2" style="display:none">
                                    <div class="row d-flex justify-content-between schedule">
                                        <div>
                                            <button class="action" disabled="disabled">團員資料</button>
                                        </div>
                                        <div>
                                            <button class="action" disabled="disabled">付款明細</button>
                                        </div>
                                        <div>
                                            <button disabled="disabled">完成報名</button>
                                        </div>
                                    </div>
                                    <div id="title4" class="title"><i class="fas fa-dot-circle"></i>報名明細
                                        <hr>
                                    </div>
                                    <div id="signupDetails">
                                        <table class="table table-striped">
                                            <tbody id="teamMember">
                                            </tbody>
                                        </table>

                                    </div>
                                    <div id="title5" class="title"><i class="fas fa-dot-circle"></i>費用明細
                                        <hr>
                                    </div>
                                    <div id="moneyDetails">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <th>訂單編號</th>
                                                    <td id="random"></td>
                                                </tr>
                                                <tr>
                                                    <th>報名費</th>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <th>加購</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>總計</th>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div id="title6" class="title"><i class="fas fa-dot-circle"></i>繳費方式
                                        <hr>
                                    </div>
                                    <div id="payMethod">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <div><input type="radio" name="pay" value="711">7-11/ibon</div>
                                                    <div><input type="radio" name="pay" value="famiPort">全家/FamiPort
                                                    </div>
                                                    <div><input type="radio" name="pay" value="atm">ATM轉帳</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group d-flex justify-content-center myButton">
                                        <div><input class="btn btn-primary" type="button" value="報名資料"
                                                onclick="goGroup1()">
                                        </div>
                                        <div><a href={{"/teamSignup/{$city}/{$year}/{$month}/finish"}}><input
                                                    class="btn btn-primary" type="button" value="確認訂單"
                                                    onclick="myData()"></a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script>
        //欄位隱藏、展開
        document.getElementById("title1").addEventListener("click", function () {
            $("#personalData").toggle();
        })
        document.getElementById("title2").addEventListener("click", function () {
            $("#signupOp").toggle();
        })
        document.getElementById("title3").addEventListener("click", function () {
            $("#addPurchase").toggle();
        })
        document.getElementById("title4").addEventListener("click", function () {
            $("#signupDetails").toggle();
        })
        document.getElementById("title5").addEventListener("click", function () {
            $("#moneyDetails").toggle();
        })
        document.getElementById("title6").addEventListener("click", function () {
            $("#payMethod").toggle();
        })
        //換頁效果
        function goGroup1() {
            $("#group1").attr("style", "display:block");
            $("#group2").attr("style", "display:none");
        }

        function goGroup2() {
            $("#group1").attr("style", "display:none");
            $("#group2").attr("style", "display:block");
        }
        //檢查個人資料輸入欄位
        function check_data() {
            var twIdRegex = new RegExp(/^[A-Za-z][12]\d{8}$/);
            var phoneRegex = new RegExp(/^09[0-9]{8}$/);
            if (document.memberForm.name.value.length == 0) {
                $('#checkRegex').modal('show');
                $(".checkRegex").text("請輸入姓名");
                return goGroup1();
            }
            if (document.memberForm.twId.value != document.memberForm.twId.value.match(twIdRegex)) {
                $('#checkRegex').modal('show');
                $(".checkRegex").text("請輸入正確的身分證格式");
                return goGroup1();
            }
            var sex = $("input[name=sex]:checked").length;
            if (sex == 0) {
                $('#checkRegex').modal('show');
                $(".checkRegex").text("請選擇您的性別");
                return goGroup1();
            }
            if (document.memberForm.year.value.length == 0 | document.memberForm.year.value.length > 3 | document
                .memberForm.year.value > 108) {
                $('#checkRegex').modal('show');
                $(".checkRegex").text("請輸入正確的年份");
                return goGroup1();
            }
            if (document.memberForm.month.value > 12 | document.memberForm.month.value < 1) {
                $('#checkRegex').modal('show');
                $(".checkRegex").text("請輸入正確的月份");
                return goGroup1();
            }
            if (document.memberForm.day.value == 2 & document.memberForm.day.value > 29) {
                $('#checkRegex').modal('show');
                $(".checkRegex").text("二月最多29天");
                return goGroup1();
            }
            if (document.memberForm.month.value == 4 | document.memberForm.month.value == 6 | document.memberForm.month
                .value == 9 | document.memberForm.month.value == 11) {
                if (document.memberForm.day.value > 30) {
                    $('#checkRegex').modal('show');
                    $(".checkRegex").text("4月、六月、9月、11月只有30天");
                    return goGroup1();
                }
            } else {
                if (document.memberForm.day.value > 31) {
                    $('#checkRegex').modal('show');
                    $(".checkRegex").text("1月、3月、5月、7月、8月、10月、12月只有31天");
                    return goGroup1();
                }
            }
            if (document.memberForm.day.value > 31 | document.memberForm.day.value < 1) {
                $('#checkRegex').modal('show');
                $(".checkRegex").text("請輸入正確的出生日");
                return goGroup1();
            }
            if (document.memberForm.cellPhone.value != document.memberForm.cellPhone.value.match(phoneRegex)) {
                $('#checkRegex').modal('show');
                $(".checkRegex").text("請輸入臺灣的手機號碼");
                return goGroup1();
            }
            if (document.memberForm.emName.value.length == 0) {
                $('#checkRegex').modal('show');
                $(".checkRegex").text("請輸入緊急聯絡人姓名");
                return goGroup1();
            }
            if (document.memberForm.emCellphone.value != document.memberForm.emCellphone.value.match(phoneRegex)) {
                $('#checkRegex').modal('show');
                $(".checkRegex").text("請輸入臺灣的手機號碼");
                return goGroup1();
            }
            var km = $("input[name=km]:checked").length;
            if (km == 0) {
                $('#checkRegex').modal('show');
                $(".checkRegex").text("請選擇要報名的賽事");
                return goGroup1();
            }

            // memberForm.submit();
        }

        //根據時間產生訂單號

        var random_no = "";
        for (var i = 0; i < 4; i++) //j位隨機數，用以加在時間戳後面。
        {
            random_no += Math.floor(Math.random() * 10);
        }
        var today = new Date();
        var random_no = today.getTime() + random_no;
        console.log(random_no);
        $("#random").text(random_no);


        var teams = new Array();
        var team = new Object();
        //新增資料
        function person() {
            var product = [$('input:checkbox:checked[name="product[]"]').map(function () {
                return $(this).val();
            }).get()];
            // console.log(product);
            var teams = [
                teamName = {
                    "teamName": $("#teamName").val()
                },
                team = {
                    "name": $("#myName").val(),
                    "twid": $("#twId").val(),
                    "sex": $("input[name=sex]:checked").val(),
                    "year": $("#year").val(),
                    "month": $("#month").val(),
                    "day": $("#day").val(),
                    "city": $("#city").val(),
                    "town": $("#town").val(),
                    "address": $("#address").val(),
                    "email": $("#email").val(),
                    "cellPhone": $("#cellPhone").val(),
                    "emName": $("#emName").val(),
                    "emRelationship": $("#emRelationship").val(),
                    "emCellphone": $("#emCellphone").val(),
                    "km": $("input[name=km]:checked").val(),
                    "product": product
                }
            ];
            console.log(teamName);
            console.log(team);
        }

        //資料放入陣列
        function createPerson() {
            teams.push(team);
            console.log(teams);
            i = teams.length;
            $("#teamArray").append('<div id=person' + i + ' class="row d-flex justify-content-between schedule "> ' +
                '<button type="button">' + team.name +
                '</button><button type="button" onclick="deletePerson(' + i +
                ')"><i class="fas fa-trash-alt"></i></button></div>'
            );
        }

        //取得團體報名資料
        function teamFormData() {
            $("#teamMember").empty();
            for (i = 0; i < teams.length; i++) {
                team = teams[i];
                var myName = team.name;
                var km = team.km;
                var myProduct = team.product;
                console.log(myName);
                console.log(km);
                console.log(myProduct);

                $("#teamMember").append(
                    '<tr class="d-flex justify-content-between">' +
                    "<th> 姓名 </th>" +
                    "<td>" + myName + "</td>" +
                    "</tr>" +
                    '<tr class="d-flex justify-content-between">' +
                    "<th>報名項目</th>" +
                    "<td>" + km + "</td>" +
                    "</tr>" +
                    '<tr class="d-flex justify-content-between">' +
                    "<th>加購項目</th>" +
                    "<td>" + myProduct + "</td>" +
                    "</tr>"
                );
                console.log(myName);
            }

        }

        //刪除個人資料
        function deletePerson(i) {
            $("#person" + i).remove();
            teams.splice("team" + i, 1);
            console.log(i);
        }
        //顯示個人資料
        function showPerson(i) {}

        //ajax
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function myData() {
            $(document).ready(function () {
                for (i = 0; i < teams.length; i++) {
                    team = teams[i];
                    var myName = team.name;
                    console.log(myName);

                    $.ajax({
                        type: "POST",
                        url: "/memberAdmin",
                        data: {
                            name: myName,

                        }
                    });
                }
            });
        }

    </script>

    <!-- {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script> --}} -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
