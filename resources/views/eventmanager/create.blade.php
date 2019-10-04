<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
        
        

        <title>個人會員資料管理</title>
        <style>
            .Top {
                width: auto;
                height: 200px;
                position: relative;

                background-image: url("/img/header.jpg");
                background-size: cover;
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
                background-color:#F0F8FF;
                display: inline-block;

            }
            #eventBag{
                padding: 10px;
            }


        </style>


    </head>

<body>
    <!--------------------------------------------------------------------------------------TOP-------------------------------------------------------------------------------------->
    <div class="Top">



    </div>

    <!--------------------------------------------------------------------------------------content-------------------------------------------------------------------------------------->
    <div class="Left">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            會員資料管理
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <a class="dropdown-item" href="/memberAdmin">個人會員管理</a>
                        <a class="dropdown-item" href="#">團體會員管理</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link " type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            賽事管理
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <a class="dropdown-item" href="/eventManager">賽事列表</a>
                        {{-- <a class="dropdown-item" href="#">賽事編輯</a> --}}
                    </div>
                </div>
            </div>
            <div class="card">
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
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            賽事相片管理
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <a class="dropdown-item" href="#">賽事相片新增</a>
                        <a class="dropdown-item" href="#">賽事相片列表</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            贊助商管理
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <a class="dropdown-item" href="#">贊助商新增</a>
                        <a class="dropdown-item" href="#">贊助商列表</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="Right" id="rightFunction">
       
           <div id="eventBag">
                賽事活動名稱 
                
                <input class="form-control col-8" type="text">
                <br>
                活動舉辦城市 
                <br>
                <select class="form-control col-8">
                        <option value="基隆市">基隆市</option>
                        <option value="台北市">台北市</option>
                        <option value="新北市">新北市</option>
                        <option value="桃園市">桃園市</option>
                        <option value="新竹市">新竹市</option>
                        <option value="新竹縣">新竹縣</option>
                        <option value="苗栗縣">苗栗縣</option>
                        <option value="台中市">台中市</option>                                          
                        <option value="彰化縣">彰化縣</option>
                        <option value="南投縣">南投縣</option>
                        <option value="雲林縣">雲林縣</option>
                        <option value="嘉義市">嘉義市</option>                       
                        <option value="嘉義縣">嘉義縣</option>
                        <option value="台南市">台南市</option>
                        <option value="台南縣">台南縣</option>
                        <option value="高雄市">高雄市</option>
                        <option value="高雄縣">高雄縣</option>
                        <option value="屏東縣">屏東縣</option>
                        <option value="台東縣">台東縣</option>
                        <option value="花蓮縣">花蓮縣</option>
                        <option value="宜蘭縣">宜蘭縣</option>
                        <option value="澎湖縣">澎湖縣</option>
                        <option value="金門縣">金門縣</option>
                        <option value="連江縣">連江縣</option>
                        </select>
                <br>
                賽事活動地點                
                <input class="form-control col-8" type="text">
                <br>
                賽事規格-報名名稱-定價
                <br>
                <div >
                    <br>
                    長程賽事名稱 : <input type="text"> -- 長程賽事里程 : <input style="text-align:right" type="text"> km -- 長程報名價格 : <input style="text-align:right" type="text"> 元
                    <br>
                    中程賽事名稱 : <input type="text"> -- 中程賽事里程 : <input style="text-align:right" type="text"> km -- 中程報名價格 : <input style="text-align:right" type="text"> 元
                    <br>
                    短程賽事名稱 : <input type="text"> -- 短程賽事里程 : <input style="text-align:right" type="text"> km -- 短程報名價格 : <input style="text-align:right" type="text"> 元
                    <br>
                </div>
                
                <br>
                
                活動報名開始時間               
                <input class="form-control col-2" type="date">
                <br>
                活動報名截止時間               
                <input class="form-control col-2" type="date">
                <br>
                賽事活動開始時間               
                <input class="form-control col-2" type="date">
                <br>
                賽事活動終止時間               
                <input class="form-control col-2" type="date">
             
                <br>
                主辦連絡電話
                <input class="form-control col-2" type="text">
                <hr>
                <hr>
                最新消息-圖片
                <input class="form-control col-8" type="text">
                <br>
                最新消息-團體報名
                <textarea class="form-control col-8" name="" id="" cols="30" rows="10"></textarea>                
                <br>
                最新消息-團體報名
                <textarea class="form-control col-8" name="" id="" cols="30" rows="10"></textarea>
                <hr>
                <hr>
                報名辦法-圖片
                <input class="form-control col-8" type="text">
                <br>
                報名辦法-報名方式
                <textarea class="form-control col-8" name="" id="" cols="30" rows="10"></textarea>                
                <br>
                報名辦法-退費辦法
                <textarea class="form-control col-8" name="" id="" cols="30" rows="10"></textarea>
                <hr>
                <hr>
                競賽獎勵-圖片
                <input class="form-control col-8" type="text">
                <br>
                競賽獎勵-報名方式
                <textarea class="form-control col-8" name="" id="" cols="30" rows="10"></textarea>                
                <br>
                競賽獎勵-退費辦法
                <textarea class="form-control col-8" name="" id="" cols="30" rows="10"></textarea>
                <hr>
                <hr>
                活動規範-圖片
                <input class="form-control col-8" type="text">
                <br>
                活動規範-規則限制
                <textarea class="form-control col-8" name="" id="test" cols="30" rows="10"></textarea>                
                <br>
                活動規範-違規罰則
                <textarea class="form-control col-8" name="" id="" cols="30" rows="10"></textarea>
                <br>
                <hr>
                
                <hr>
                {{-- <textarea name="editor1" id="editor"></textarea> --}}
                <br>
                <button onclick="getD()">PRESS</button>
         
            
                


           </div>
           {{-- <div class="form-group">
            <label class="col-md-4 control-label" for="okOrCancel"></label>
            <div class="col-md-8">
              <button  name="okOrCancel" class="btn btn-success">確認新增</button>
              <button  id="okOrCancel" name="okOrCancel" class="btn btn-danger">取消新增</button>
            </div>
          </div> --}}
            
           
  
       
    </div>
    
    {{-- <script>
        CKEDITOR.replace( 'editor1' );
        function processData(){
        // getting data
        var data = CKEDITOR.instances.content.getData()
        alert(data);
       }
    </script> --}}
    <script>
        function getD(){
            var getd= document.getElementById('test').value
            console.log(getd);
            }
    </script>
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
