<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>路跑報名</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>

    <style>
        .action {
            background-color: yellow;
        }

        .content {
            background-color: bisque;
            padding: 20px;
        }

        .countDown {
            background-color: brown;
        }

        .detail {
            border: 1px solid black;
            margin-top: 10px;
            padding: 20px;
            font-size: 15px;
            height: 500px;
            font-size: 3em;
            text-align: center;
            line-height: 150px;
        }
    </style>
</head>

<body>
    <!-- <div class="container"> -->
    <div class="row">
        <div class="col-md-12 navList">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#" style="color: red">III Marathon</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
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
                </div>
            </nav>
        </div>
        <div class="col-md-12 header">
            <img src="{{ URL::asset("img/changhua202002.jpg") }}" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-md-10 content">
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

                        <div class="detail">
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
        <div class="col-md-2 countDown">這是倒數計時</div>
    </div>

    <!-- </div> -->
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