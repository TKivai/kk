<html>

  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      * {
        margin: 0;
        padding: 0;
      }

      body {
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-weight: 300;
      }

      ul.nav {
        text-align: right;
      }

      ul.nav li {
        display: inline-block;
        padding: 10px;
        margin-right: 10px;
      }

      .title-card {
        width: 100%;
        position: relative;
        z-index: 1;
      }

      .footer-area {
        position: relative;
      }

      footer ul li {
        list-style: none;
      }
      #popUpWindow{
        background: lightblue; 
      }

      #myCarousel{
        height: 400px;
      }
    </style>
  </head>

  <body>

    <!-- navigation bar -->
    <nav class="navbar" style="background-color: #2b215e; border-radius: 0px; height:170px;">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><img src="img/rsz_logo.jpg" style="width: 300px; height: 120px;"></a>
          <div style="float: left; margin: 0 0 0 900px;">
            <ul class="nav navbar-nav">
              <li class="muted" style=" font-size: 20px; color: white; margin-top: 5px;">
                Location
              </li>
              <li class="navitem">
                <i class="fas fa-search" style=" font-size: 40px; color: white;"></i>
              </li>

              @if (Route::has('login'))
                <li>
                  @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <p></p>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </li>    
              @endif
            </ul>
          </div>
        </div>
      </div>
    </nav>

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

    <!-- Footer -->
    <footer class="page-footer font-small pt-4" style="background-color: #79729b;">

      <!-- Footer Links -->
      <div class="container-fluid text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-6 mt-md-0 mt-3 text-center">

            <!-- Content -->
            <h3 class="text-uppercase">Happy Shopping!</h3>
            <br>
            <!-- Form -->
            <form class="form-inline">
              <H4>Sign Up for Promo Deals and Offerings</H4>
              <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
              <i class="fa fa-search" aria-hidden="true"></i>
            </form>
            <!-- Form -->

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none pb-3">

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Categories</h5>

            <ul class="list-unstyled">
              <li>Washing Machines and Dryers</li>
              <li>Refrigerators and Dryers</li>
              <li>Security Cameras</li>
              <li>Pet Products</li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Info Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Terms and Conditions</a>
              </li>
              <li>
                <a href="#!">Shipping Info</a>
              </li>
              <li>
                <a href="#!">Contact Us</a>
              </li>
              <li>
                <a href="#!">Return Policy</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2018 CopyRight Protected.
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->
  </body>

</html>
