@extends('layout.app')
@section('content')

<div class="overall">

<div class="hero">

    <div class="text">
        <div class="maintext">
                <div class="container">
                            <div class="learn">
                                <p>Learn</p>
                            </div>

                            <div class="skills">
                                <span>to earn</span>
                                <span>to grow</span>
                                <span>for free</span>
                                <span>to earn</span>
                                <span>today</span>
                            </div>
                </div>
                
        </div>
    
            <div class="text1" style="padding-top:20px;">
                <p>
                    Skills For Wealth is an organization that<br> 
                    is in pursuance of SDG Goal 1-(No Poverty).
                </p>
                <a href="/courses"><button class="offer">See courses we offer</button></a>
            </div>
</div>

    <div class="bg">
        <img src="{{asset('img/yellowcircle.png')}}" alt="" width="600px" height="400px" class="bgimg">
        <img src="{{asset('img/blue-circle.png')}}" alt="" width="600px" height="400px" class="bgimg">
        <img src="{{asset('img/greencircle.png')}}" alt="" width="600px" height="400px" class="bgimg" style="display: none">
        <img src="{{asset('img/greencircle.png')}}" alt="" width="600px" height="400px" class="bgimg">
    </div>

    <div class="imgslide">
        <img src="{{asset('img/tailoring.png')}}" alt="" class="slides" height="400" width="600px">
        <img src="{{asset('img/bakers.png')}}" alt="" class="slides" height="400px" width="600px">
        <img src="{{asset('img/coding.png')}}" alt="" class="slides" height="400px" width="600px">
        <img src="{{asset('img/coding.png')}}" alt="" class="slides" height="400px" width="600px">
    </div>

    <div class="shapes">
        <img src="{{asset('img/yellowtriangle.png')}}" alt="bluecircle" height="50px" width="50px">
        <img src="{{asset('img/blue-circle.png')}}" alt="bluecircle" height="30px" width="30px">
        <img src="{{asset('img/whitedots.png')}}" alt="bluecircle" height="105px" width="75px">
        <img src="{{asset('img/greencircle.png')}}" alt="bluecircle" height="35px" width="35px">
    </div>
</div>

<div class="bg2">
    <img src="{{asset('img/yellowcircle.png')}}" alt="" width="600px" height="400px" class="bgimg2">
    <img src="{{asset('img/blue-circle.png')}}" alt="" width="600px" height="400px" class="bgimg2">
    <img src="{{asset('img/greencircle.png')}}" alt="" width="600px" height="400px" class="bgimg2" style="display: none">
    <img src="{{asset('img/greencircle.png')}}" alt="" width="600px" height="400px" class="bgimg2">
</div>

<div class="imgslide2">
    <img src="{{asset('img/tailoring.png')}}" alt="" class="slides2" height="400" width="600px">
    <img src="{{asset('img/bakers.png')}}" alt="" class="slides2" height="400px" width="600px">
    <img src="{{asset('img/coding.png')}}" alt="" class="slides2" height="400px" width="600px">
    <img src="{{asset('img/coding.png')}}" alt="" class="slides2" height="400px" width="600px">
</div>

<div class="facto">
    <div class="fact">
        <h2 style="padding:10px 0px 20px 60px; text-align:left">Poverty fact</h2>
        <div class="section2" id="fact">

            <div class="centre">
                <img src="{{asset('img/povfact1.jpg')}}" alt="" height="400vh" width="100%">
            </div>

            <div class="percent" style="text-align: center">
                <h1>26%</h1>
                    <p>
                        "One prevailing cause of poverty is unemployment. For Plateau State, according <br> 
                        to the National Bureau of Statistics labour data for 4th Quarter 2020, the State  <br> 
                        has a total working-age population of 2,690,344 with less than half in the labour  <br> 
                        force. Of these, 26.59% are unemployed while 26.15% are under-employed. 
                    </p>
            </div>
            </div>
    </div>
</div>

        <div class="section3" style="text-align: center; height:60px">
        
        </div>

        <div class="section4">
            <h3 style="padding-top: 40px; text-align:center">Necesary Actions</h3>
            <div class="inside">
                <img src="{{asset('img/action.png')}}" alt="img">
                <div class="actionplan">
                    <ul>
                    <li>Empowering people living in poverty</li>
                    <li>Improving access to entrepreneurial opporunities and productive resources</li>
                    <li>Working with interested donors and recipients to allocate increased shares of <br>
                             official development assistance</li>
                    </ul>
                </div>
            
             </div>
        </div>

   
</div>
</div>




<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



    <script>
        var myIndex = 0;
        carousel();
        
        function carousel() {
          var i;
          var x = document.getElementsByClassName("slides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 8000); // Change image every 8 seconds
        }
        </script>

 <script>
    var myIndex = 0;
    xcarousel();
    
    function xcarousel() {
      var i;
      var x = document.getElementsByClassName("bgimg");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(xcarousel, 8000); // Change image every 8 seconds
    }
    </script>

<script>
    var myIndex = 0;
    kcarousel();
    
    function kcarousel() {
      var i;
      var x = document.getElementsByClassName("slides2");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(kcarousel, 8000); // Change image every 8 seconds
    }
    </script>

<script>
var myIndex = 0;
dcarousel();

function dcarousel() {
  var i;
  var x = document.getElementsByClassName("bgimg2");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(dcarousel, 8000); // Change image every 8 seconds
}
</script>
    

@endsection