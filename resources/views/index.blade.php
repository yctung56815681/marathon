<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>運動報名網</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.bootcss.com/qs/6.5.1/qs.min.js"></script>

    <style>


    #GoTop{
          position: fixed;
          bottom: 20px;
          right:20px;
          width: 50px;
          height: 50px;

        }

        img{
            width: auto;
            height: auto;
            max-width: 100%;
            max-height: 100%;
        }
        #titleImage{

          position: absolute;
          top:0px;
          left: 20px;
          width: 200px;
          height: 20px;

        }
        #Navbar{
          top: 0px;
          position: fixed;
          width: 100%;
          height: 20px;
        }
        #Image{

          position: relative;

        }
        #Search{



          padding: 10px 50px;
          text-align: center;
          position: relative;
          bottom: 0px;
          margin: auto;
          height: 50px;
          background-color: palevioletred;
        }
        .EventCard{
          background-color: wheat;
          width: 75%;
          padding: 20px;
          text-align: center;
          top:30px;
          margin: auto;
          position: relative;
        }
        .HistoryCard{
          width: 80%;
          padding: 20px;
          text-align: center;
          top:30px;
          margin: auto;
          position: relative;
        }
        .CardPermutation{
          display: inline-block;
          margin: 10px 30px;

        }
        .CardPermutation:hover{
          transform: scale(1.1);
          opacity:0.7;
        }
        .text{
          text-align: center;
        }
        #footer{
          background-color: red;
          position: relative;
          width: auto;
          height: 200px;
          bottom: 0px;
        }
        #space{
          height: 60px;
        }
        .cardBack{
          background-color: white;
        }
        .navbg {
            background: #13d474;

        }
        p{
        
          text-align: left;
        }
        .item{
          display: inline-block;

        }
  




    </style>

</head>
<body id="body">
  <div>
  <!---------------------------------------------------------------------GoTop------------------------------------------------------------>





  <!---------------------------------------------------------------------NavBar------------------------------------------------------------>
  <div id="space">

  </div>

  <!--------------------------------------------------------------Image-------------------------------------------------------------------->
 
  <div id="Image">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="event/CWH/2020/02"><img src="img/CWH202002.jpg" class="d-block w-100" alt="..."></a>          
        </div>
        <div class="carousel-item">
            <a href="event/KHH/2019/12"><img src="img/KHH201912.jpg" class="d-block w-100" alt="..."></a>
          
        </div>
        <div class="carousel-item">
            <a href="event/TPH/2019/12"><img src="img/TPH201912.jpg" class="d-block w-100" alt="..."></a>
          
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <div>
          <span class="" aria-hidden="true"><img src="img/left-arrow.png" alt=""></span>
        </div>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <div>
          <span class="" aria-hidden="true"><img src="img/right-arrow.png" alt=""></span>
        </div>
        <span class="sr-only">Next</span>
      </a>
  </div>
</div>
  <br>
  <!-----------------------------------------------------------Search-------------------------------------------------------------->
  <div class="col-xl-6 col-md-12 form-control " id="Search">

    <div id="searchBlock">
    {{-- <select style="height :25px; width :200px" class="col-4" name="" id="year" >
      <option value="YYYY">YYYY</option>
      <option value="2019">2019</option>
      <option value="2018">2018</option>
      <option value="2017">2017</option>
    </select> --}}



    <input id="keyWord" style="height :25px; width :200px" class=" col-4" type="text"  placeholder="賽事搜尋" >


  </div>
  </div>


  <br>
  <br>
  <!---------------------------------------------------------text_Evnet----------------------------------------------------------->
  <a name="raceEvent"></a>

  <div class="text">
    <h3 > <span style="font-family:fantasy;">賽事活動</span></h3>

  </div>
  <!-----------------------------------------------------------Card---------------------------------------------------------------->
  <div class=" EventCard  " id="cardapp">

    <div id="CARD">
        @foreach ($Event as $key=>$eve)
        <div  class= "CardPermutation" style=" width: 18rem ;">
          <div id="cardSelect" >
            <img src="img/{{$eve->eventImage}}" class="card-img-top" :alt="">
            <div class="cardBack card-body">
            <h5 class="card-title">{{$eve->eventTittle}}</h5>
            <p class="card-text"> <img src="img/calendar.png" alt="">{{$eve->eventRunStartTime}}</p>
            <p class="card-text"> <img src="img/flag.png" alt="">{{$City[$eve->cityId-1]->cityNameCh}}</p>
            <p class="card-text"> <img src="img/placeholder-filled-point.png" alt="">{{$eve->eventAddr}}</p>

            <a href="event/{{$city[$key]}}/{{$year[$key]}}/{{$month[$key]}}" class="btn btn-primary">賽事詳情</a>


            </div>
          </div>
        </div>
        @endforeach
    </div>






   </div>
   <br>
   <br>
   <div id="test">

   </div>


     <br>
     <br>
     <br>
     <br>
     <br>

     <!---------------------------------------------------------text_History----------------------------------------------------------->
     <a name="raceHistory"></a>










  </div>
  <br>
  <br>

  <!-----------------------------------------------------------------------------footer---------------------------------------------------->
  <a name="footer"></a>
 <div id="footer">
   <h1 style="color:white">關於我們</h1>
   <div class="outer">
      <div class="col01">
          
          <div class="links" >
              <div class="item"> <a href=""><h6>門市據點</h6></a>  </div>
              <div class="item"> <a href=""><h6>隱私權政策</h6></a> </div>
              <div class="item"> <a href=""><h6>人才招募</h6></a> </div>
              <div class="item"> <a href=""><h6>條款與細則</h6></a> </div>
              <div class="item"> <a href=""><h6>會員中心</h6></a> </div>

          </div>
      </div>
 
    
  </div>

  </div>
</div>
<div id="GoTop">
    <img src="img/up-arrow.png" alt="">


</div>
<div id="Navbar">
    <nav class=" navbar navbar-expand-md navbar-light navbg justify-content-end">
      <section id="titleImage"> <span style="color:white; font-size:22px">運動報名網</span>  </section>
        <nav class="navbar navbar-dark navbg ">
          <a class="navbar-brand" href="#raceEvent">賽事列表</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ">
              
              <li class="nav-item">
                <a class="nav-link" href="#footer">關於我們</a>
              </li>
              <li class="nav-item">

              </li>
            </ul>
          </div>
        </nav>
    </nav>


  </div>
  <div>

  </div>








<script>
  $(document).ready(function(){
    $("#keyWord").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#cardSelect h5").filter(function() {


        $(this).parent("div").parent("div").toggle($(this).text().toLowerCase().indexOf(value) > -1);
        var k = $(this).parent("div").parent("div").parent("div").toggle($(this).text().toLowerCase().indexOf(value) > -1);
        console.log(typeof(k));



      });
    });
  });



 $(function(){
	$('#GoTop').click(function(){
		$('html,body').animate({scrollTop:0}, 333);
	});
	$(window).scroll(function() {
		if ( $(this).scrollTop() > 300 ){
			$('#GoTop').fadeIn(222);
		} else {
			$('#GoTop').stop().fadeOut(222);
		}
	}).scroll();
});







</script>

</html>