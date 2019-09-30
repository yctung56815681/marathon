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
                    {{-- <img src="{{ URL::asset('NewCSS/images/logo_zepro_w.png') }}"> --}}
                    <img src="/NewCSS/images/logo_zepro_w.png"></a>
                </a>
                    
            </div>
        </div>
    </section>

    <section class="header_banner">
        <a href="/">   
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
                                        <span id="place_txt"> 宜蘭冬山河親水公園</span></a><br />
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
                            <a href="/signup/changhua/2020/02" id="SignTitle"
                                class="btn active">我要報名／Signup</a>
                            <a href="SignQuery.aspx?CF_ActCode=AM200105#MobileStart" id="SignQuery"
                                class="btn">報名查詢與修改／Query&Modify</a>
                            <a href="#" id="PostURL" class="btn">參賽名單與包裹查詢</a>
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

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                            crossorigin="anonymous"></script>
                        <div id="ContentPlaceHolder1_content">
                            <div class="Middle">
                                <center>
                                    <div class="titleCenter">報名與報到辦法</div>
                                    &nbsp;
                                    
                                    <!--以下要能替換內容-->
                                    <div class="titleLeft">報名方式</div>

                                    <div class="content">&bull; 本次活動僅採用網路報名，<span class="red">不接受現場報名</span>。<br />
                                        &bull; 繳費後<span
                                            class="red">增加團員方式</span>:進入報名查詢修改後，於付款頁面最下方按下「返回修改」按鈕即可新增團員，並取得新的<span
                                            class="red">差額繳費單</span>。<br />
                                        &bull; <span class="red">團報20人</span>以上如欲索取團報EXCEL檔案，請按此<a
                                            href="https://www.ctrun.com.tw/image/Document/AM200105/da358160c1c644a9ae26f4d6b1dda6c1.xlsx">下載</a>並E-Mail到zeprorun@gmail.com。<br />
                                        &bull; <span class="red">繳費方式</span>：7-11、全家便利商店繳費、信用卡線上繳費<br />
                                        &bull;
                                        Ibon繳費流程：憑ibon代號至全省7-11超商門市&rarr;ibon機器螢幕首頁&rarr;點選【代碼輸入】&rarr;請輸入表格內的繳款碼&rarr;確認繳費項目&rarr;點選【確認，列印繳費單】&rarr;持繳費單<br />
                                        到超商櫃檯繳費。(提醒您，ibon繳費需自付兩萬元以下每筆NT 30元手續費)<br />
                                        &bull; 繳費完成後約30分鐘後將收到簡訊通知，也可到「報名查詢與修改」<span class="red">查詢繳費狀態</span>。<br />
                                        &bull; 繳費代碼逾期未繳者，若已逾報名時間，視同放棄報名資格。<br />
                                        &bull; <span style="color:#e74c3c;">若需<span
                                                class="red">開立收據</span>請於填寫報名資料時寫上統編與抬頭，報名結束後恕不接受補開</span>。<br />
                                        &bull; 如有<span class="red">未收到賽事物資情況</span>(含參賽禮、早鳥禮、加購品、敘獎獎項等活動相關物品)，最遲請於<span
                                            class="red">活動結束後<span
                                                style="color:#e74c3c;">3</span>個工作天內</span>與主辦單位聯繫。<br />
                                        &bull; 凡報名參賽者，即視為認同本活動之各項內容及規定，若有未盡事宜以大會公告為主。</div>

                                    <div class="titleLeft">團體招待</div>

                                    <div class="content">凡報名人數達30人，大會活動當天將安排1處專屬休息區。達60人安排2處，依此類推，同時可獲得ZEPRO
                                        RUN專屬團旗(團名將依據報名時登記團名製作，恕不接受事後更換團名，團旗將由大會直接懸掛於休息帳篷，活動結束可自行拆下帶回)。</div>

                                    <center><img
                                            src="https://www.ctrun.com.tw/image/AI191124/1bb7fcdbbe4b450babedf94271afcc31.png"
                                            style="width: 100%; max-width: 100%;" /></center>

                                    <div class="titleLeft">報到方式</div>

                                    <div class="content">一律採用<span class="red">郵寄報到</span>，郵資及處理費如下：<br />
                                        01～02人：$100元、03～05人：$200元<br />
                                        06～10人：$300元、11～20人：$400元<br />
                                        21～30人：$500元、31～50人：$600元<br />
                                        51～80人：$800元、81人以上：$1,000元<br />
                                        &bull; 主辦單位將於<span
                                            class="red">活動前一至二週</span>將所有物資包裹寄達。請務必填寫正確的郵寄地址(請勿填寫郵政信箱)，郵寄物品如因地址不全或無人簽收而造成包裹無法送達者，將不再另行補寄。<br />
                                        &bull; 收到參加物品後即視為報到完成，請於活動當天前往會場集合即可，活動當日恕不開放現場報到領取參加物品。晶片、號碼布等物資請妥善保管，<span
                                            class="red">若有缺漏請最慢於活動<span
                                                style="color:#e74c3c;">前三日</span>反應</span>，否則一律視為遺失處理。<br />
                                        &bull; <span
                                            class="red">補發：</span>晶片或號碼布遺失或未帶補發者，可於活動當日開始前至成績列印區辦理新晶片及號碼布(數量有限)，辦理時須出示報名人身分證，並補繳手續費$100元，辦理新晶片需另付押金$100元(活動後可退還)。活動當日因現場作業不便，請留下寄送地址與收件人姓名電話，日後補寄手續費收據。<br />
                                        &bull; <span
                                            class="red">外國與離島參賽者</span>：採現場服務台報到(不提供郵寄以免延誤)，活動當日起跑前受理檢錄報到(處理費參照第一點費用表計算)。
                                    </div>

                                    <div class="titleLeft">寄物方式</div>

                                    <div class="content">&bull; 選手一律以置物袋寄物並貼好寄物號碼單(號碼布上有寄物號碼單)，賽後憑號碼布領回寄物。<br />
                                        &bull; 貴重物品請自行保管，若有遺失，大會概不負責。<br />
                                        &bull; 健康組恕不提供寄物。</div>

                                    <div class="titleLeft">退費辦法</div>

                                    <div class="content">&bull; 報名時間過後<span
                                            class="red">恕不接受退費申請</span>，請於報名截止日前提出申請。<br />
                                        &bull; 退費申請將收取<span class="red">100元行政服務費</span>，於退費申請金額內扣除。<br />
                                        &bull; 一旦確認取消即喪失活動參與權、物資獎贈品所有權，亦無法重新報名。</div>
                                </center>

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
    <!--SweetAlert2-->
    <script type="text/javascript">
        function successalert(t1, t2) {
            swal({
                title: t1,
                text: t2,
                type: 'success'
            });
        }
    </script>

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