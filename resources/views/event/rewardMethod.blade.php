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

<!--競賽獎勵-->
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
                    <img src="{{ URL::asset('/NewCSS/images/logo_zepro_w.png') }}"></a>
                </a>
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

                        
                        <div class="other_link">
                            <div style="text-align: center; width: 100%; height: 50px;
                                        font-size: 22px; margin-top:10px">
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

                        <div class="other_link">
                            <div class="btn111" style="font-size: 1em;">
                                <span id="remain_txt"><span>報名截止剩餘:</span></span>
                                <span id="remain_time">Label</span>
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



                <form  id="form1">
                   
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
                                <div class="Middle">
                                    <h2 style="text-align: center;">
                                        <div class="titleCenter">競賽獎勵</div>
                                        &nbsp;
                                    </h2>    

                                    <!--以下要能替換內容-->
                                    <center>
                                        <div class="titleCenter"><img alt=""
                                                src="https://www.ctrun.com.tw/image/AM200105/b132b5f156b3444e89dcb3c26d428220.jpg"
                                                style="width: 100%;" /></div>

                                        <div class="titleCenter">總排名</div>

                                        <div class="content">
                                            ➤半馬組(21公里)錄取方式：依男、女總名次成績，分別錄取前十名頒發獎金、獎盃及獎品，前五名另額外頒發雲豹跑鞋乙雙。<br />
                                            第一名：獎金5,000元+獎盃乙座+雲豹跑鞋乙雙+ZEPRO排汗衣乙件<br />
                                            第二名：獎金4,000元+獎盃乙座+雲豹跑鞋乙雙+ZEPRO排汗衣乙件<br />
                                            第三名：獎金3,000元+獎盃乙座+雲豹跑鞋乙雙+ZEPRO排汗衣乙件<br />
                                            第四名：獎金2,000元+獎盃乙座+雲豹跑鞋乙雙+ZEPRO排汗衣乙件<br />
                                            第五名：獎金1,000元+獎盃乙座+雲豹跑鞋乙雙+ZEPRO排汗衣乙件<br />
                                            第六~十名：獎金800元+獎盃乙座+ZEPRO排汗衣<br />
                                            <br />
                                            ➤路跑組(10公里)錄取方式：依男、女總名次成績，分別錄取前十名頒發獎金、獎盃及獎品。<br />
                                            第一名：獎金3,000元+獎盃乙座+ZEPRO排汗衣乙件<br />
                                            第二名：獎金2,500元+獎盃乙座+ZEPRO排汗衣乙件<br />
                                            第三名：獎金2,000元+獎盃乙座+ZEPRO排汗衣乙件<br />
                                            第四名：獎金1,500元+獎盃乙座+ZEPRO排汗衣乙件<br />
                                            第五名：獎金1,000元+獎盃乙座+ZEPRO排汗衣乙件<br />
                                            第六~十名：獎金500元+獎盃乙座+ZEPRO排汗衣乙件</div>

                                        <div class="titleCenter">分組排名</div>

                                        <div class="content">➤半馬組(21公里)：-
                                            依各分組每組報名人數，每10人錄取取一名(未滿10人仍錄取一名)，最多錄取五名，頒發獎盃乙座+ZEPRO排汗衫乙件。<br />
                                            - 依性別及年齡共分為12組(如下表)
                                            <table style="text-align:center">
                                                <tbody style="text-align:center">
                                                    <tr>
                                                        <th colspan="4" style="text-align:center">
                                                            <p>半馬組</p>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align:center">
                                                            <p>組別</p>
                                                        </th>
                                                        <th style="text-align:center">
                                                            <p>年齡</p>
                                                        </th>
                                                        <th style="text-align:center">
                                                            <p>組別</p>
                                                        </th>
                                                        <th style="text-align:center">
                                                            <p>年齡</p>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align:center">
                                                            <p>男甲組</p>
                                                        </th>
                                                        <td>
                                                            <p>60歲以上</p>
                                                        </td>
                                                        <th style="text-align:center">
                                                            <p>女甲組</p>
                                                        </th>
                                                        <td>
                                                            <p>60歲以上</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align:center">
                                                            <p>男乙組</p>
                                                        </th>
                                                        <td>
                                                            <p>50-59歲</p>
                                                        </td>
                                                        <th style="text-align:center">
                                                            <p>女乙組</p>
                                                        </th>
                                                        <td>
                                                            <p>50-59歲</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align:center">
                                                            <p>男丙組</p>
                                                        </th>
                                                        <td>
                                                            <p>40-49歲</p>
                                                        </td>
                                                        <th style="text-align:center">
                                                            <p>女丙組</p>
                                                        </th>
                                                        <td>
                                                            <p>40-49歲</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align:center">
                                                            <p>男丁組</p>
                                                        </th>
                                                        <td>
                                                            <p>30-39歲</p>
                                                        </td>
                                                        <th style="text-align:center">
                                                            <p>女丁組</p>
                                                        </th>
                                                        <td>
                                                            <p>30-39歲</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align:center">
                                                            <p>男戊組</p>
                                                        </th>
                                                        <td>
                                                            <p>20-29歲</p>
                                                        </td>
                                                        <th style="text-align:center">
                                                            <p>女戊組</p>
                                                        </th>
                                                        <td>
                                                            <p>20-29歲</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align:center">
                                                            <p>男己組</p>
                                                        </th>
                                                        <td>
                                                            <p>17-19歲</p>
                                                        </td>
                                                        <th style="text-align:center">
                                                            <p>女己組</p>
                                                        </th>
                                                        <td>
                                                            <p>17-19歲</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            ➤路跑組(10公里)及健康組(5公里)：不提供分組排名獎勵。<br />
                                            入總排名者不再列入分組排名。</div>

                                        <div class="titleCenter">敘獎辦法</div>

                                        <div class="content">領獎選手需提供證件，核對身份並簽章，獎項不得代領，需允許頒獎影像公佈於相關公開網路平台。<br />
                                            ‧獲得總成績獎勵者當日請攜帶身分證件(外籍選手請攜帶護照)至獎典組登記填寫資料，得獎者需配合繳交身份證影印作為申報依據。<br />
                                            ‧登記獎品之尺寸經寄出後不得更換,<span style="color:#e74c3c;">獎品於賽事結束後4週內統一寄出</span><br />
                                            ‧依財政部規定，中獎贈品或獎金都算所得稅，中獎金額價值超過市價1,000元，年度報稅時必須計入個人所得，得獎者需配合繳交身份證影印作為申報依據；中獎金額價值超過NT$20,001元，依法需繳交10%機會中獎稅及身份證影本。<br />
                                            ‧外籍中獎人士依法須繳交20%機會中獎稅及居留證影本。<br />
                                            ‧主辦單位將於年底開立各類所得稅扣繳憑單。<br />
                                            ‧外籍人士若所得年度未滿183天先行代扣20%<br />
                                            ‧如有任何相關問題，請撥打客服專線:0800-271-637/聯絡時間：週一至週五(09:00~18:00)，逾期恕不接受辦理，郵寄費用得由選手自行支付。
                                        </div>
                                        <img src="https://www.ctrun.com.tw/image/AL191229/4634d86e89574c8893739643249eab5f.jpg"
                                            style="max-width: 100%; width: 100%;" />
                                    </center>
                                    <!--以上要能替換內容-->

                                </div>
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