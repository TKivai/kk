@extends('layouts.layouts')
@section('content')
  <section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/cam.png" alt="Los Angeles" style="height:400px; width: 800px; margin-left: 200px">
        </div>
    
        <div class="item">
          <img src="img/fridge.png" alt="Chicago" style="margin-left: 400px">
        </div>
    
        <div class="item">
          <img src="img/pup.jpg" alt="New York" style="margin-left: 150px; height:380px">
        </div>
      </div>
    
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <!-- <span class="sr-only">Previous</span> -->
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <!-- <span class="sr-only">Next</span> -->
      </a>
    </div>
  </section>

  <section id="intro" class="section-intro bg-secondary pt-5" style="color:white; background-color:#003366; margin-top: 80px">
    <div class="container">
      <div class="row d-flex" style="min-height:400px;">
        <div class="col-sm-6 d-flex align-items-center" style="top: 150px;">
          <header class="intro-wrap text-white">
            <h3>Washing Machines and Dryers <br></h3>
            <p>Cleaning and Washing Made Easy!</p>
            <a class="btn btn-primary" href="#">View Collection</a>
          </header>
          <!-- intro-wrap .// -->
        </div>
        <!-- col.// -->
        <div class="col-sm-6 text-right">
          <img style="float: right; margin: 0px 200px 50px 0px; " src="img/fridge.png">
        </div>
        <!-- col.// -->
      </div>
      <!-- row.// -->
    </div>
    <!-- container .//  -->
  </section>
  <section id="intro" class="section-intro bg-secondary pt-5" style="color:white; background-color:grey;">
    <div class="container">
      <div class="row d-flex" style="min-height:400px;">
        <div class="col-sm-6 text-right">
          <img style="width: 500px; height: 500px; margin: 0px 200px 50px 0px; " src="img/oven.png">
        </div>
        <div class="col-sm-6 d-flex align-items-center" style="top: 150px;">
          <header class="intro-wrap text-white">
            <h3 style="font-family:  HelveticaNeue-Light ",  sans-serif;"> Refridgerators and Ovens<br></h3>
            <p>Your Kitchen has never looked so amazing!</p>
            <a class="btn btn-primary" href="#">View Collection</a>
          </header>
          <!-- intro-wrap .// -->
        </div>
      </div>
      <!-- row.// -->
    </div>
    <!-- container .//  -->
  </section>
  <section id="intro" class="section-intro bg-secondary pt-5" style="color:black; background-color:white;">
    <div class="container">
      <div class="row d-flex" style="min-height:400px;">
        <div class="col-sm-6 d-flex align-items-center" style="top: 150px;">
          <header class="intro-wrap text-white">
            <h3 style="font-family: 'HelveticaNeue-Light', sans-serif;">Security Cams and Recorders<br></h3>
            <p> Keep everything cruising smoothly.</p>
            <a class="btn btn-primary" href="#">View Collection</a>
          </header>
          <!-- intro-wrap .// -->
        </div>
        <!-- col.// -->
        <div class="col-sm-6 text-right">
          <img style="float: right; margin: 70px 200px 50px 0px; width: 200px; height:200px;" src="img/cam.png">
        </div>
        <!-- col.// -->
      </div>
      <!-- row.// -->
    </div>
    <!-- container .//  -->
  </section>
  <section id="intro" class="section-intro bg-secondary pt-5" style=" background-color:#CCCC99;">
    <div class="container">
      <div class="row d-flex" style="min-height:400px;">
        <div class="col-sm-6 text-right">
          <img style="float: right; margin: 70px 100px 50px 0; width: 500px; height:400px;" src="img/pups.png">
        </div>
        <!-- col.// -->
        <div class="col-sm-6 d-flex align-items-center" style="top: 150px;">
          <header class="intro-wrap text-white">
            <h3 style="font-family: 'HelveticaNeue-Light'  , 'Helvetica Neue Light' , 'Helvetica Neue' , 'Helvetica', 'Arial', 'Lucida Grande' , sans-serif;">Pet Products<br></h3>
            <p>You love em, We love em too!</p>
            <a class="btn btn-primary" href="#">View Collection</a>
          </header>
          <!-- intro-wrap .// -->
        </div>
        <!-- col.// -->
      </div>
      <!-- row.// -->
    </div>
    <!-- container .//  -->
  </section>
@endsection
    