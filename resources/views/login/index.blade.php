<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login</title>
    <style>
    .login{
        
        text-align: center;
        margin:100px auto;
        width: 500px;
        height: 500px;
        position: relative;
        background-color: violet;
        color:#fff;font-family:'微軟正黑體'; text-align:center;font-size:16px;
        background:rgba(0,0,0,0.6);margin-bottom:10px;
    } 
    
    .back{
        background-image: url("img/1008435.jpg");
        background-size: cover;
       	
    }
    img{
        width: 20%;
        height: 20%;
    }

 
    

    
    </style>


</head>
<body class="back">
    <form action="http://localhost:8000/">
        <div class="form-control dark login">
            <img src="img/iiilogo.png" alt="">
            <br>
            <br>
            <br>
            <h2>Sign in</h2>
            <div >
                    <input class="form-control" placeholder="Account" id="memberAccount" type="text">
            </div>
            
            <br>
            <br>
            <div>
                    <input class="form-control" placeholder="Password" id="memberKeyword" type="text">
            </div >

            <br>
            <br>
            <div >
                    <input class="btn-primary form-control" type="submit" value="login">
            </div>
            
           

        </div>
    </form>
   
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
{{-- <body>
    <h1>/resources/views/login/index.blade.php</h1><hr>
    {{$view}}<hr>
    <a href="/">Home</a> --}}
</body>
</html>