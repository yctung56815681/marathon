<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>新增訂單</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

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
<div id="checkRegex"class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">提示訊息</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p class="checkRegex"></p>
      </div>
      <div class="modal-footer">
       
      <button type="button" class="btn-sm btn-info" data-dismiss="modal"><i
                                                class="far fa-plus-square"></i> 返回</button>
      </div>
    </div>
  </div>
</div>
        <!-- {{------------------------------------------Modal1----------------------------------------------------}} -->
        
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

{{-- ------------------------------------------------------------------------------------------------ --}}
<div class="Right">
<div class="p-3 mb-1 bg-secondary text-white text-center ">新增訂單</div>
<div class="container">
 {{------------------------------------------報名資料----------------------------------------------------}}
<div class="col-md-12 content">
    <div class="content">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div id="group">
                    <form name="memberForm">
                        <fieldset>
                        <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th width="180px">賽事選擇 : </th>
                            <td  width="300px">
                                <select class="custom-select my-1 mr-sm-2" id="eventCity" onchange="changeCity()">
                                    <option >請選擇賽事</option>
                                    <option value="TPH">新北場</option>
                                    <option value="TYC">桃園場</option>
                                    <option value="TXG">台中場</option>
                                    <option value="CWH">彰化場</option>
                                    <option value="YUN">雲林場</option>
                                    <option value="TNN">台南場</option>
                                    <option value="KHH">高雄場</option>
                                    <option value="PCH">屏東場</option>
                                    <option value="ILN">宜蘭場</option>
                                </select>
                            </td>
                            <td width="180px"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>姓名 :</th>
                            <td> <input type="text" class="form-control" name="name" id="name" placeholder="" required></td>
                            <th>身分證字號 :</th>
                            <td><input type="text" class="form-control" name="twId" id="twId" placeholder="" required></td>
                        </tr>
                        <tr>
                            <th>姓別 :</th>
                            <td>
                                
                                <label class="radio-inline"><input  type="radio" name="sex" value="男">男</label>
                                <label class="radio-inline"><input  type="radio" name="sex" value="女">女</label>
                            </td>
                            <th>出生日期 :</th>
                            <td>
                            <div class="form-row">
                                <div class="col-3 ">
                                    <input  class="form-control"  id="year" name="year" type="text" required>
                                </div>
                                <div>_</div>
                                <div class="col-3">
                                    <input  class="form-control"  id="month" name="month"  type="text" required>
                                </div>
                                <div>_</div>
                                <div class="col-3">
                                    <input  class="form-control"  id="day" name="day"  type="text" required>
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <th>e-mail :</th>
                            <td><input type="text" class="form-control" name="email" id="email" placeholder="" required></td>
                            <th>電話 :</th>
                            <td><input type="text" class="form-control" name="cellPhone" id="cellPhone" placeholder="" required></td>
                        </tr>
                            <th>居住城市 :</th>
                            <td><input type="text" class="form-control" name="city" id="city"placeholder="" required></td>
                            <th>鄉鎮 :</th>
                            <td><input type="text" class="form-control" name="town" id="town" placeholder="" required></td>
                        </tr>
                            <th>地址 :</th>
                            <td><input type="text" class="form-control" name="address"id="address" placeholder="" required></td>
                            <th>緊急聯絡人姓名</th>
                            <td><input type="text" class="form-control" name="emName"id="emName" placeholder="" required></td>
                        </tr>
                        <tr>
                            <th>緊急聯絡人電話 :</th>
                            <td><input type="text" class="form-control" name="emCellphone"id="emCellphone" placeholder="" required></td>
                            <th>與緊急聯絡人關係 :</th>
                            <td><input type="text" class="form-control" name="emRelationship"id="emRelationship" placeholder="" required></td>
                        </tr>
                        <tr>
                            <th>報名項目 :</th>
                            <td><div id="signupOp"></div></td>
                            <th>加購商品 :</th>
                            <td><div id="addPurchase"></div></td>
                        </tr>
                        </table>
                        <button type="button" onclick="window.history.back(-1)" id="okOrCancel" name="okOrCancel" class="btn-sm btn-warning float-right"><i class="fas fa-ban"></i>取消</button>
                        <button class="btn-sm btn-success float-right" type="button" value="確認"  onclick=" group2();check_data(); "><i class="far fa-plus-square"></i> 確認</button>
                    </form>
                </div>
                <div id="group2" style="display:none">
                <div class="card text-center">
                    <div class="card-body">
                        <p class="card-text-center">成功新增一筆訂單資料</p>
                        <a href="/orderGroupAdmin" type="submit" id="okOrCancel" name="okOrCancel" class="btn-sm btn-warning float-right btn-center"><i class="fas fa-arrow-alt-circle-left"></i> 返回</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function group1() {
    $("#group").attr("style","display:block");
    $("#group2").attr("style","display:none");
}
function group2() {
    $("#group").attr("style","display:none");
    $("#group2").attr("style","display:block");
}
//檢查個人資料輸入欄位
function check_data() {
var twIdRegex = new RegExp(/^[A-Za-z][12]\d{8}$/);
var phoneRegex = new RegExp(/^09[0-9]{8}$/);
if (document.memberForm.name.value.length == 0) {
    $('#checkRegex').modal('show');
    $(".checkRegex").text("請輸入姓名");
    return group1();
}
if (document.memberForm.twId.value != document.memberForm.twId.value.match(twIdRegex)) {
    $('#checkRegex').modal('show');
    $(".checkRegex").text("請輸入正確的身分證格式");
    return group1();
}
var sex = $("input[name=sex]:checked").length;
if (sex == 0) {
    $('#checkRegex').modal('show');
    $(".checkRegex").text("請選擇您的性別");
    return group1();
}
if (document.memberForm.year.value.length == 0 | document.memberForm.year.value.length > 3 | document
    .memberForm.year.value > 108) {
    $('#checkRegex').modal('show');
    $(".checkRegex").text("請輸入正確的年份");
    return group1();
}
if (document.memberForm.month.value > 12 | document.memberForm.month.value < 1) {
    $('#checkRegex').modal('show');
    $(".checkRegex").text("請輸入正確的月份");
    return group1();
}
if (document.memberForm.day.value == 2 & document.memberForm.day.value > 29) {
    $('#checkRegex').modal('show');
    $(".checkRegex").text("二月最多29天");
    return group1();
}
if (document.memberForm.month.value == 4 | document.memberForm.month.value == 6 | document.memberForm.month
    .value == 9 | document.memberForm.month.value == 11) {
    if (document.memberForm.day.value > 30) {
        $('#checkRegex').modal('show');
        $(".checkRegex").text("4月、六月、9月、11月只有30天");
        return group1();
    }
} else {
    if (document.memberForm.day.value > 31) {
        $('#checkRegex').modal('show');
        $(".checkRegex").text("1月、3月、5月、7月、8月、10月、12月只有31天");
        return group1();
    }
}
if (document.memberForm.day.value > 31 | document.memberForm.day.value < 1) {
    $('#checkRegex').modal('show');
    $(".checkRegex").text("請輸入正確的出生日");
    return group1();
}
if (document.memberForm.cellPhone.value != document.memberForm.cellPhone.value.match(phoneRegex)) {
    $('#checkRegex').modal('show');
    $(".checkRegex").text("請輸入臺灣的手機號碼");
    return group1();
}
if (document.memberForm.emName.value.length == 0) {
    $('#checkRegex').modal('show');
    $(".checkRegex").text("請輸入緊急聯絡人姓名");
    return group1();
}
if (document.memberForm.emCellphone.value != document.memberForm.emCellphone.value.match(phoneRegex)) {
    $('#checkRegex').modal('show');
    $(".checkRegex").text("請輸入臺灣的手機號碼");
    return group1();
}
var km = $("input[name=km]:checked").length;
if (km == 0) {
    $('#checkRegex').modal('show');
    $(".checkRegex").text("請選擇要報名的賽事");
    return group1();
}
// memberForm.submit();
myData();
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
                            orderGroupRevoke: "1",
                            orderGroupStatus: "1",
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
                                orderRevoke: "1",
                                orderGroupId: groupId,
                            }
                        });
                    });
                })
            });
        }
//撈賽事
var runs;
function changeCity() {
    $("#signupOp").empty();
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
            "<div class='radio d-flex justify-content-between'><div><input type='radio' name='km' value='" +
            data[i].idRun + "'>" + data[i].runNameLong + "</div><div>NT$" + data[i]
            .runPrice + "</div></div>");
    }
    console.log(data);
});
});
}
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
            "<div class='d-flex justify-content-between'><div><input type='checkbox' name='product[]' value='" +
            data[i].idProduct + "'>" + data[i].productName + "</div><div>NT" + data[i]
            .productPrice + "</div></div>");
    }
    console.log(data);
});
})
</script>

<div>&nbsp;</div>
<div>&nbsp;</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</body>


