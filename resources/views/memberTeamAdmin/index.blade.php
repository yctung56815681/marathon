<!DOCTYPE html>
<html lang="en">

        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            
                <title>團體會員資料管理</title>
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
                        /* background-color:#F0F8FF; */
                        display: inline-block;
            
                    }
            
                    .content {}
            
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
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
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
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            賽事管理
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <a class="dropdown-item" href="#">賽事新增</a>
                        <a class="dropdown-item" href="#">賽事列表</a>
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
{{-- ============== --}}
<div class="Right">
    <div class="p-3 mb-1 bg-secondary text-white text-center ">團體會員資料列表</div>  
    <div>

        {{-- ================================ --}}
        <table class="table table-striped">
            <div class="form-row">
                <thead>
                  <tr>
                   <th  width="10%" class="text-center" scope="col">團體名稱</th>
                    <th  width="70%" class="text-center" scope="col">團體成員</th>
                  <th width="20%" class="text-center" scope="col"><a href="/memberAdmin/create" class="btn btn-success pull-right">新增會員資料</th>
                  </tr>
                </thead>
                <div>
                <tbody>
                        <tr>
                                <th  scope="row"  class=" text-black text-center">統一超商</th>
                             
                                <td ><button type="button" class="btn btn-outline-primary"style="width:100px">陳11</button>
                                </td>
                                <td ><button type="button" class="btn btn-outline-primary"style="width:100px">陳11</button>
                                </td>
                                <td ><button type="button" class="btn btn-outline-primary"style="width:100px">陳11</button>
                                </td>
                        </tr>
                        <tr>
                                <th  scope="row"  class=" text-black text-center">統一超商</th>
                                <td colspan="2"><button type="button" class="btn btn-outline-primary"style="width:100px">陳11</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                </td>
                        </tr>
                        <tr>
                                <th  scope="row"  class=" text-black text-center">統一超商</th>
                                <td colspan="2"><button type="button" class="btn btn-outline-primary"style="width:100px">陳11</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                </td>
                        </tr>
                        <tr>
                                <th  scope="row"  class=" text-black text-center">統一超商</th>
                                <td colspan="2"><button type="button" class="btn btn-outline-primary"style="width:100px">陳11</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                <button type="button" class="btn btn-outline-primary" style="width:100px">陳林李李</button>
                                </td>
                        </tr>


                 
                </tbody>
              </table>



</body>
</html>
