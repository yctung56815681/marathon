<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理系統</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <form class="form-signin" method="post" action="/login">
                @csrf
                {{-- <img class="mb-4" src="img/iiilogo.png" alt="" width="72" height="72"> --}}
                <p><i class="fas fa-landmark fa-4x text-info"></i></p>
                <h1 class="h3 mb-3 font-weight-normal text-info">管理系統</h1>

                <div class="form-group row">
                    <label for="inputEmail">帳號</label>
                    {{-- <input type="email" id="inputEmail" class="form-control" placeholder="帳號" required autofocus> --}}
                    <input type="text" id="inputEmail" class="form-control" name="username" placeholder="帳號" required
                        autofocus>
                </div>

                <div class="form-group row">
                    <label for="inputPassword">密碼</label>
                    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="密碼"
                        required>
                </div>

                {{-- <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me">記住我
                </label>
                </div> --}}

                <button class="btn btn-lg btn-info btn-block" type="submit">登入</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2019-2100</p>
            </form>
        </div>
    </div>
</body>

</html>
