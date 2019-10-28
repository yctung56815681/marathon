<script>
   // Sid='2019/11/10 23:59:59';
   Sid='';
    if(Date.parse('{{ $eventSignupStartTime }}') > Date.now() ){
        //  console.log("SUCCESS");
        Sid='{{ $eventSignupStartTime }}';
    }
    if(Date.parse('{{ $eventSignupStartTime }}') <= Date.now()){
        Sid='{{ $eventSignupEndTime }}'; 
    }
    if( Date.parse('{{ $eventSignupEndTime }}')<= Date.now()){
        Sid='{{ $eventRunStartTime }}';
    }
    if( Date.parse('{{ $eventRunStartTime }}') <= Date.now()){
        Sid='{{ $eventRunEndTime }}';
    } 
</script>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!-- Required meta tags-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="description" />
    <meta name="author" />
    <title>
        {{$year}} ZEPRO RUN 全國半程馬拉松 - {{ $cityNameCh }}
    </title>


    <!-- Bootstrap CSS-->
    <link href="{{ URL::asset('NewCSS/css/style.css') }}" rel="stylesheet" />

    <!--引用RWD table css-->
    <link href="{{ URL::asset('NewCSS/css/wdn_responsive-table.css') }}" rel="stylesheet" />

    <!--引用Font Awesome icon圖案-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

</head>

<!--活動規範-->
<body class="body_detail">

    <button class="toggle_btn">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <section class="header">
        <div class="outer">
            <div class="site_logo">
               <a href="/">運動報名網</a>
            </div>
        </div>
    </section>


    <section class="header_banner">
        <a href="/event/{{$city}}/{{$year}}/{{$month}}">
            <img src="{{ URL::asset("img/{$city}{$year}{$month}.jpg") }}" class="img-fluid">
        </a>
    </section>


    <section class="main">
        <div class="outer">
            <div class="row01">
                <div id="menu_div" class="navi_outer">
                    <ul class='navi_menu'>
                        <li><a href="/event/{{$city}}/{{$year}}/{{$month}}">最新消息</a></li>
                        <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/regMethod">報名辦法</a></li>
                        <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/rewardMethod">競賽獎勵</a></li>
                        <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/actSpec">
                            <i class="fas fa-hand-point-right"></i>&nbsp;活動規範</a>
                        </li>
                        <li><a href="/signup/{{$city}}/{{$year}}/{{$month}}" id="STDK">我要報名</a></li>
                        <li><a href="/query/{{$city}}/{{$year}}/{{$month}}" id="SQDK">報名查詢與修改</a></li>
                    <ul>
                </div>
            </div>

            <a name="MobileStart"></a>
            <div class="row02">
                <div class="countdown_div">
                    <div id="outerdiv" class="countdown_outer" style="display: block;">


                        <div class="other_link">
                            <div style="text-align: center; width: 100%; height: 50px;
                                        font-size: 22px; margin-top:10px">
                                <span id="name_txt">{{$year}} ZEPRO RUN<br /> {{ $cityNameCh }}</span>
                            </div>
                        </div>

                        <div class="gray_bg">
                            <div class="box">
                                <div class="info">
                                    <i class="fas fa-calendar-alt"></i>
                                    {{-- <span id="date_txt">{{$list["time"]}}</span> --}}
                                    <span id="date_txt">{{ $eventRunStartTimeF }}</span>
                                    <br />
                                    <i class="fas fa-flag"></i>
                                    {{-- <span id="km_txt">{{$list["distance"]}} </span> --}}
                                    <span id="km_txt">{{$eventDL }}~{{$eventDM }}~{{$eventDS }}</span>
                                    <br />
                                    <i class="fas fa-map-marker-alt"></i>
                                        {{-- <span id="place_txt">{{$list["place"]}}</span> --}}
                                        <span id="place_txt">{{ $eventAddr }}</span>
                                        <br />
                                    <i class="fas fa-phone"></i>
                                    {{-- <span id="Label1">{{$list["phone"]}} </span> --}}
                                    <span id="Label1">{{ $eventTel }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="other_link">
                            <div class="btn111" style="font-size: 1.2em;">
                                <span id="remain_txt"><span>報名截止剩餘:</span></span>
                                <span id="remain_time"> </span>
                            </div>
                        </div>

                        {{--以上為測試替換區--}}
                        <div class="other_link">
                            <a href="/signup/{{$city}}/{{$year}}/{{$month}}" id="SignTitle"
                                class="btn active">我要報名／Signup</a>
                            <a href="/query/{{$city}}/{{$year}}/{{$month}}" id="SignQuery"
                                class="btn">報名查詢與修改／Query&Modify</a>
                        </div>

                    </div>
                </div>



                <form id="form1">

                    <div class="detail_div">

                        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
                            rel="stylesheet">
                        <link rel="stylesheet"
                            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
                            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
                            crossorigin="anonymous">

                        {{-- 本頁的jquerycdn檔從此處匯入 --}}
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                            crossorigin="anonymous">
                        </script>


                        <div id="ContentPlaceHolder1_content">

                            <h2 style="text-align: center;">
                                <span style="font-weight:800;">活動規範</span>
                            </h2>
                            <p>&nbsp;</p>

                            <!--以下要能替換內容-->
                            <center>
                            <h3>活動規則限制</h3>
                            </center>

                            {{-- <div class="fold o" style="display: block;">
                                <p>&bull; 為維護活動品質，保障選手權益，凡於報名截止後異動組別或更名者皆取消敘獎資格</p>
                                <p>&bull; 活動當天請於鳴槍開始前至指定地點集合，選手檢錄以晶片地墊感應取代人工劃記，提早出發者成績無效。</p>
                                <p>&bull; 出發點位於開放性道路，選手需準時出發，提早出發或出發未通過感應地墊者成績無效，遲到者為安全考量大會有權限制其出發及不予計算成績。</p>
                                <p>&bull; 活動當日無號碼布者，將自動喪失活動資格，且不得進入活動路線，裁判有權終止無號碼布選手進行活動。</p>
                                <p>&bull; 無受檢查點晶片感應或無持有信物者皆判定為失格，不得異議。</p>
                                <p>&bull; 棄賽、賽種異動者皆判定為失格，不得異議。</p>
                            </div> --}}
                            <p>{!! $eventContentActSpecs ->eventRuletext1!!}</p>


                            <p>&nbsp;</p>
                            {{-- <center>
                               <img src="{{ URL::asset("img/pt05.jpg") }}"
                                    style="width: 100%; max-width: 100%;" />
                            </center> --}}
                            <center>
                              <img src="/img/{{ $eventContentActSpecs ->eventRuleImage }}"
                                   style="width: 100%; max-width: 100%;" />
                            </center>
                            <p>&nbsp;</p>


                            <center>
                            <h3>活動違規罰責</h3>
                            </center>

                            {{-- <div class="fold o" style="display: block;">
                                <p>&bull; 違反下列規定者，取消活動成績、並拒絕往後參與大會相關活動。</p>
                                <p>&bull; 互換晶片、配帶他人號碼布或晶片、一人帶二個晶片等違反活動規則者皆判定失格，成績全部不予以計算。</p>
                                <p>&bull; 不遵從裁判引導者。</p>
                                <p>&bull; 活動途中借助車輛(含自行車)或人員陪同(如乘車、扶持&hellip;等)。</p>
                                <p>&bull; 違反運動精神與道德者，如(打架、辱罵裁判或大會工作人員。不當行為或散播謠言或不實言論、行為足以影響大會聲譽者)。</p>
                                <p>&bull;嚴禁非報名者取代報名者參加活動，或(私下轉售者)，代跑者及被代跑者一經查明屬實，由裁判宣佈成績無效外，另將於網路上公佈代跑者及被代跑者姓名(歡迎選手具體舉發)。</p>
                            </div> --}}
                          <p>{!! $eventContentActSpecs ->eventRuletext2!!}</p>

                            <p>&nbsp;</p>
                            <!--以上要能替換內容-->

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </section>





    <section class="back_top">
      <i class="far fa-arrow-alt-circle-up "
         style="font-size:50px; color:rgb(73, 175, 73); position: fixed; bottom:20px; right:20px;"></i>
    </section>


    <nav id="mobile_nav" class="mobile_nav">
        <div id="menu_div_mobile">
            <ul>
                <li><a href="/event/{{$city}}/{{$year}}/{{$month}}">最新消息</a></li>
                <div style='width:100%' ;>
                    <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'>
                    </div>
                </div><br />

                <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/regMethod">報名辦法</a></li>
                <div style='width:100%' ;>
                    <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'>
                    </div>
                </div><br />

                <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/rewardMethod">競賽獎勵</a></li>
                <div style='width:100%' ;>
                    <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'>
                    </div>
                </div><br />

                <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/actSpec">
                    <i class="fas fa-hand-point-right"></i>&nbsp;活動規範</a>
                </li>
                <div style='width:100%' ;>
                    <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'>
                    </div>
                </div><br />

                <div id="STMB">    
                   <li><a href="/signup/{{$city}}/{{$year}}/{{$month}}" >我要報名</a></li>
                   <div style='width:100%' ;>
                        <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'></div>
                   </div><br/>
                </div>   
  
                <div id="SQMB">   
                   <li><a href="/query/{{$city}}/{{$year}}/{{$month}}"  >報名查詢與修改</a></li>
                   <div style='width:100%' ;>
                       <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'></div>
                   </div><br/>
                </div>
            </ul>
                
        </div>
    </nav>


    <!-------JavaScript特定日期倒數計時 START-------->
    <script type="text/javascript">
        if (Sid == "") {
            remain_txt.innerHTML = "<span>--請設定日期參數--</span>";
            // remain_time.innerHTML = "";
            SignTitle.style.display = "none";
            SignQuery.style.display = "none";
            STDK.style.display = "none";
            SQDK.style.display = "none";
            STMB.style.display = "none";
            SQMB.style.display = "none";
        } else {

            if( Sid=='{{ $eventSignupStartTime }}'){
                remain_txt.innerHTML = "<span>離報名開始剩:</span>";
                SignTitle.style.display = "none";
                SignQuery.style.display = "none";
                STDK.style.display = "none";
                SQDK.style.display = "none";
                STMB.style.display = "none";
                SQMB.style.display = "none";
            }else if( Sid=='{{ $eventSignupEndTime }}' ){
                remain_txt.innerHTML = "<span>離報名結束剩:</span>";

            }else if(Sid=='{{ $eventRunStartTime }}' ){
                remain_txt.innerHTML = "<span>離路跑開始剩:</span>";
                SignTitle.style.display = "none";
                STDK.style.display = "none";
                STMB.style.display = "none"; 

            }else if(Sid=='{{ $eventRunEndTime }}' ){
                remain_txt.innerHTML = "<span>離路跑結束剩</span>";
                SignTitle.style.display = "none";
                SignQuery.style.display = "none";
                STDK.style.display = "none";
                SQDK.style.display = "none";
                STMB.style.display = "none";
                SQMB.style.display = "none";
            }

            var Target_date = new Date(Sid);
            function Check_Time() {

                var Time_now = new Date();

                var Date_C = new Date(Target_date - Time_now);
                var Cal_Day = Math.floor(Date_C.getTime() / (24 * 60 * 60 * 1000));
                var Cal_Hour = Date_C.getUTCHours();
                var Cal_Minute = Date_C.getUTCMinutes();
                var Cal_Second = Date_C.getUTCSeconds();

                if(Date.parse('{{ $eventRunStartTime }}')<=  Date.now()  ){         
                    remain_txt.innerHTML = "<span>路跑已經結束</span>";
                    remain_time.innerHTML = "<span></span>";
                }else{
                    remain_time.innerHTML = Cal_Day + "天" + Cal_Hour + "時" + Cal_Minute + "分" + Cal_Second + "秒";
                }  
 
            }

            var mm = window.setInterval("Check_Time()", 1000);
        }
    </script>
    <!-------JavaScript特定日期倒數計時 END-------->


    <!-- 此jquery函式檔放置在文檔末尾，可使頁面加載速度更快 -->
    <script src="{{ URL::asset('NewCSS/js/script.js') }}"></script>
    

</body>

</html>