<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>路跑報名</title>


    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="{{ URL::asset('signupCSS/signup.css') }}" rel="stylesheet" />

</head>

<body>
    {{------------------------------------------Modal----------------------------------------------------}}
    <div id="noRead" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: red; border-radius: 0 25%;">
                <div class="modal-header">
                    <h5 class="modal-title"></h5><i class="fas fa-exclamation-circle fa-8x" style="margin: 0 auto"></i>
                    </h5>
                </div>
                <div class="modal-body" style="font-size: 2em; text-align: center">
                    <p>請詳閱聲明並勾選已詳閱</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fulid">
        {{------------------------------------------Nav----------------------------------------------------}}
        <div class="row" style="flex-direction:row-reverse">
            <div class="col-md-12 navList">
                <nav class="navbar navbar-expand-lg navbar-light navbg">
                    <a class="navbar-brand" href="/" style="color: white; font-size: 22px">運動報名網</a>
                </nav>
            </div>
            {{------------------------------------------header圖片----------------------------------------------------}}
            <div class="header">
                <img src="{{ URL::asset("img/{$city}{$year}{$month}.jpg") }}" class="img-fluid" alt="Responsive image">
            </div>
            {{------------------------------------------倒數計時----------------------------------------------------}}
            {{-- <div class="col-md-2 countDown">這是倒數計時</div> --}}
            {{------------------------------------------活動聲明----------------------------------------------------}}
            <div class="col-md-12 content">
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
                                    <input type="checkbox" id="confirm" name="confirm[]" class="form-check-input"
                                        required><label for="confirm">已詳細閱讀、瞭解並同意運動報名網《活動聲明》</label>
                                </p>
                                <br>
                                <br>
                                <div class="btn-group d-flex justify-content-center">
                                    <div><a href={{"/signup/{$city}/{$year}/{$month}/signup"}}> <input
                                                class="btn btn-primary checkRead" type="button" value="個人報名"></a>
                                    </div>
                                    <div><a href={{"/teamSignup/{$city}/{$year}/{$month}/"}}><input
                                                class="btn btn-primary checkRead" type="button" value="團體報名"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script>
        //確認是否有勾選已閱讀
        $(".checkRead").click(function () {
            var check = $("input[name='confirm[]']:checked").length;
            if (check == 0) {
                $('#noRead').modal('show');
                return false;
            }
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
