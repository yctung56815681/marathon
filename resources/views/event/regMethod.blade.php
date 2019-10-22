<script>
    // Sid='2019/11/10 23:59:59';
    Sid='';
    if(Date.parse('{{ $eventSignupStartTime }}')> Date.now() ){
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

<!--報名與報到辦法-->
<body class="body_detail">

    <button class="toggle_btn">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <section class="header">
        <div class="outer">
            <div class="site_logo">
                <a href="/">
                    運動報名網
                    {{-- <img src="/NewCSS/images/logo_zepro_w.png">--}}
                </a>

            </div>
        </div>
    </section>

    <section class="header_banner">
        <a href="/event/{{$city}}/{{$year}}/{{$month}}">
            <img src="{{ URL::asset("img/{$city}{$year}{$month}.jpg") }}" class="img-fluid">
        </a>
        {{-- <a href="https://www.ctrun.com.tw/page.aspx?CF_ActCode=AM200105&id=363">
            <div class="mobile">
                <img src="https://www.ctrun.com.tw/image/AM200105/ac4df6956b6547e19970f7ac71c4aae3.jpg">
            </div>
        </a> --}}
    </section>



    <section class="main">
        <div class="outer">
            <div class="row01">
                <div id="menu_div" class="navi_outer">
                    <ul class='navi_menu'>
                        <li><a href="/event/{{$city}}/{{$year}}/{{$month}}">最新消息</a></li>
                        <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/regMethod">
                            <i class="fas fa-hand-point-right"></i>&nbsp;報名辦法</a>
                        </li>
                        <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/rewardMethod">競賽獎勵</a></li>
                        <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/actSpec">活動規範</a></li>
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
                                {{-- <span id="name_txt">2020 ZEPRO RUN<br /> {{$list["location"]}}</span> --}}
                                <span id="name_txt">{{$year}} ZEPRO RUN<br /> {{ $cityNameCh }}</span>
                            </div>
                        </div>

                        <div class="gray_bg">
                            <div class="box">
                                <div class="info">
                                    <i class="fas fa-calendar-alt"></i>
                                    {{-- <span id="date_txt">{{$list["time"]}}</span><br /> --}}
                                    <span id="date_txt">{{ $eventRunStartTimeF }}</span><br />
                                    <i class="fas fa-flag"></i>
                                    {{-- <span id="km_txt">{{$list["distance"]}} </span> --}}
                                    <span id="km_txt">{{$eventDL }}~{{$eventDM }}~{{$eventDS }}</span>
                                    <br />
                                    <i class="fas fa-map-marker-alt"></i>
                                        {{-- <span id="place_txt">{{$list["place"]}} </span> --}}
                                        <span id="place_txt">{{ $eventAddr }}</span>
                                        <br />
                                    <i class="fas fa-phone"></i>
                                    {{-- <span id="Label1">{{$list["phone"]}} </span> --}}
                                    <span id="Label1">{{ $eventTel }} </span>
                                </div>
                            </div>
                        </div>

                        <div class="other_link">
                            <div class="btn111" style="font-size: 1.2em;">
                                <span id="remain_txt"><span>報名截止剩餘:</span></span>
                                <span id="remain_time">Label</span>
                            </div>
                        </div>

                        {{--以上為測試替換區--}}
                        <div class="other_link">
                            <a href="/signup/changhua/2020/02" id="SignTitle"
                                class="btn active">我要報名／Signup</a>
                            <a href="SignQuery.aspx?CF_ActCode=AM200105#MobileStart" id="SignQuery"
                                class="btn">報名查詢與修改／Query&Modify</a>
                        </div>

                    </div>
                </div>


                <form id="form1">

                    <div class="detail_div">

                        <link rel="stylesheet" href="{{ URL::asset('NewCSS/css/jquerycollapse.css') }}">

                        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
                            rel="stylesheet">
                        <link rel="stylesheet"
                            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
                            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
                            crossorigin="anonymous">

                        <link href="{{ URL::asset('NewCSS/css/StyleSheet.css') }}" rel="stylesheet" />
                        {{-- 本頁的jquerycdn檔從此處匯入 --}}
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                            crossorigin="anonymous">
                        </script>


                        <div id="ContentPlaceHolder1_content">

                                <h2 style="text-align: center;">
                                    <span style="font-weight:800;">報名與報到辦法</span>
                                </h2>


                                <!--以下要能替換內容-->
                                <center>                                  
                                <h3><div class="titleLeft">報名方式</div></h3>
                                </center>

                                {{-- <div class="content">&bull; 本次活動僅採用網路報名，
                                    <span class="red">不接受現場報名</span>。<br />
                                    &bull; 繳費後<span class="red">增加團員方式</span>:進入報名查詢修改後，於付款頁面最下方按下「返回修改」按鈕即可新增團員，並取得新的
                                    <span class="red">差額繳費單</span>。<br />
                                    &bull; <span class="red">團報20人</span>以上如欲索取團報EXCEL檔案，請按此
                                    <a href="https://www.ctrun.com.tw/image/Document/AM200105/da358160c1c644a9ae26f4d6b1dda6c1.xlsx">下載</a>並E-Mail到zeprorun@gmail.com。<br />
                                    &bull; <span class="red">繳費方式</span>：7-11、全家便利商店繳費、信用卡線上繳費<br />
                                    &bull; Ibon繳費流程：憑ibon代號至全省7-11超商門市&rarr;ibon機器螢幕首頁&rarr;點選【代碼輸入】&rarr;請輸入表格內的繳款碼&rarr;確認繳費項目&rarr;點選【確認，列印繳費單】&rarr;持繳費單<br />
                                    到超商櫃檯繳費。(提醒您，ibon繳費需自付兩萬元以下每筆NT 30元手續費)<br />
                                    &bull; 繳費完成後約30分鐘後將收到簡訊通知，也可到「報名查詢與修改」<span class="red">查詢繳費狀態</span>。<br />
                                    &bull; 繳費代碼逾期未繳者，若已逾報名時間，視同放棄報名資格。<br />
                                </div> --}}
                                <p>{!! $eventContentSignup ->eventMethodtext1 !!}</p>


                                <p>&nbsp;</p>
                                {{-- <center>
                                    <img src="{{ URL::asset("img/pt03.jpg") }}"
                                         style="width: 100%; max-width: 100%;" />
                                </center> --}}
                                <center>
                                    <img src="/img/{{ $eventContentSignup ->eventMethodImage }}"
                                         style="width: 100%; max-width: 100%;" />
                                </center>
                                <p>&nbsp;</p>



                                <center>
                                <h3><div class="titleLeft">退費辦法</div></h3>
                                </center>

                                {{-- <div class="content">&bull; 報名時間過後<span
                                     class="red">恕不接受退費申請</span>，請於報名截止日前提出申請。<br />
                                     &bull; 退費申請將收取<span class="red">100元行政服務費</span>，於退費申請金額內扣除。<br />
                                     &bull; 一旦確認取消即喪失活動參與權、物資獎贈品所有權，亦無法重新報名。
                                </div> --}}
                                <p>{!! $eventContentSignup ->eventMethodtext2 !!}</p>

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

                <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/regMethod">
                    <i class="fas fa-hand-point-right"></i>&nbsp;報名辦法</a>
                </li>
                <div style='width:100%' ;>
                    <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'>
                    </div>
                </div><br />

                <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/rewardMethod">競賽獎勵</a></li>
                <div style='width:100%' ;>
                    <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'>
                    </div>
                </div><br />

                <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/actSpec">活動規範</a></li>
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
        </div>
    </nav>



    <!-------JavaScript特定日期倒數計時 START-------->
    <script type="text/javascript">

        if (Sid == "") {
            remain_time.innerHTML = "";
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

                if(Date.parse('{{ $eventRunStartTime }}') <=  Date.now()  ){         
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