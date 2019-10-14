<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  
    
    
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
          background-color: ;
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
      
    
    

    </style>

</head>
<body>
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
          <img src="img/CWH202002.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/KHH201912.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/TPH201911.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="" aria-hidden="true"><img src="img/left-arrow.png" alt=""></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="" aria-hidden="true"><img src="img/right-arrow.png" alt=""></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
</div>
  <br>
  <!-----------------------------------------------------------Search-------------------------------------------------------------->
  <div class="col-xl-6 col-md-12 " id="Search">
 
    <div id="searchBlock">
    <select style="height :25px; width :200px" class="col-4" name="" id="year" >
      <option value="YYYY">YYYY</option>
      <option value="2019">2019</option>
      <option value="2018">2018</option>
      <option value="2017">2017</option>
    </select>
  

 
    <input id="keyWord" style="height :25px; width :200px" class=" col-4" type="text"  placeholder="賽事搜尋" >
    
    
  </div>
  </div>


  <br>
  <br>
  <!---------------------------------------------------------text_Evnet----------------------------------------------------------->
  <a name="raceEvent"></a>
  <div class="text">
    <h3 > <span style="font-family:fantasy;">Race/Event</span></h3>

  </div>
  <!-----------------------------------------------------------Card---------------------------------------------------------------->
  <div class=" EventCard " id="cardapp">
    <div id="CARD">
        <div v-for="(listitem,index) in list"  class= "CardPermutation" style="width: 18rem ;">
          <div id="cardSelect" >
            <img :src="list[index].imgname" class="card-img-top" :alt="list[index].imgname">
            <div class="card-body">
              <h5 class="card-title">@{{list[index].location}}</h5>
              <p class="card-text"> <img src="img/calendar.png" alt=""> @{{list[index].time}}</p>
              <p class="card-text"> <img src="img/flag.png" alt="">@{{list[index].distance}}</p>
              <p class="card-text"> <img src="img/placeholder-filled-point.png" alt="">@{{list[index].place}}</p>
              <a :href="list[index].add" class="btn btn-primary">Go somewhere</a>
              <button >SHOWDATA</button>
              
            </div>   
          </div>  
        </div>
    </div>
        
        
     
        

   </div>
   <br>
   <br>    
    <div class="EventCard">
        <div  class="2018 card CardPermutation" style="width: 18rem;">
            <img src="img/CWH202002.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
              <button >SHOWDATA</button>
            </div>
          </div>
          <div  class="2018 card CardPermutation" style="width: 18rem;">
              <img src="img/CWH202002.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div  class="2017 card CardPermutation" style="width: 18rem;">
                <img src="img/CWH202002.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
  
     </div>
     <br>
     <br>
     <br>
     <br>
     <br>

     <!---------------------------------------------------------text_History----------------------------------------------------------->
     <a name="raceHistory"></a>
    <div class="text">
      <h3 ><span style="font-family:fantasy;">Race/History</span></h3>
  
    </div>
    <!-----------------------------------------------------------Card---------------------------------------------------------------->
    
  
      <div class="HistoryCard">
          <div  class="2018 card CardPermutation" style="width: 18rem;">
              <img src="img/CWH202002.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div  class="2018 card CardPermutation" style="width: 18rem;">
                <img src="img/CWH202002.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div  class="2017 card CardPermutation" style="width: 18rem;">
                  <img src="img/CWH202002.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
    
       </div>
    
  

  
    
    
    

  
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <!-----------------------------------------------------------------------------footer---------------------------------------------------->
  <a name="footer"></a>
 <div id="footer">
   <h1>ABOUT US</h1>
   @{{_self.message}}
   
  
   
  
  


  </div>
</div>
<div id="GoTop">
    <img src="img/up-arrow.png" alt="">
   

</div>
<div id="Navbar">      
    <nav class=" navbar navbar-expand-md navbar-light bg-dark justify-content-end">
      <section id="titleImage"> <span style="color:red"><h2>III Marathon</h2></span>  </section>
        <nav class="navbar navbar-dark bg-dark ">
          <a class="navbar-brand" href="#raceEvent">賽事列表</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link" href="#raceHistory">歷屆賽事 <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">新聞</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">關於我們</a>
              </li>
              <li class="nav-item">
                <button type="button" class="btn btn-danger"> <img src="img/magnifier-tool.png" alt=""> </button>
              </li>                
            </ul>
          </div>
        </nav>
    </nav>
       

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

var app = new Vue({
  el: '#cardapp',
  data: {
    message:"Hello",
    list:
      [
        {location:"屏東",time:"2019年10月09日",distance:"21K-10K-5K",place:"屏東鎮",imgname:"img/PCH201910.jpg",add:"event/PCH/2019/10"},
        {location:"彰化",time:"2020年02月09日",distance:"21K-10K-5K",place:"彰化鎮",imgname:"img/CWH202002.jpg",add:"event/CWH/2020/02"},
        {location:"新北",time:"2019年11月09日",distance:"21K-10K-5K",place:"新北鎮",imgname:"img/TPH201911.jpg",add:"event/TPH/2019/11"},
        {location:"高雄",time:"2019年12月09日",distance:"21K-10K-5K",place:"高雄鎮",imgname:"img/KHH201912.jpg",add:"event/KHH/2019/12"},
        {location:"台南",time:"2019年10月09日",distance:"21K-10K-5K",place:"台南鎮",imgname:"img/TNN201910.jpg",add:"event/TNN/2019/10"},
        {location:"桃園",time:"2019年11月09日",distance:"21K-10K-5K",place:"桃園鎮",imgname:"img/TYC201911.jpg",add:"event/TYC/2019/11"},
        {location:"宜蘭",time:"2020年01月09日",distance:"21K-10K-5K",place:"宜蘭鎮",imgname:"img/ILN202001.jpg",add:"event/ILN/2020/01"},
        {location:"員林",time:"2019年19月09日",distance:"21K-10K-5K",place:"員林鎮",imgname:"img/YUN201909.jpg",add:"event/YUN/2019/09"},
        {location:"台中",time:"2019年12月09日",distance:"21K-10K-5K",place:"台中鎮",imgname:"img/TXG201912.jpg",add:"event/TXG/2019/12"}

      ]
  
  },
  methods: {
    
  
      
    
  },
  mounted:function() 
    {
      console.log('444');
      $.ajax({
      type: 'GET',
      
      url: '/memberAdmin',
      success:function(data) {          
        message = JSON.stringify(data);
        console.log(typeof(message));
      },
      error: function(){
        console.log("try again");
      }
      });
    } 
  

})




  


</script>
    {{-- <h1>/resources/views/index.blade.php</h1><hr>

    <a href="/event/changhua/2020/02">changhua/2020/02</a><br>
    <a href="/event/yilan/2020/01">yilan/2020/01</a><br>
    <a href="/event/kaohsiung/2019/12">kaohsiung/2019/12</a><br>
    <a href="/event/taichung/2019/12">taichung/2019/12</a><br>
    <a href="/event/newtaipei/2019/11">newtaipei/2019/11</a><br>
    <a href="/event/taoyuan/2019/11">taoyuan/2019/11</a><br>
    <a href="/event/tainan/2019/10">tainan/2019/10</a><br>
    <a href="/event/pingtung/2019/10">pingtung/2019/10</a><br>
    <a href="/event/yunlin/2019/09">yunlin/2019/09</a><hr>

    <a href="/management">management</a><hr>
    <a href="/member">member</a><hr>
    <a href="/simulate">simulate</a><hr>

    <a href="/">Home</a> --}}
</body>
</html>