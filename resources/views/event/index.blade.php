{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>/resources/views/event/{{$city}}{{$year}}{{$month}}.blade.php</h1><hr>
    <img src="{{ URL::asset("img/{$city}{$year}{$month}.jpg") }}" id="img"/><hr>
    <a href="/login/{{ $city }}/{{ $year }}/{{$month}}">Sign Up</a><hr>

    <a href="/">Home</a>
</body>
</html> --}}

<script>Sid='2019/10/14 23:59:59';</script>
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
        2020 ZEPRO RUN 全國半程馬拉松 - 宜蘭場
    </title>

    <!--CIS ico-->
    {{-- <link rel="shortcut icon" href="image/favicon.ico" />
    <link rel="bookmark" href="image/favicon.ico" /> --}}

    <!-- Bootstrap CSS-->
    <link href="{{ URL::asset('NewCSS/css/style.css') }}" rel="stylesheet" />


    <!--引用RWD table css-->
    <link href="{{ URL::asset('NewCSS/css/wdn_responsive-table.css') }}" rel="stylesheet" />

    <!--引用Font Awesome icon圖案-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />


    <!--引用縣市js檔-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-twzipcode@1.7.14/jquery.twzipcode.min.js"></script>
   


</head>


<body class="body_detail">
    {{-- <div id="twzipcode" ></div> --}}
    <script> $("#twzipcode").twzipcode();</script>

    <button class="toggle_btn">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <section class="header">
        <div class="outer">
            <div class="site_logo">
                <a href="/">
                    {{-- <img src="{{ URL::asset('/NewCSS/images/logo_zepro_w.png') }}"> --}}
                    <img src="/NewCSS/images/logo_zepro_w.png">
                </a>
            </div>
        </div>
    </section>

    <section class="header_banner">{{-- 更改大圖示 --}}
        {{-- <a href="/">
            <div class="web">              
                <img src="{{ URL::asset("/img/{$city}{$year}{$month}.jpg") }}">
            </div>
        </a> --}}
        <a href="/">   
            <img src="{{ URL::asset("img/{$city}{$year}{$month}.jpg") }}" class="img-fluid">
            {{-- <img src="img/{{$city}}{{$year}}{{$month}}.jpg" class="img-fluid"> --}}
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
                        <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/actSpec">活動規範</a></li> 
                        <li><a href="/signup/{{$city}}/{{$year}}/{{$month}}">我要報名</a></li>
                        <li><a href="/query/{{$city}}/{{$year}}/{{$month}}">報名查詢與修改</a></li>    
                    <ul>
                </div>
            </div>

            <a name="MobileStart"></a>
            <div class="row02">
                <div class="countdown_div">
                    <div id="outerdiv" class="countdown_outer" style="display: block;">
                        {{-- <div class="other_link">
                            <div class="btn111" style="font-size: 1em;">
                                <span id="remain_txt"><span>報名截止剩餘:</span></span>
                                <span id="remain_time">Label</span>
                            </div>
                            <div style="text-align: center; width: 100%; height: 50px; font-size: 22px">
                                <span id="name_txt">2020 ZEPRO RUN<br /> 全國半程馬拉松 - 宜蘭場</span>
                            </div>
                        </div>


                        <div class="gray_bg">
                            <div class="box">
                                <div class="info">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span id="date_txt"> 2020年01月05日 (星期日)</span><br />
                                    <i class="fas fa-flag"></i>
                                    <span id="km_txt"> 21K / 10K / 5K</span>
                                    <br />
                                    <i class="fas fa-map-marker-alt"></i><a
                                        href="http://maps.google.com.tw/maps?q=宜蘭冬山河親水公園>">
                                        <span id="place_txt"> OOO公園</span></a><br />
                                    <i class="fas fa-phone"></i>
                                    <span id="Label1"> 0800-271-637(工作日9:00~18:00)</span>
                                </div>
                            </div>
                        </div> --}}

                        <div class="other_link">
                            <div class="btn111" style="font-size: 1em;">
                                <span id="remain_txt"><span>報名截止剩餘:</span></span>
                                <span id="remain_time">Label</span>
                            </div>
                            <div style="text-align: center; width: 100%; height: 50px; font-size: 22px">
                                <span id="name_txt">2020 ZEPRO RUN<br /> {{$list["location"]}}</span>
                            </div>
                        </div>


                        <div class="gray_bg">
                            <div class="box">
                                <div class="info">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span id="date_txt">{{$list["time"]}}</span><br />
                                    <i class="fas fa-flag"></i>
                                    <span id="km_txt">{{$list["distance"]}} </span>
                                    <br />
                                    <i class="fas fa-map-marker-alt"></i><a
                                        href="http://maps.google.com.tw/maps?q=宜蘭冬山河親水公園>">
                                        <span id="place_txt">{{$list["place"]}} </span></a><br />
                                    <i class="fas fa-phone"></i>
                                    <span id="Label1">{{$list["phone"]}} </span>
                                </div>
                            </div>
                        </div>



                        {{--以上為測試替換區--}}
                        <div class="other_link">
                            <a href="/signup/{{$city}}/{{$year}}/{{$month}}" id="SignTitle"
                                class="btn active">我要報名／Signup</a>
                            <a href="/query/{{$city}}/{{$year}}/{{$month}}" id="SignQuery"
                                class="btn">報名查詢與修改／Query&Modify</a>
                            {{-- <a href="#" id="PostURL" class="btn">參賽名單與包裹查詢</a> --}}
                        </div>

                    </div>
                </div>


                <form id="form1">
                   
                    <div class="detail_div">
                     <!--中間可替換內容處-->
                        {{--要更改路徑格式--}}
                        <link rel="stylesheet" href="{{ URL::asset('NewCSS/css/jquerycollapse.css') }}">
                        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
                            rel="stylesheet">

                        <link rel="stylesheet"
                            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
                            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
                            crossorigin="anonymous">

                        {{--要更改路徑格式--}}
                        <link href="{{ URL::asset('NewCSS/css/StyleSheet.css') }}" rel="stylesheet" />

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                            crossorigin="anonymous">
                        </script>
                        <div id="ContentPlaceHolder1_content">
                            <h2 style="text-align:center">最新消息</h2>
                            <!--以下要能替換內容-->
                            
                            <h3><i class="fa fa-chevron-down"></i>團體報名</h3>

                            <div class="fold o" style="display: block">團報20人以上如欲索取團報EXCEL檔案，請按此<a
                                    href="https://www.ctrun.com.tw/image/Document/AM200105/da358160c1c644a9ae26f4d6b1dda6c1.xlsx">下載</a>並E-Mail到zeprorun@gmail.com。
                            </div>

                            <h3><i class="fa fa-chevron-down"></i>報名三重送</h3>

                            <div class="fold o" style="display:block">
                                <p><img src="https://www.ctrun.com.tw/image/AM200105/b2b1e5063695419aa6ac3827d84c9d0c.jpg"
                                        style="max-width: 100%; width: 100%;" /></p>

                                <p>報名三重送，越早報名將享有越多好康!</p>

                                <p>➤第一重搶先登記：20雙麒麟四驅慢跑鞋<br />
                                    麒麟四驅慢跑鞋(市價:$2,380)：雙避震雙支撐慢跑鞋款，擁有絕佳穩定性適合日常跑步使用。<br />
                                    活動時間：2019/8/20至8/26<br />
                                    活動資格：8/26(一)前完成預先登記，並於8/27(二)~8/28(三)內完成繳費<br />
                                    得獎公告：於早鳥活動結束後於本網頁公布得獎名單<br />
                                    領獎方式：<br />
                                    -請得獎者於領獎時間內<span style="color:#e74c3c;">主動聯繫主辦單位</span>驗證得獎資格與核對尺寸，<span
                                        style="color:#e74c3c;">逾期視同放棄</span>！<br />
                                    -獎品於活動當天憑「號碼布」至現場銷售區領取。</p>

                                <p>➤第二重限量早鳥禮：3,000雙早鳥禮運動慢跑襪乙雙<br />
                                    破PB慢跑襪(市價:$280)：輕壓縮設計可降低跑步產生的腫脹感。<br />
                                    活動時間：2019/9/9(一)前˙<br />
                                    活動資格：於9/9完成繳費 前3,000名，退費則取消資格<br />
                                    得獎公告：於早鳥活動結束後兩周內於本網頁公布得獎名單<br />
                                    領獎方式：隨報名物資一同寄送</p>

                                <p>➤第三重40萬大禮抽抽樂：100雙國旗路跑鞋🎉<br />
                                    柏油路跑國旗鞋(市價:$3,580)：台灣國旗配色設計搭上豹長仿生抓地學，讓你跑步過彎更加穩定!<br />
                                    活動時間：2019/9/30(一)前<br />
                                    活動資格：於9/30前完成繳費，退費則取消資格<br />
                                    得獎公告：無，抽獎券將隨物資寄送<br />
                                    領獎方式：於活動現場唱名抽出<br />
                                    - 尺寸以現場抽獎順序為主/獎贈品恕不提供挑色換款。<br />
                                    特別注意：<br />
                                    -請勿搶23:59最後一秒繳費，以實際入帳為準。<br />
                                    -獎贈品恕不可挑色，隨機顏色出貨，獎贈品不適用鑑賞期恕不接受退換。<br />
                                    -主辦單位保有活動最終解釋權。</p>
                            </div>

                            <h3><i class="fa fa-chevron-down"></i>早鳥名單公告</h3>

                            <div class="fold o" style="display:block">早鳥名單公告，<a
                                    href="https://www.ctrun.com.tw/image/Document/AM200105/0c05e80cc38046d699a23ec31b27bfc9.pdf"
                                    target="_blank">【名單連結】</a>&nbsp;恭喜名單內跑友可獲得早鳥禮運動慢跑襪乙雙，獎品隨物資一同寄送(獎贈品恕不挑色換款)。</div>

                            <h3><i class="fa fa-chevron-down"></i>首日瘋抽獎名單公告</h3>

                            <div class="fold o" style="display:block">恭喜以下得獎的跑友，請於2019/9/20 (五) 23:59
                                以前傳訊息至粉絲專頁領獎喔！<br />
                                注意事項：<br />
                                1. 獎品於活動當天憑「號碼布」至現場銷售區領取！<br />
                                2. 請於2019/9/20 (五)23:59 以前傳訊息至<a href="https://reurl.cc/Qr7lM"
                                    target="_blank">全統運動報名網</a>領獎！<br />
                                3. 如報名期間內有退費，將取消得獎資格<br />
                                4. 請得獎者於領獎時間內<strong><span
                                        style="color:#e74c3c;">主動聯繫</span></strong>主辦單位驗證得獎資格與核對尺寸，<span
                                    style="color:#e74c3c;"><strong>逾期視同放棄</strong></span><br />
                                5. 主辦單位擁有最終活動解釋權力
                                

                                <div><img alt=""
                                        src="https://www.ctrun.com.tw/image/AM200105/af8f7cc0d753469bb49a822a0e262a5b.jpg"
                                        style="max-width: 100%; width: 100%;" /></div>
                            </div>

                            <h3><i class="fa fa-chevron-down"></i>招募熱血、熱情、熱心志工夥伴</h3>

                            <div class="fold o" style="display: block">
                                <p>一起來感受ZEPRO路跑的熱情活力，歡迎喜愛陽光運動的夥伴一同熱情參與，期待有您的加入<br />
                                    我們急需熱情的你，一起來為跑者加油！<br />
                                    報名連結：<a href="https://reurl.cc/GkZApA"
                                        target="_blank">https://reurl.cc/GkZApA</a><br />
                                    ⚠人數額滿或組別額滿、依主辦單位安排為主<br />
                                    ⚠主辦單位擁有最終調整權力<br />
                                    ⚠注意事項：<br />
                                    錄取者，主辦單位會以電話或簡訊通知；未錄取則不另行通知。<br />
                                    錄取者若未能依時間參加，請務必提前來電告知！以免系統備註異常，影響後續報名資格。</p>
                            </div>
                        </div>


                        <script>
                            $(function () {
                                $('h3').click(function () {
                                    if ($(this).next('.fold').hasClass('o') == true) {
                                        $(this).find('i.fa').removeClass('fa-chevron-down').addClass(
                                            'fa-chevron-right');
                                        $(this).next('.fold').removeClass('o').slideUp();
                                    } else {
                                        $(this).find('i.fa').removeClass('fa-chevron-right').addClass(
                                            'fa-chevron-down');
                                        $(this).next('.fold').addClass('o').slideDown();
                                    }
                                });
                                // $('.close').click(function () {
                                //     $(this).parent().prev('h3').find('i.fa').removeClass(
                                //         'fa-chevron-down').addClass('fa-chevron-right');
                                //     $(this).parent().removeClass('o').slideUp();
                                // });
                            });
                           
                        </script>

                    </div>
                </form>
            </div>
        </div>
    </section>




    {{--要更改路徑格式--}}
    <section class="back_top">
        <a href="#">
          <i class="far fa-arrow-alt-circle-up "
             style="font-size:50px; color:rgb(73, 175, 73); position: fixed; bottom:20px; right:20px;"></i>  
    </section>

    <section class="footer">
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
                <li><a href="/event/{{$city}}/{{$year}}/{{$month}}/actSpec">活動規範</a></li>
                <div style='width:100%' ;>
                    <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'>
                    </div>
                </div><br />

                <li><a href="/signup/{{$city}}/{{$year}}/{{$month}}">我要報名</a></li>
                <div style='width:100%' ;>
                    <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'>
                    </div>
                </div><br />
                <li><a href="/query/{{$city}}/{{$year}}/{{$month}}">報名查詢與修改</a></li>
                <div style='width:100%' ;>
                    <div style='width:25%; border-bottom:1px solid; border-bottom-color:#CECECE; margin:0px auto;'>
                    </div>
                </div><br />
        </div>
    </nav>

   
    {{-- 彈出視窗模組 --}}
    {{-- <div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" data-toggle="modal" role="dialog"
        aria-labelledby="myLargeModalLabel" style="display:none;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <img src="https://www.ctrun.com.tw/image/AM200105/40ed57d0a378480b8fef41beb76a6e4a.jpg"
                    style="max-width: 100%" data-dismiss="modal" />
                <a class="closebutton">
                    <img src="https://www.ctrun.com.tw/image/cancel-button.png" style="max-width: 100%"
                        data-dismiss="modal" /></a>
            </div>
        </div>
    </div> --}}
    


    <!-------JavaScript特定日期倒數計時 START-------->
    <script type="text/javascript">
        if (Sid == "") {
            remain_time.innerHTML = "";
        } else {
            var Target_date = new Date(Sid);

            function Check_Time() {

                var Time_now = new Date();

                var Date_C = new Date(Target_date - Time_now);
                var Cal_Day = Math.floor(Date_C.getTime() / (24 * 60 * 60 * 1000));
                var Cal_Hour = Date_C.getUTCHours();
                var Cal_Minute = Date_C.getUTCMinutes();
                var Cal_Second = Date_C.getUTCSeconds();

                remain_time.innerHTML = Cal_Day + "天" + Cal_Hour + "時" + Cal_Minute + "分" + Cal_Second + "秒";
            }
            var mm = window.setInterval("Check_Time()", 1000);
        }
    </script>
    <!-------JavaScript特定日期倒數計時 END-------->
   

    <div id="body_overly"></div>
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="{{ URL::asset('NewCSS/js/jquery.countdown.js') }}"></script>
    <script src="{{ URL::asset('NewCSS/js/script.js') }}"></script>
    <!--這行是驗證用，要放在jquery後面-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validation-unobtrusive/3.2.11/jquery.validate.unobtrusive.min.js">
    </script>
    

</body>

</html>