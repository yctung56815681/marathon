<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>路跑報名</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <style>
        .navList {
            background-color: peru;
            text-align: center;
        }

        .header {
            background-color: aqua;
        }

        .aside {
            background-color: aquamarine;

        }

        .content {
            background-color: bisque;
            padding-top: 10px;
        }

        .countDown {
            background-color: brown;
        }

        .action {
            background-color: yellow;
        }

        .detail {
            border: 1px solid black;
            padding: 20px;
            font-size: 15px;
        }

        .detail2 {
            border: 1px solid black;
            margin-top: 10px;
            padding: 20px;
            font-size: 15px;
            height: 500px;
            font-size: 3em;
            text-align: center;
            line-height: 150px;
        }

        .schedule {
            padding: 0 10px;
        }

        .title {
            margin-top: 20px;
        }

        .myButton {
            margin-top: 20px;
        }
        #addName,
        #addTwId,
        #addCellPhone,
        #addKm,
        #addProduct,
        #random {
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 navList">這是導覽列</div>
            <div class="col-md-12 header">這是照片</div>
            <div class="col-md-2 aside">這是列表</div>
            <div class="col-md-8 content">
                <form action="" method="post">
                    <div id="group1">
                        <div class="content">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="detail">
                                        <p>
                                            活動注意事項與聲明：
                                            <br>
                                            選手於賽事期間因參與賽事所造成財物損失或體傷，大會將協助處理保險理賠事宜，惟
                                            選手已獲得理賠項目、或因特別不保事項、或非屬理賠範圍等事由，不得再向指導單位、
                                            主辦單位及承辦單位要求任何形式之賠償。
                                            <br>
                                            <br>
                                            本人/團體，保證自身身心健康且健康狀況良好，自願參加活動，並已詳細閱讀過活 動簡章及主辦單位於活動前所公告之相關資訊，且同意亦保證遵守大會於活動規程中
                                            所約定事項，對於選手在活動中需自行負擔的危險性及責任已有一定的認知與了解， 活動中若發生任何意外事件，願意自行負責，一切責任與主辦單位無關。
                                            <br>
                                            <br>
                                            本人/團體一旦報名，視為同意本網頁公告活動規程中所有規定。
                                            <br>
                                            本活動規程如有未盡事宜，得由大會修正後於本網頁公布之。
                                            <br>
                                            本人/團體同意活動畫面提供大會無償使用。
                                            <br>
                                            一旦選擇報名即同意上述聲明及隱私政策條款！
                                            <br>
                                        </p>
                                        <br>
                                        <br>

                                        <p>
                                            <input type="checkbox" name="confirm[]" class="form-check-input"
                                                required>已詳細閱讀、瞭解並同意全統運動報名網《活動聲明》
                                        </p>
                                        <br>
                                        <br>
                                        <div class="btn-group d-flex justify-content-center">
                                            <div><input id="checkRead" class="btn btn-primary" type="button" value="個人報名"
                                                    onclick="goGroup2()">
                                            </div>
                                            <div><input class="btn btn-primary" type="button" value="團體報名"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div id="group2" style="display:none">
                        <div class="content">
                            <form action="" method="POST" name="memberForm">
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
                                <div id="title1" class="title"><i class="fa fa-thumbs-o-up"></i>個人資料
                                    <hr>
                                </div>
                                <div id="personalData">
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="name">姓名</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="請輸入姓名" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="name">身分證</label>
                                            <input type="text" class="form-control" name="twId" id="twId"
                                                placeholder="請輸入身分證" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                            <label for="name">性別</label>
                                            <div class="d-flex justify-content-start">
                                                <input type="radio" class="form-control" name="sex" value="male">男
                                                <input type="radio" class="form-control" name="sex" value="female">女
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="year">年</label>
                                            <input type="text" class="form-control" name="year" id="year"
                                                placeholder="請輸入出生民國年分" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="month">月</label>
                                            <input type="text" class="form-control" name="month" id="month"
                                                placeholder=" 請輸入出生月份" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="day">日</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="day" id="day"
                                                    placeholder="請輸入出生日" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="city">城市</label>
                                            <input type="text" class="form-control" name="city" id="city"
                                                placeholder="請輸入城市" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="town">鄉鎮</label>
                                            <input type="text" class="form-control" name="town" id="town"
                                                placeholder="請輸入鄉鎮" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="address">地址</label>
                                            <input type="text" class="form-control" name="address" id="address"
                                                placeholder="請輸入居住地址" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="email">信箱</label>
                                            <input type="text" class="form-control" name="email" id="email"
                                                placeholder="請輸入信箱" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="cellPhone">電話</label>
                                            <input type="text" class="form-control" name="cellPhone" id="cellPhone"
                                                placeholder="請輸入電話" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-8 mb-3">
                                            <label for="emName">姓名</label>
                                            <input type="text" class="form-control" name="emName" id="emName"
                                                placeholder="請輸入緊急聯絡人姓名" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="emRelationship">關係</label>
                                            <input type="text" class="form-control" name="emRelationship"
                                                id="emRelationship" placeholder="請輸入關係" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="emCellphone">電話</label>
                                            <input type="text" class="form-control" name="emCellphone" id="emCellphone"
                                                placeholder="請輸入緊急聯絡人電話" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- 報名項目選擇 -->
                                <div id="title2" class="title"><i class="fa fa-thumbs-o-up"></i>報名項目
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
                                <div id="title3" class="title"><i class="fa fa-thumbs-o-up"></i>加購項目
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
                                        <div><input type="checkbox" name="product[]" value="雲豹競速路跑鞋男款藍綠色">雲豹競速路跑鞋男款藍綠色
                                        </div>
                                        <div>NT$1580</div>
                                    </div>
                                    <div class="row d-flex justify-content-between">
                                        <div><input type="checkbox" name="product[]" value="雲豹競速路跑鞋男款螢綠黑">雲豹競速路跑鞋男款螢綠黑
                                        </div>
                                        <div>NT$1580</div>
                                    </div>
                                    <div class="row d-flex justify-content-between">
                                        <div><input type="checkbox" name="product[]" value="雲豹競速路跑鞋女款桃粉黑">雲豹競速路跑鞋女款桃粉黑
                                        </div>
                                        <div>NT$1580</div>
                                    </div>
                                    <div class="row d-flex justify-content-between">
                                        <div><input type="checkbox" name="product[]" value="男子減震慢跑麒麟鞋-雷電金">男子減震慢跑麒麟鞋-雷電金
                                        </div>
                                        <div>NT$1580</div>
                                    </div>
                                    <div class="row d-flex justify-content-between">
                                        <div><input type="checkbox" name="product[]" value="女子減震慢跑麒麟鞋-火焰紅">女子減震慢跑麒麟鞋-火焰紅
                                        </div>
                                        <div>NT$1580</div>
                                    </div>
                                </div>
                                <div class="btn-group d-flex justify-content-center myButton">
                                    <div><input id="goTop" class="btn btn-primary" type="button" value="報名首頁"
                                            onclick="goGroup1()">
                                    </div>
                                    <div> <input id="goTop" class="btn btn-primary" type="button" value="送出資料"
                                            onclick="goGroup3();  processFormData(); check_data()"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="group3" style="display:none">
                        <div class="content">
                            <form action="">
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
                                <div id="title4" class="title"><i class="fa fa-thumbs-o-up"></i>報名明細
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
                                            <tr >
                                                <th>加購項目</th>
                                                <td id="addProduct"></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div id="title5" class="title"><i class="fa fa-thumbs-o-up"></i>費用明細
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
                                <div id="title6" class="title"><i class="fa fa-thumbs-o-up"></i>繳費方式
                                    <hr>
                                </div>
                                <div id="payMethod">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="d-flex justify-content-between">
                                                <div><input type="radio" name="pay" value="711">7-11/ibon</div>
                                                <div><input type="radio" name="pay" value="famiPort">全家/FamiPort</div>
                                                <div><input type="radio" name="pay" value="atm">ATM轉帳</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group d-flex justify-content-center myButton">
                                    <div><input id="goTop" class="btn btn-primary" type="button" value="報名資料"
                                            onclick="goGroup2()">
                                    </div>
                                    <div><input id="goTop" class="btn btn-primary" type="button" value="確認訂單"
                                            onclick="goGroup4()">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div id="group4" style="display:none">
                        <div class="content">
                            <div class="row d-flex justify-content-between schedule">
                                <div>
                                    <button class="action" disabled="disabled">個人資料</button>
                                </div>
                                <div>
                                    <button class="action" disabled="disabled">付款明細</button>
                                </div>
                                <div>
                                    <button class="action" disabled="disabled">完成報名</button>
                                </div>
                            </div>

                            <div class="detail2">
                                <p>
                                    繳費成功!!!!
                                    <br>
                                    恭喜完成報名!!!!
                                    <br>

                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2 countDown">這是倒數計時</div>
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

    <script>
        //確認是否有勾選已閱讀
        $("#checkRead").click(function() {
            var check = $("input[name='confirm[]']:checked").length;
            if (check == 0) {
                alert("您尚未勾選");
				return goGroup1();
            }else{
				alert("你勾選了");
				return true;
			}
        })
        //換頁效果
        function goGroup1() {
            $("#group1").attr("style", "display:block");
            $("#group2").attr("style", "display:none");
            $("#group3").attr("style", "display:none");
            $("#group4").attr("style", "display:none");
        }

        function goGroup2() {
            $("#group1").attr("style", "display:none");
            $("#group2").attr("style", "display:block");
            $("#group3").attr("style", "display:none");
            $("#group4").attr("style", "display:none");
        }

        function goGroup3() {
            $("#group1").attr("style", "display:none");
            $("#group2").attr("style", "display:none");
            $("#group3").attr("style", "display:block");
            $("#group4").attr("style", "display:none");
        }

        function goGroup4() {
            $("#group1").attr("style", "display:none");
            $("#group2").attr("style", "display:none");
            $("#group3").attr("style", "display:none");
            $("#group4").attr("style", "display:block");
        }
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
        //檢查輸入欄位
        function check_data() {
            var twIdRegex = new RegExp(/^[A-Za-z][12]\d{8}$/);
            var phoneRegex = new RegExp(/^09[0-9]{8}$/);
            if (document.memberForm.name.value.length == 0) {
                alert("請輸入姓名");
                return false;
            }
            if (document.memberForm.twId.value != document.memberForm.twId.value.match(twIdRegex)) {
                alert("請輸入正確的身分證格式");
                return false;
            }
            if (document.memberForm.year.value.length == 0 | document.memberForm.year.value.length > 3 | document
                .memberForm.year.value > 108) {
                alert("請輸入正確的年份");
                return false;
            }
            if (document.memberForm.month.value > 12 | document.memberForm.month.value < 1) {
                alert("請輸入正確的月份");
                return false;
            }
            if (document.memberForm.day.value == 2 & document.memberForm.day.value > 29) {
                alert("二月最多29天");
                return false;
            }
            if (document.memberForm.month.value == 4 | document.memberForm.month.value == 6 | document.memberForm.month
                .value == 9 | document.memberForm.month.value == 11) {
                if (document.memberForm.day.value > 30) {
                    alert("4月、六月、9月、11月只有30天");
                    return false;
                }
            } else {
                if (document.memberForm.day.value > 31) {
                    alert("1月、3月、5月、7月、8月、10月、12月只有31天");
                    return false;
                }
            }
            if (document.memberForm.day.value > 31 | document.memberForm.day.value < 1) {
                alert("請輸入正確的出生日");
                return false;
            }
            if (document.memberForm.cellPhone.value != document.memberForm.cellPhone.value.match(phoneRegex)) {
                alert("請輸入臺灣的手機號碼");
                return false;
            }
            if (document.memberForm.emName.value.length == 0) {
                alert("請輸入姓名");
                return false;
            }
            if (document.memberForm.emCellphone.value != document.memberForm.emCellphone.value.match(phoneRegex)) {
                alert("請輸入臺灣的手機號碼");
                return false;
            }

            // memberForm.submit();
        }
        //取得表單資料
        function processFormData() {
            var name = $('input[name="name"]').val(); //姓名
            var twId = $('input[name="twId"]').val(); //身分證
            var cellPhone = $('input[name="cellPhone"]').val(); //電話
            var km = $('input:radio:checked[name="km"]').val(); //賽事
            $("#addName").text(name);
            $("#addTwId").text(twId);
            $("#addCellPhone").text(cellPhone);
            $("#addKm").text(km);
            // console.log(km);
            var product = new Array();
            $('input[name="product[]"]:checkbox:checked').each(function (i) {
                product[i] = this.value;
            });
            //加購項目
            $("#addProduct").empty();
            // $("#addProduct").append("<th>加購項目</th>");
            $("#addProduct").append("<td>");
            // $("#addProduct").append("<td>" + product + "</td>");
            if (product.length != 1) {     
                $("#addProduct").each(function (i) {  
                    for (i = 0; i < product.length; i++) {
                        $("#addProduct").append(product[i] + "<br>");
                    }
                    $("#addProduct").append("</td>");
                })
            }else {
                $("#addProduct").append("<td>");
                $("#addProduct").append(product);
                $("#addProduct").append("</td>");
            }
           
            console.log(product);
            console.log(product.length);
        }
        //產生訂單號
        var random_no = "";
        for (var i = 0; i < 4; i++) //j位隨機數，用以加在時間戳後面。
        {
            random_no += Math.floor(Math.random() * 10);
        }
        var today = new Date();
        var random_no = today.getTime() + random_no;
        console.log(random_no);
        $("#random").text(random_no);
    </script>
</body>

</html>