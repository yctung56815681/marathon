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

    <div class="container-fluid">
        <div class="row">
            <!-- {{------------------------------------------Nav----------------------------------------------------}} -->
            <div class="col-md-12 navList">
                <nav class="navbar navbar-expand-lg navbar-light navbg">
                    <a class="navbar-brand" href="/" style="color: white; font-size:22px">運動報名網</a>
                </nav>
            </div>

            <!-- {{------------------------------------------header圖片----------------------------------------------------}} -->
            <div class="header">
                <img src="{{ URL::asset("img/{$city}{$year}{$month}.jpg") }}" class="img-fluid" alt="Responsive image">
            </div>
            <!-- {{------------------------------------------倒數計時----------------------------------------------------}} -->
            {{-- <div class="col-md-2 countDown">這是倒數計時</div> --}}
            <!-- {{------------------------------------------報名資料----------------------------------------------------}} -->
            <div class="col-md-12 content">
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
                                                    onclick="checkTeamName(); teamFormData()">
                                            </div>
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
                                                <div class="d-flex justify-content-start myInput myRadio">
                                                    <input type="radio" class="form-control" name="sex"
                                                        value="male"><span class="myText">男</span>
                                                    <input type="radio" class="form-control" name="sex"
                                                        value="female"><span class="myText">女</span>
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

                                    </div>

                                    <!-- 加購項目 -->
                                    <div id="title3" class="title"><i class="fas fa-dot-circle"></i>加購項目
                                        <hr>
                                    </div>
                                    <div id="addPurchase">

                                    </div>
                                    <div class="btn-group d-flex justify-content-center myButton">
                                        <div><a href={{"/signup/{$city}/{$year}/{$month}/index"}}><input
                                                    class="btn btn-primary myInput" type="button" value="報名首頁"></a>
                                        </div>
                                        <div><input class="btn btn-primary myInput" type="button" value="新增團員"
                                                onclick="personOrderNo(); check_data(); "></div>
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
                                        <div><a href={{"/teamSignup/{$city}/{$year}/{$month}/finish"}}><input
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
        //---------------------欄位隱藏、展開-----------------------------------------------------------------------------
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
        //---------------------------換頁效果----------------------------------------------------------------------------------
        function goGroup1() {
            $("#group1").attr("style", "display:block");
            $("#group2").attr("style", "display:none");
        }

        function goGroup2() {
            $("#group1").attr("style", "display:none");
            $("#group2").attr("style", "display:block");
        }
        //-----------------------檢查團隊名稱是否有輸入-------------------------------------------------------------------
        function checkTeamName() {
            if (document.memberForm.teamName.value.length == 0) {
                $('#checkRegex').modal('show');
                $(".checkRegex").text("請輸入團隊名稱");
                return goGroup1();
            } else {
                return goGroup2();
            }
        }
        //------------------------------------建立資料--------------------------------------------------------
        var teams = new Array();
        var team = new Object();
        var personOrderNo1 = "";

        function person() {
            var product = [$('input:checkbox:checked[name="product[]"]').map(function () {
                return $(this).val();
            }).get()];
            // console.log(product);
            var teams = [
                // teamName = {
                //     "teamName": $("#teamName").val()
                // },
                team = {
                    "name": $("#myName").val(),
                    "twId": $("#twId").val(),
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
                    "product": product,
                    "orderNo": personOrderNo1
                }
            ];
            console.log(team);
            console.log(teams);
        }

        //------------------------檢查個人資料輸入欄位---------------------------------------------------------------------
        function check_data() {
            person();
            var twIdRegex = new RegExp(/^[A-Za-z][12]\d{8}$/);
            var phoneRegex = new RegExp(/^09[0-9]{8}$/);
            if (document.memberForm.myName.value.length == 0) {
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
            memberForm.reset();
            createPerson();

        }
        //-------------------------------------------資料放入陣列-------------------------------------------------
        function createPerson() {
            teams.push(team);
            console.log(teams);
            i = teams.length;
            $("#teamArray").append('<div id=person' + i + ' class="row d-flex justify-content-between schedule "> ' +
                '<button class="myPerson" disabled="disabled" type="button">' + team.name +
                '</button><button class="myPerson" type="button" onclick="deletePerson(' + i +
                ')"><i class="fas fa-trash-alt"></i></button></div>'
            );
        }

        //刪除個人資料
        function deletePerson(i) {
            $("#person" + i).remove();
            teams.splice(i - 1, 1);
            console.log(i);
            console.log(teams);
        }
        //顯示個人資料
        function showPerson(i) {}
        //-------------------------取得團體報名資料--------------------------------------------------
        function teamFormData() {
            var totalRunMoney = 0;
            var totalproductMoney = 0;
            var totalMoney = 0;
            $("#teamMember").empty();
            for (i = 0; i < teams.length; i++) {
                team = teams[i];
                var myName = team.name;
                //賽事
                var runMoney = 0;
                var km = team.km;
                var strKm = String(km);
                console.log(strKm);
                runs.forEach(function (run) {
                    if (run.idRun == strKm) {
                        runMoney = run.runPrice;
                        myRun = run.runNameLong;
                    }
                })
                totalRunMoney += runMoney;
                console.log(totalRunMoney);
                $("#kmPrice").text(totalRunMoney + "元");


                //加購項目
                var myProduct = team.product;
                var strProduct = String(myProduct);
                var myStr = new Array;
                var addPrice = 0;
                products.forEach(function (add) {
                    if (strProduct.includes(add.idProduct + '')) {
                        // console.log(add);
                        myProducts = add.productName;
                        myStr.push(myProducts);
                        addPrice = add.productPrice + addPrice;
                    }
                })
                totalproductMoney += addPrice;
                $("#productPrice").text(totalproductMoney + "元");

                totalMoney = totalRunMoney + totalproductMoney;
                $("#total").text(totalMoney + "元");

                console.log(strProduct);
                // console.log(myProducts);
                console.log(myStr);
                myStrProduct = String(myStr);
                $("#teamMember").append(
                    '<tr class="d-flex justify-content-between">' +
                    "<th> 姓名 </th>" +
                    "<td>" + myName + "</td>" +
                    "</tr>" +
                    '<tr class="d-flex justify-content-between">' +
                    "<th>報名項目</th>" +
                    "<td>" + myRun + "</td>" +
                    "</tr>" +
                    '<tr class="d-flex justify-content-between">' +
                    "<th>加購項目</th>" +
                    "<td>" + myStrProduct + "</td>" +
                    "</tr>"
                );


            }

        }
        //---------------------------------根據時間產生訂單號--------------------------------------------------------
        var orderNumber = "";
        for (var i = 0; i < 2; i++) //j位隨機數，用以加在時間戳後面。
        {
            orderNumber += Math.floor(Math.random() * 10);
        }
        var today = new Date();
        var orderNumber = "G" + today.getTime() + orderNumber;
        console.log(orderNumber);
        $("#orderNumber").text(orderNumber);


        function personOrderNo() {
            var personOrderNo2 = "";
            for (var i = 0; i < 2; i++) //j位隨機數，用以加在時間戳後面。
            {
                personOrderNo2 += Math.floor(Math.random() * 10);
            }
            var today = new Date();
            personOrderNo1 = "P" + today.getTime() + personOrderNo2;
            console.log(personOrderNo1);

        }

        //-----------------------------------------確認訂單之後-----------------------------------------------
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
                    var teamName = $("#teamName").val();
                    var groupId;
                    $.ajax({
                        type: "POST",
                        url: "/api/member/teamAdd",
                        data: {
                            orderGroupName: teamName,
                            orderGroupNo: orderNumber,
                            orderGroupRevoke: "1",
                            orderGroupStatus: "1",
                            eventId: event
                        }
                    }).done(function (data) {
                        groupId = data;
                        for (i = 0; i < teams.length; i++) {
                            team = teams[i];
                            var myName = team.name;
                            var twId = team.twId;
                            var sex = team.sex;
                            var year = team.year;
                            var month = team.month;
                            var day = team.day;
                            var email = team.email;
                            var cellPhone = team.cellPhone;
                            var city = team.city;
                            var town = team.town;
                            var address = team.address;
                            var emName = team.emName;
                            var emCellphone = team.emCellphone;
                            var emRelationship = team.emRelationship;
                            var km = team.km;
                            var product = team.product;
                            $.ajax({
                                type: "POST",
                                url: "/api/member/add",
                                data: {
                                    memberName: myName,
                                    memberTwId: twId,
                                    memberGender: sex,
                                    memberYear: year,
                                    memberMonth: month,
                                    memberDay: day,
                                    memberCity: city,
                                    memberTown: town,
                                    memberAddr: address,
                                    memberEmail: email,
                                    memberMobile: cellPhone,
                                    memberEmergencyContact: emName,
                                    memberEmergencyRelationship: emRelationship,
                                    memberEmergencyMobile: emCellphone,
                                    runId: km,
                                    productId: product.toString(),
                                    orderNo: personOrderNo1,
                                    orderStatus: "1",
                                    orderRevoke: "1",
                                    orderGroupId: groupId
                                }
                            });
                        }
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
                        data[i].idProduct + "'>" + data[i].productName + "</div><div>NT" + data[i]
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
