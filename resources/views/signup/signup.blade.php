<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>報名資料</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="{{ URL::asset('signupCSS/signup.css') }}" rel="stylesheet" />
</head>

<body>
    {{------------------------------------------Modal1----------------------------------------------------}}
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
    {{------------------------------------------Modal2----------------------------------------------------}}
    <div id="waiting" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 0 25%;">
                <div class="modal-body" style="font-size: 2em; text-align: center">
                    <p><i class="fas fa-spinner fa-pulse fa-6x"></i></p>
                </div>
            </div>
        </div>
    </div>
    {{------------------------------------------Modal3----------------------------------------------------}}
    <div id="showImg" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 0 25%;">
                <div class="modal-body" style="font-size: 2em; text-align: center">
                    <p class="showImg"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fulid">
        <div class="row" style="flex-direction:row-reverse">
            {{------------------------------------------Nav----------------------------------------------------}}
            <div class="col-md-12 navList">
                <nav class="navbar navbar-expand-lg navbar-light navbg">
                    <a class="navbar-brand" href="#" style="color: white; font-size: 22px">運動報名網</a>
                </nav>
            </div>
            {{------------------------------------------header圖片----------------------------------------------------}}
            <div class="header">
                <img src="{{ URL::asset("img/{$city}{$year}{$month}.jpg") }}" class="img-fluid" alt="Responsive image">
            </div>
            {{------------------------------------------倒數計時----------------------------------------------------}}
            {{-- <div class="col-md-2 countDown">這是倒數計時</div> --}}
            {{------------------------------------------報名資料----------------------------------------------------}}
            <div class="col-md-12 content">
                {{-- action="/memberAdmin" --}}
                <form name="memberForm">
                    {{-- @csrf --}}
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div id="group1">
                                    <div class="row d-flex justify-content-between schedule">
                                        <div>
                                            <button class="action" disabled="disabled">個人資料</button>
                                        </div>
                                        <div>
                                            <button disabled="disabled">付款明細</button>
                                        </div>
                                        <div>
                                            <button disabled="disabled">完成報名</button>
                                        </div>
                                    </div>
                                    <!-- 個人資料輸入 -->
                                    <div id="title1" class="title"><i class="fas fa-dot-circle"></i>個人資料
                                        <hr>
                                    </div>
                                    <div id="personalData">
                                        <input type="hidden" name="eventCity" id="eventCity" value="{{$city}}">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="name">姓名</label>
                                                <input type="text" class="form-control myInput" name="name" id="name"
                                                    placeholder="請輸入姓名" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="name">身分證</label>
                                                <input type="text" class="form-control myInput" name="twId" id="twId"
                                                    placeholder="請輸入身分證" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="name">性別</label>
                                                <div class="d-flex justify-content-start myInput myRadio">
                                                    <input type="radio" class="form-control" name="sex" value="男"><span
                                                        class="myText">男</span>
                                                    <input type="radio" class="form-control" name="sex" value="女"><span
                                                        class="myText">女</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-2 mb-3">
                                                <label for="year">年</label>
                                                <input type="text" class="form-control myInput" name="year" id="year"
                                                    placeholder="請輸入出生民國年分" required>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="month">月</label>
                                                <input type="text" class="form-control myInput" name="month" id="month"
                                                    placeholder=" 請輸入出生月份" required>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="day">日</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control myInput" name="day" id="day"
                                                        placeholder="請輸入出生日" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="email">信箱</label>
                                                <input type="text" class="form-control myInput" name="email" id="email"
                                                    placeholder="請輸入信箱" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="cellPhone">電話</label>
                                                <input type="text" class="form-control myInput" name="cellPhone"
                                                    id="cellPhone" placeholder="請輸入電話" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="city">城市</label>
                                                <input type="text" class="form-control myInput" name="city" id="city"
                                                    placeholder="請輸入城市" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="town">鄉鎮</label>
                                                <input type="text" class="form-control myInput" name="town" id="town"
                                                    placeholder="請輸入鄉鎮" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="address">地址</label>
                                                <input type="text" class="form-control myInput" name="address"
                                                    id="address" placeholder="請輸入居住地址" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-5 mb-3">
                                                <label for="emName">姓名</label>
                                                <input type="text" class="form-control myInput" name="emName"
                                                    id="emName" placeholder="請輸入緊急聯絡人姓名" required>
                                            </div>
                                            <div class="col-md-5 mb-3">
                                                <label for="emCellphone">電話</label>
                                                <input type="text" class="form-control myInput" name="emCellphone"
                                                    id="emCellphone" placeholder="請輸入緊急聯絡人電話" required>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="emRelationship">關係</label>
                                                <input type="text" class="form-control myInput" name="emRelationship"
                                                    id="emRelationship" placeholder="請輸入關係" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 報名項目選擇 -->
                                    <div id="title2" class="title"><i class="fas fa-dot-circle"></i>報名項目
                                        <hr>
                                    </div>
                                    <div id="signupOp">
                                    </div>
                                    <!-- 加購項目 -->
                                    <div id="title3" class="title"><i class="fas fa-dot-circle"></i>加購項目
                                        <hr>
                                    </div>
                                    <div id="addPurchase">
                                    </div>

                                    <div class="btn-group d-flex justify-content-center myButton">
                                        <div><a href={{"/signup/{$city}/{$year}/{$month}/index"}}><input
                                                    class="btn btn-primary" type="button" value="報名首頁"></a>
                                        </div>
                                        <div><input class="btn btn-primary" type="button" value="送出資料"
                                                onclick="goGroup2(); processFormData(); check_data();"></div>
                                    </div>
                                </div>
                                <div id="group2" style="display:none">
                                    <div class="row d-flex justify-content-between schedule">
                                        <div>
                                            <button class="action" disabled="disabled">個人資料</button>
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
                                            <tbody>
                                                <tr>
                                                    <th>姓名</th>
                                                    <td id="addName"></td>
                                                </tr>
                                                <tr>
                                                    <th>報名項目</th>
                                                    <td id="addKm"></td>

                                                </tr>
                                                <tr>
                                                    <th>身分證</th>
                                                    <td id="addTwId"></td>
                                                </tr>
                                                <tr>
                                                    <th>電話</th>
                                                    <td id="addCellPhone"></td>
                                                </tr>
                                                <tr>
                                                    <th>加購項目</th>
                                                    <td id="addProduct"></td>
                                                </tr>
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
                                                    <td id="orderNumber"></td>
                                                </tr>
                                                <tr>
                                                    <th>報名費</th>
                                                    <td id="kmPrice"></td>

                                                </tr>
                                                <tr>
                                                    <th>加購</th>
                                                    <td id="productPrice"></td>
                                                </tr>
                                                <tr>
                                                    <th>總計</th>
                                                    <td id="total"></td>
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
                                        <div><a href={{"/signup/{$city}/{$year}/{$month}/finish"}}><input
                                                    class="btn btn-primary" type="button" value="確認訂單"
                                                    onclick="waiting();"></a>
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
        //取得個人報名資料
        function processFormData() {
            var name = $('input[name="name"]').val(); //姓名
            $("#addName").text(name);
            var twId = $('input[name="twId"]').val(); //身分證
            $("#addTwId").text(twId);
            var cellPhone = $('input[name="cellPhone"]').val(); //電話
            $("#addCellPhone").text(cellPhone);
            //賽事
            var runMoney = 0;
            var km = $('input:radio:checked[name="km"]').val();
            runs.forEach(function (run) {
                if (run.idRun == km) {
                    runMoney = run.runPrice;
                    $("#addKm").text(run.runNameLong);
                    $("#kmPrice").text(run.runPrice + "元");
                }
            })
            //加購項目
            var productMoney = 0;
            var product = [$('input:checkbox:checked[name="product[]"]').map(function () {
                return $(this).val();
            }).get()];
            var str = String(product);
            console.log(str);
            // console.log(product.length);
            // console.log(Object.keys(product).length);
            // console.log(products);

            // product.forEach(function (add) {
            //     console.log(add);
            $("#addProduct").empty();
            var addPrice = 0;
            var totalPrice = 0;
            products.forEach(function (add) {
                if (str.includes(add.idProduct + '')) {
                    console.log(add);
                    $("#addProduct").append("<td>");
                    $("#addProduct").append(add.productName + "<br>");
                    $("#addProduct").append("</td>");
                    addPrice = add.productPrice + addPrice;
                    $("#productPrice").text(addPrice + "元");
                }
            })
            var totalPrice = runMoney + addPrice + "元";
            $("#total").text(totalPrice);
        }
        //根據時間產生訂單號
        var orderNumber = "";
        for (var i = 0; i < 2; i++) //j位隨機數，用以加在時間戳後面。
        {
            orderNumber += Math.floor(Math.random() * 10);
        }
        var today = new Date();
        var orderNumber = "P" + today.getTime() + orderNumber;
        console.log(orderNumber);
        $("#orderNumber").text(orderNumber);

        //確認訂單之後
        function waiting() {
            event.preventDefault();
            var pay = $("input[name=pay]:checked").length;
            if (pay == 0) {
                $('#checkRegex').modal('show');
                $(".checkRegex").text("請選擇付款方式");
                return goGroup2();
            } else {
                $('#waiting').modal('show');
                setTimeout("window.location.assign('finish')", 3000);
            }
            myData();
        }
        //查看加購商品圖片
        // var el = document.getElementById("product0");
        // if(el) {
        //     el.addEventListener("click", function () {
        //     $('#showImg').modal('show');
        //     $(".showImg").html(
        //         "<img src='{{ URL::asset('img/product1.jpg') }}' class='img-fluid' alt='Responsive image'>");
        // })
        // }
        // document.getElementById("product1").addEventListener("click", function () {
        //     $('#showImg').modal('show');
        //     $(".showImg").html(
        //         "<img src='{{ URL::asset('img/product2.jpg') }}' class='img-fluid' alt='Responsive image'>");
        // })
        // document.getElementById("product2").addEventListener("click", function () {
        //     $('#showImg').modal('show');
        //     $(".showImg").html(
        //         "<img src='{{ URL::asset('img/product3.jpg') }}' class='img-fluid' alt='Responsive image'>");
        // })
        // document.getElementById("product3").addEventListener("click", function () {
        //     $('#showImg').modal('show');
        //     $(".showImg").html(
        //         "<img src='{{ URL::asset('img/product4.jpg') }}' class='img-fluid' alt='Responsive image'>");
        // })
        // document.getElementById("product5").addEventListener("click", function () {
        //     $('#showImg').modal('show');
        //     $(".showImg").html(
        //         "<img src='{{ URL::asset('img/product5.jpg') }}' class='img-fluid' alt='Responsive image'>");
        // })
        // document.getElementById("product6").addEventListener("click", function () {
        //     $('#showImg').modal('show');
        //     $(".showImg").html(
        //         "<img src='{{ URL::asset('img/product6.jpg') }}' class='img-fluid' alt='Responsive image'>");
        // })
        // document.getElementById("product7").addEventListener("click", function () {
        //     $('#showImg').modal('show');
        //     $(".showImg").html(
        //         "<img src='{{ URL::asset('img/product7.jpg') }}' class='img-fluid' alt='Responsive image'>");
        // })

        //ajax
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function myData() {
            $(document).ready(function () {
                var eventCity = $("#eventCity").val();
                var event;
                $.ajax({
                    type: "GET",
                    url: "/api/member/runEvent",
                    data: {
                        cityNo: eventCity
                    }
                }).done(function (data) {
                    event = data[0].eventId;
                    var teamName = $("#name").val();
                    var groupId;
                    $.ajax({
                        type: "POST",
                        url: "/api/member/teamAdd",
                        data: {
                            orderGroupName: teamName,
                            orderGroupNo: orderNumber,
                            eventId: event
                        }
                    }).done(function (data) {
                        groupId = data;
                        var name = $("#name").val();
                        var twId = $("#twId").val();
                        var sex = $("input[name=sex]:checked").val();
                        var year = $("#year").val();
                        var month = $("#month").val();
                        var day = $("#day").val();
                        var city = $("#city").val();
                        var town = $("#town").val();
                        var address = $("#address").val();
                        var email = $("#email").val();
                        var cellPhone = $("#cellPhone").val();
                        var emName = $("#emName").val();
                        var emRelationship = $("#emRelationship").val();
                        var emCellphone = $("#emCellphone").val();
                        var km = $('input:radio:checked[name="km"]').val();
                        var product = [$('input:checkbox:checked[name="product[]"]').map(
                            function () {
                                return $(this).val();
                            }).get()];
                        $.ajax({
                            type: "POST",
                            url: "/api/member/add",
                            data: {
                                memberTwId: twId,
                                memberName: name,
                                memberGender: sex,
                                memberYear: year,
                                memberMonth: month,
                                memberDay: day,
                                memberCity: city,
                                memberTown: town,
                                memberAddr: address,
                                memberEmail: email,
                                memberMobile: cellPhone,
                                memberEmergencyMobile: emCellphone,
                                memberEmergencyContact: emName,
                                memberEmergencyRelationship: emRelationship,
                                runId: km,
                                productId: product.toString(),
                                orderNo: orderNumber,
                                orderStatus: "1",
                                orderGroupId: groupId,
                            }
                        });
                    });
                })

            });
        }

        //撈賽事
        var runs;
        $(document).ready(function () {
            var eventCity = $("#eventCity").val();
            $.ajax({
                type: "GET",
                url: "/api/member/runEvent",
                data: {
                    cityNo: eventCity
                }
            }).done(function (data) {
                runs = data;
                // event = data[0].eventId;
                // console.log(data[0].eventId);
                for (var i = 0; i < data.length; i++) {
                    $("#signupOp").append(
                        "<div class='row radio d-flex justify-content-between'><div><input type='radio' name='km' value='" +
                        data[i].idRun + "'>" + data[i].runNameLong + "</div><div>NT$" + data[i]
                        .runPrice + "</div></div>");
                }
                console.log(data);
            });
        });

        //撈商品
        var products;
        $(document).ready(function () {
            $.ajax({
                type: "GET",
                url: "/api/member/addProduct",
            }).done(function (data) {
                products = data;
                for (var i = 0; i < data.length; i++) {
                    $("#addPurchase").append(
                        "<div class='row d-flex justify-content-between'><div><input type='checkbox' name='product[]' value='" +
                        data[i].idProduct + "'>" + data[i].productName + "</div><div>NT" + data[
                            i]
                        .productPrice + "</div></div>");
                }
                console.log(data);
            });
        })

    </script>

    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
