<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>報名完成</title>


    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="{{ URL::asset('signupCSS/signup.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="container-fulid">
        <div class="row" style="flex-direction:row-reverse">
            {{-- ------------------------------------------Nav---------------------------------------------------- --}}
            <div class="col-md-12 navList">
                <nav class="navbar navbar-expand-lg navbar-light navbg">
                    <a class="navbar-brand" href="#" style="color: white">運動報名網</a>
                </nav>
            </div>
            {{-- ------------------------------------------header圖片---------------------------------------------------- --}}
            <div class="header">
                <img src="{{ URL::asset("img/{$city}{$year}{$month}.jpg") }}" class="img-fluid" alt="Responsive image">
            </div>
            {{-- ------------------------------------------倒數計時---------------------------------------------------- --}}
            {{-- <div class="col-md-2 countDown">這是倒數計時</div> --}}
            {{-- -----------------------------------------完成報名---------------------------------------------------- --}}
            <div class="col-md-12 content">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12 mb-3">

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
                </div>
            </div>
        </div>
    </div>


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
