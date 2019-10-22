<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="{{ URL::asset('signupCSS/signup.css') }}" rel="stylesheet" />

</head>

<body>
    {{------------------------------------------Modal----------------------------------------------------}}
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
        <div class="row">
            {{------------------------------------------Nav----------------------------------------------------}}
            <div class="col-md-12 navList">
                <nav class="navbar navbar-expand-lg navbar-light navbg">
                    <a class="navbar-brand" href="/" style="color: white; font-size:22px">運動報名網</a>
                </nav>
            </div>
            {{------------------------------------------header圖片----------------------------------------------------}}
            <div class="header">
                <img src="{{ URL::asset("img/{$city}{$year}{$month}.jpg") }}" class="img-fluid" alt="Responsive image">
            </div>
            {{------------------------------------------查詢報名資料----------------------------------------------------}}
            <div class="col-md-12 content">
                <form name="queryMember">
                    <div class="form-row d-flex justify-content-center">
                        <div class="col-md-6 mb-3 ">
                            <div id="title0" class="title"><i class="fas fa-dot-circle"></i>資料查詢訂單
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div id="query">
                        <input type="hidden" name="eventCity" id="eventCity" value="{{$city}}">
                        <div class="col-md-12 mb-3 ">
                            <div class="form-row d-flex justify-content-center">
                                <div class="col-md-6 mb-3 ">
                                    <label for="twId">身分證</label>
                                    <input onchange="check_data()" type="text" class="form-control myInput" name="twId" id="twId" 
                                        placeholder="請輸入身分證" required>
                                        <div id="remind" class="remind"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group d-flex justify-content-center myButton">
                        <div><input class="btn btn-primary" type="button" value="查詢資料" onclick="myData()">
                        </div>
                    </div>
                </form>
                <div id="showPerson" style="display: none">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 ">
                            <div id="title1" class="title"><i class="fas fa-dot-circle"></i>個人資料
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div id="group1">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 ">
                                <div id="result"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 ">
                            <div id="title2" class="title"><i class="fas fa-dot-circle"></i>報名項目
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div id="group2">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 ">
                                <div id="resultRun"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 ">
                            <div id="title3" class="title"><i class="fas fa-dot-circle"></i>加購項目
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div id="group3">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 ">
                                <div id="resultProduct"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 ">
                            <div id="title4" class="title"><i class="fas fa-dot-circle"></i>費用明細
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div id="group4">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 ">
                                <div id="resultPrice"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("title0").addEventListener("click", function () {
            $("#query").toggle();
        })
        document.getElementById("title1").addEventListener("click", function () {
            $("#group1").toggle();
        })
        document.getElementById("title2").addEventListener("click", function () {
            $("#group2").toggle();
        })
        document.getElementById("title3").addEventListener("click", function () {
            $("#group3").toggle();
        })
        document.getElementById("title4").addEventListener("click", function () {
            $("#group4").toggle();
        })

        function showDetail() {
            $("#showPerson").attr("style", "display:block");
        }

        function check_data() {
            var twIdRegex = new RegExp(/^[A-Za-z][12]\d{8}$/);
            var memberTwId = $('input[name="twId"]').val();
            if (memberTwId != memberTwId.match(twIdRegex)) {
                $("#remind").text("請輸入正確的身分證格式");
            }else {
                $("#remind").text("格式正確");
            }
        }

        //ajax
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function myData() {
            $("#result").empty();
            $("#resultRun").empty();
            $("#resultProduct").empty();
            $("#resultPrice").empty();
            $(document).ready(function () {
                var eventCity = $("#eventCity").val();
                var twId = $("#twId").val();
                $.ajax({
                    type: "GET",
                    url: "/api/member/show",
                    data: {
                        cityNo: eventCity,
                        memberTwId: twId,
                    }
                }).done(function (data) {
                    if (!(data == "")) {
                        showDetail();
                        $("#result").append(
                            "<div class='myQuery'>" + data[0].orderNo + "</div><br>" +
                            "<div class='myQuery'>" + data[0].memberName + "</div><br>" +
                            "<div class='myQuery'>" + data[0].memberTwId + "</div><br>" +
                            "<div class='myQuery'>" + data[0].memberGender + "</div><br>" +
                            "<div class='myQuery'>" + data[0].memberYear + "年" + data[0]
                            .memberMonth +
                            "月" + data[0].memberDay +
                            "日" + "</div><br>" +
                            "<div class='myQuery'>" + data[0].memberEmail + "</div><br>" +
                            "<div class='myQuery'>" + data[0].memberMobile + "</div><br>" +
                            "<div class='myQuery'>" + data[0].memberCity + data[0].memberTown +
                            data[0]
                            .memberAddr + "</div><br>" +
                            "<div class='myQuery'>" + data[0].memberEmergencyContact +
                            "</div><br>" +
                            "<div class='myQuery'>" + data[0].memberEmergencyMobile + "</div><br>" +
                            "<div class='myQuery'>" + data[0].memberEmergencyRelationship + "</div>"
                        );
                        //取得價錢
                        var addPrice = 0;
                        var totalPrice = 0;
                        for (i = 0; i < data.length; i++) {
                            addPrice = data[i].productPrice + addPrice;
                            totalPrice = addPrice + data[0].runPrice;
                        };

                        $("#resultRun").append(
                            "<div class='row'><div class='col-md-10 mb-3 myQuery'>" + data[0]
                            .runNameLong +
                            "</div>" + "<div class='col-md-2 myQuery  mb-3 myTotal'>" + data[0].runPrice +
                            "元" + "</div></div><br>"
                        );
                        for (i = 0; i < data.length; i++) {
                            $("#resultProduct").append(
                                "<div class='row'><div class='col-md-10 mb-3 myQuery'>" + data[i]
                                .productName + "</div>" + "<div class='col-md-2 mb-3 myQuery myTotal'>" +
                                data[i].productPrice + "元" + "</div></div><br>"
                            );
                        };

                        $("#resultPrice").append(
                            "<div class='row d-flex justify-content-end'><div class='col-md-2 mb-3 myQuery myTotal'>" +
                            totalPrice + "元" + "</div></div>"
                        );

                    } else {
                        $('#checkRegex').modal('show');
                        $(".checkRegex").text("查無資料");
                        
                    }
                    console.log(data);
                });

                queryMember.reset();
            });

        }

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
    <script>
    </script>
</body>

</html>
