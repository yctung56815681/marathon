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
                <a href="/">
                    {{-- <img src="{{ URL::asset('NewCSS/images/logo_zepro_w.png') }}"> --}}
                    <img src="/NewCSS/images/logo_zepro_w.png">
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
                            <a href="/signup/{{$city}}/{{$year}}/{{$month}}" id="SignTitle"
                                class="btn active">我要報名／Signup</a>
                            <a href="/query/{{$city}}/{{$year}}/{{$month}}" id="SignQuery"
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
                            crossorigin="anonymous">
                        </script>

                        <div id="ContentPlaceHolder1_content">
                            <h2 style="text-align: center;"><span style="color: #333333;font-weight:900;">活動規範</span>
                            </h2>

                            <!--以下要能替換內容-->
                            <h3><i class="fa fa-chevron-down"></i>晶片使用說明</h3>

                            <div class="fold o" style="display: block;">
                                <p>&bull; 本活動採晶片計時，請各位參與者詳閱以下晶片配戴注意事項，並預祝順利活動取得佳績。</p>

                                <p>&bull; 請將晶片以鞋帶繫於鞋尖前或利用晶片束帶繫於腳踝上，嚴禁使用金屬性物品(如鐵絲、別針、金屬束線帶等物品)固定。</p>

                                <p>&bull; 以提供之束帶系於鞋尖前，請將晶片面朝向正上方，使晶片面保持水平狀。</p>

                                <p>&bull; 利用晶片束帶繫於腳踝上時，請經過晶片感應墊時，將晶片面保持水平狀朝向正下方進行感應。</p>

                                <p>&bull; 若您的晶片配戴方式並非如上所述，則可能會影響您的晶片感應，配戴上如有任何問題，請至晶片計時組詢問相關事宜。</p>

                                <p>&bull; 配戴兩個或兩個以上晶片者、互換晶片者、未依規定配戴者，將被取消資格，不予計時亦不發給成績證明。</p>

                                <center>&nbsp;</center>
                            </div>

                            <p>&nbsp;</p>

                            <h3><i class="fa fa-chevron-down"></i>活動規則限制</h3>

                            <p>&nbsp;</p>

                            <div class="fold o" style="display: block;">
                                <p>&bull; 為維護活動品質，保障選手權益，凡於報名截止後異動組別或更名者皆取消敘獎資格</p>

                                <p>&bull; 活動當天請於鳴槍開始前至指定地點集合，選手檢錄以晶片地墊感應取代人工劃記，提早出發者成績無效。</p>

                                <p>&bull;
                                    依據國際田徑規則165.24條規定，選手發時間為鳴槍時間，大會將依據鳴槍出發時間開始計算時間記錄，並依據此時間記錄做為選手名次成績統計之判定。選手必須從晶片感應地墊上方通過，若無起、終點或賽道上檢查點感應時間紀錄之選手將被取消資格亦不發給成績證明。
                                </p>

                                <p>&bull; 出發點位於開放性道路，選手需準時出發，提早出發或出發未通過感應地墊者成績無效，遲到者為安全考量大會有權限制其出發及不予計算成績。</p>

                                <p>&bull; 活動當日無號碼布者，將自動喪失活動資格，且不得進入活動路線，裁判有權終止無號碼布選手進行活動。</p>

                                <p>&bull; 無受檢查點晶片感應或無持有信物者皆判定為失格，不得異議。</p>

                                <p>&bull; 棄賽、賽種異動者皆判定為失格，不得異議。</p>

                                <p>&bull; 號碼布未確實佩帶好於胸前或未將信物戴於手腕處，導致無法辨識身份，終點裁判將禁止選手進入終點前30M賽道。
                                    於時間內無法完成全程者，請遵照裁判人員指示，搭乘巡迴車輛返回終點。</p>
                            </div>

                            <p>&nbsp;</p>

                            <h3><i class="fa fa-chevron-down"></i>成績證明</h3>

                            <div class="fold o" style="display: block;">
                                <p>&bull; 成績證書：完賽後立即發給，請務必現場領取，如未領取恕不補寄。若遇大風大雨、停電、當機、網路斷線等意外，活動證書改由活動一週後，於全統運動報名網自行下載列印。
                                </p>

                                <p>&bull; 選手成績將於賽後一週內公告於全統運動報名平台。</p>
                            </div>

                            <p>&nbsp;</p>

                            <h3><i class="fa fa-chevron-down"></i>活動違規罰責</h3>

                            <div class="fold o" style="display: block;">
                                <p>&bull; 違反下列規定者，取消活動成績、並拒絕往後參與大會相關活動。</p>

                                <p>&bull; 互換晶片、配帶他人號碼布或晶片、一人帶二個晶片等違反活動規則者皆判定失格，成績全部不予以計算。</p>

                                <p>&bull; 不遵從裁判引導者。</p>

                                <p>&bull; 活動途中借助車輛(含自行車)或人員陪同(如乘車、扶持&hellip;等)。</p>

                                <p>&bull; 違反運動精神與道德者，如(打架、辱罵裁判或大會工作人員。不當行為或散播謠言或不實言論、行為足以影響大會聲譽者)。</p>

                                <p>&bull;
                                    嚴禁非報名者取代報名者參加活動，或(私下轉售者)，代跑者及被代跑者一經查明屬實，由裁判宣佈成績無效外，另將於網路上公佈代跑者及被代跑者姓名(歡迎選手具體舉發)。</p>
                            </div>

                            <p>&nbsp;</p>

                            <h3><i class="fa fa-chevron-down"></i>活動爭議申訴</h3>

                            <div class="fold o" style="display: block;">
                                <p>&bull; 活動爭議：活動中各選手不得當場質詢裁判，若與田徑規則有同等意義之註明者，均以裁判為準，不得提出申訴。</p>

                                <p>&bull; 成績異議：參加選手對於成績如有異議，請向主辦單位計時組申請查核及更正，並以裁判長之判決為終決。</p>

                                <p>&bull; 申訴程序：有關活動所發生之爭議，須於各組成績公佈30分鐘內向大會提出，<span
                                        style="color: #e74c3c;font-weight:900;">同時繳交保證金NT＄1,000</span>，由活動組簽發收執單，請妥善保管好；所有申訴以審判委員會之判決為終決，若審判委員會判決認為申訴無理，應沒收保證金。
                                </p>
                            </div>

                            <p>&nbsp;</p>

                            <h3><i class="fa fa-chevron-down"></i>緊急應變辦法</h3>

                            <div class="fold o" style="display: block;">
                                <p>緊急醫療規劃：安全維護工作及應變計畫是活動最重要的事情，有完善的安全計畫可快速解決問題，將傷害降至最低。</p>

                                <p>&bull; 現場每位選手投保【公共意外險】。</p>

                                <p>&bull; 現場設置專業醫療單位。</p>

                                <p>&bull; 建立緊急醫護聯繫網-配合當地醫療單位達到最快速的緊急救援。</p>

                                <p>&bull; 主要醫療團隊將由專業醫療小組協助，提供活動會場路線上及主會場所有參與者的人身安全。</p>

                                <p>&bull; 雨備方案規劃</p>

                                <p>&bull; 若因颱風來襲或天災，將透活動官網平台公告活動延期或停辦資訊。</p>

                                <p>&bull; 若活動前一周由天氣預報表示活動當天可能會有較高的機率下雨，將視情況增加活動會場帳篷數量。</p>
                            </div>

                            <p>&nbsp;</p>

                            <h3><i class="fa fa-chevron-down"></i>安全提示</h3>

                            <div class="fold o" style="display: block;">
                                <p>&bull; 未報名者請勿於活動時間內進入賽道內，影響選手權益。</p>

                                <p>&bull;
                                    活動路線為一般開放性道路，仍有大小車輛正常行駛，請注意自身安全。重要路口設有方向標示牌或大會志工協助指揮引導，活動舉辦以不干擾居民正常生活為要件。路口如遇管制請稍做等候，請勿對工作人員咆哮或硬闖、如無法認同本項約定者請勿勉強參與。
                                </p>

                                <p>&bull;
                                    活動請衡量自身能力參與，除發揮精神、力克艱難、突破自我極限達成目標外，並請於活動前一日做充足的睡眠及當日活動開始前2個鐘頭補充飲食，切忌空腹出發，以免中途體力不濟，嚴重者可能因血糖過低而引發瞬間昏厥等危險。
                                </p>

                                <p>&bull; 賽道裁判或醫師(醫護)有權視選手體能狀況，中止選手繼續活動，選手不得有異議。</p>

                                <p>&bull; 請參加選手務必考量本身健康狀況，安全第一。身體不適時，請立即停止參加活動切勿勉強，並就近向大會志工請求協助支援。</p>

                                <p>&bull; 參加本次活動者請注意身體健康，如有心臟、血管、糖尿病等方面病歷者，請勿參加。</p>

                                <p>&bull;
                                    參與者皆為志願參加並願意承擔期間所發生之意外風險責任，若於活動過程中發生任何傷亡或其他任何形式上的損失，按本活動投保之公共意外險處理，所有細節依投保公司之保險契約為準，一切與主辦單位無關。
                                </p>

                                <p>&bull; 請攜帶身分證明及健保卡。</p>
                            </div>

                            <p>&nbsp;</p>

                            <h3><i class="fa fa-chevron-down"></i>注意事項</h3>

                            <div class="fold o" style="display: block;">
                                <p>&bull; 本活動雨天照常舉行，如遇海陸上颱風警報或不可抗拒之天然災害，為考量選手及參加者安全，大會有權宣佈取消、延期或調整活動路線。</p>

                                <p>&bull;
                                    參與活動者須同意大會有權將活動過程之錄影、相片(肖像)、成績含(報名者的姓名、所屬單位名稱等資訊)對外公告、或於世界各地播放、展出、刊登於網站及刊物上或用於相關活動宣傳活動上。
                                </p>

                                <p>&bull; 選手通過終點前後請勿逗留占用賽道，影響其他選手進場安全，如欲拍照請進入終點後至側邊拍照留影。</p>

                                <p>&bull; 參與本次活動人員及選手一旦登入報名系統完成繳費者，視同同意本活動規範所有規定。</p>

                                <p>&bull; 本活動規範及相關資訊將陸續於全統運動報名網公佈。若有未盡事宜，大會得隨時增補修訂之，將不另行通知。</p>
                            </div>

                            <p>&nbsp;</p>

                            <h3><i class="fa fa-chevron-down"></i>保險特別說明</h3>

                            <div class="fold o" style="display: block;">
                                <p>&bull; 報名表內各欄請務必詳實填寫，如有錯漏導致喪失保險效力，應自行負責。</p>

                                <p>&bull; 大會將替每位選手與工作人員投保公共意外險，所有細節依投保公司之保險契約為準。</p>

                                <p>&bull;
                                    請選手檢視自已當日狀況量力而為，並於活動前一日做充足的睡眠及當日出發前2個鐘頭補充飲食再行出發。本會在現場設有必要的緊急醫療救護，對於本身疾患引起之病症不在承保範圍內，公共意外險只承保因意外所受之傷害做理賠。
                                </p>

                                <p>&bull;1,000人以下公共意外險說明：</p>

                                <p>&bull; 每人體傷責任新台幣：伍佰萬元。</p>

                                <p>&bull; 每一意外事故責任體傷新台幣：參仟萬元。</p>

                                <p>&bull; 每一意外事故財物損失責任新台幣：貳佰萬元。</p>

                                <p>&bull; 保險期間最高賠償金額新台幣：陸仟肆佰萬元。</p>

                                <p>&bull;1,000-3,000人公共意外險說明：</p>

                                <p>&bull; 每人體傷責任新台幣：伍佰萬元。</p>

                                <p>&bull; 每一意外事故責任體傷新台幣：伍仟萬元。</p>

                                <p>&bull; 每一意外事故財物損失責任新台幣：貳佰萬元。</p>

                                <p>&bull; 保險期間最高賠償金額新台幣：壹億肆佰萬元。</p>

                                <p>&bull;3,000-10,000人公共意外險說明：</p>

                                <p>&bull; 每人體傷責任新台幣：伍佰萬元。</p>

                                <p>&bull; 每一意外事故責任體傷新台幣：伍仟萬元。</p>

                                <p>&bull; 每一意外事故財物損失責任新台幣：貳佰萬元。</p>

                                <p>&bull; 保險期間最高賠償金額新台幣：壹億肆佰萬元。</p>

                                <p>&bull;10,000人以上公共意外險說明：</p>

                                <p>&bull; 每人體傷責任新台幣：伍佰萬元。</p>

                                <p>&bull; 每一意外事故責任體傷新台幣：壹億伍仟萬元。</p>

                                <p>&bull; 每一意外事故財物損失責任新台幣：貳佰萬元。</p>

                                <p>&bull; 保險期間最高賠償金額新台幣：參億肆佰萬元。</p>

                                <p>&bull;
                                    公共意外險承保範圍：被保險人因在保險期間內發生下列意外事故所致第三人體傷、死亡或第三人財物損害，依法應負賠償責任，而受賠償請求時，本公司對被保險人負賠償之責：
                                    ‧被保險人或其受僱人在本保單載明之活動路線上因活動發生之意外事故。</p>

                                <p>&bull; 被保險人在活動路線之建築物、通道、機器或其他工作物所發生之意外事故。</p>

                                <p>&bull; 特別不保事項：</p>

                                <p>&bull;個人疾病導致運動傷害。</p>

                                <p>&bull;因個人體質或因自身心血管所致之症狀，例如休克、心臟症、糖尿病、熱衰竭、中暑、高山症、癲癇、脫水等。對於因本身疾患所引起之病症將不在保險範圍內，而公共意外險只承擔因外來意外所受之傷害理賠。
                                </p>

                                <p>&bull;選手如遇與跟第二項所述之疾病之病史，建議選手慎重考慮自身安全，自行加保個人人身意外保險。</p>

                                <p>&bull;如您曾發生過以下病況及有以下疾病狀況，屬猝死高危險群，請諮詢醫師專業的判斷及請勿勉強參加。</p>

                                <p>&bull; 不明原因的胸部不適於(胸悶、胸痛)</p>

                                <p>&bull; 不明原因的呼吸困難</p>

                                <p>&bull; 不明原因頭暈</p>

                                <p>&bull; 突然失去知覺</p>

                                <p>&bull; 高血壓(&gt;140/90㎜Hg)</p>

                                <p>&bull; 心臟病</p>

                                <p>&bull; 腎功能異常</p>

                                <p>&bull; 糖尿病</p>

                                <p>&bull; 高血脂(總膽固&rarr; 240mg/D1)</p>

                                <p>&bull; 家族心臟病史(一等親在60歲前發生心臟病或猝死)</p>

                                <p>&bull; 癲癇</p>
                            </div>

                            <p>&nbsp;</p>
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
                                //     $(this).parent().prev('h3').find('i.fa').removeClass('fa-chevron-down').addClass('fa-chevron-right');
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