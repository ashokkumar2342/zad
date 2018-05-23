<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Winter Vacations (Holiday Homework)</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6"><h3><a href="{{ route('front.holiday-homework2') }}" title="homework">Junior Wing</a></h3></div>
          <div class="col-lg-6"><h3><a href="{{ route('front.holiday-homework') }}" title="homework">Senior Wing</a></h3></div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <!-- Preloader start here -->
   <!--  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div> -->
    <!-- Preloader end here -->
  	<header class="header-two">
  		<div class="header-top">
  			<div class="container">
  				<div class="row">
            <div class="col-md-3">
              <a class="logo" href="{{ route('front.home') }}"><img src="{{ asset('images/logo.png') }}" alt="logo" class="img-responsive"></a>
            </div>
            <div class="col-md-9">
              <ul class="top-contents">
                <li>
                   <i class="icon fa fa-phone" aria-hidden="true"></i>
                  <div class="content">
                    <p>Call Us</p>
                    <p>Jr.<b> +91-8397068001</b></p>
                    <p>Sr.<b> +91-8570006662</b></p>

                  </div>
                </li>
                <li>
                   <i class="icon fa fa-clock-o" aria-hidden="true"></i>
                  <div class="content">
                    <p>Timing</p>

                   <p style="font-size:14px;">Opening : <b>7:30am</b></p>
                   <p style="font-size:14px;">Closing : <b>2:30pm</b></p>

                  </div>
                </li>
                <li>
                   
                  <i class="icon fa fa-map-marker" aria-hidden="true"></i>
                  <div class="content">
                    <p>Our Address</p>
                    <p style="font-size:13px;">Jr.<b> Zad Eduplex, HUDA Complex, Rohtak-124001(Hr.)</b></p>
                    <p style="font-size:13px;">Sr.<b> 8th Mile Stone, Rohtak-Jind Road, N.H. 71, Rk. (Hr.)</b></p></span>

                  </div>
                </li>
              </ul>
            </div>
          </div><!-- row -->
  			</div><!-- container -->
  		</div><!-- header top -->
        <div class="main-menu">
          <nav class="navbar ">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('front.home') }}"><img src="{{ asset('images/logo.png') }}" alt="logo" class="img-responsive" style="height: 50px"></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="{{ route('front.home') }}">Home</a></li>

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ route('front.about') }}">About Group</a></li>
                      <li><a href="{{ route('front.vision-mission') }}">Vision and Mission</a></li>
                      <li><a href="{{ route('front.chairman-message') }}">Chairman's Message</a></li>
                       
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Academic <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ route('front.holiday-homework') }}">Holiday Homework</a></li>
                      
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Art<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="{{ route('front.art-craft') }}">Art & Craft</a></li>
                      <li><a href="{{ route('front.dance') }}">Dance</a></li>
                      <li><a href="{{ route('front.music') }}">Music</a></li>
                      <li><a href="{{ route('front.mini-theater') }}">Mini Theater</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resources<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ route('front.smart-class-rooms') }}">Smart Class Rooms</a></li>
                      <li><a href="{{ route('front.computer-lab') }}">Computer Lab</a></li>
                      <li><a href="{{ route('front.science-lab') }}">Science Lab</a></li>
                      <li><a href="{{ route('front.library') }}">Library</a></li>
                      <li><a href="{{ route('front.counselling-area') }}">Counselling Area</a></li>
                      <li><a href="{{ route('front.transport') }}">Transport</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ route('front.indoor-sports') }}">InDoor Sports</a></li>
                      <li><a href="{{ route('front.outoor-sports') }}">OutDoor Sports</a></li>
                      <li><a href="{{ route('front.yoga-aerobics') }}">Yoga and Aerobics</a></li>
					             <li><a href="{{ route('front.taekwondo') }}">Taekwondo</a></li>
                      
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ route('front.tour-trips') }}">Tour & Trips</a></li>
                      <li><a href="{{ route('front.class-room-activities') }}">Class Room Activities</a></li>
                      {{-- <li><a href="{{ route('front.rang-mahotsav') }}">Rang Mahotsav</a></li> --}}
                    </ul>
                  </li>
                   <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ route('front.gallery') }}">Photo Gallery</a></li>
                      <li><a href="{{ route('front.video') }}">Video Gallery</a></li>
                      {{-- <li><a href="{{ route('front.rang-mahotsav') }}">Rang Mahotsav</a></li> --}}
                    </ul>
                  </li>
                  <li><a href="{{ route('front.career') }}">Career</a></li>
                  
                  <li><a href="{{ route('front.contact') }}">Contact</a></li>
                  <li class="dropdown button-default">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Login <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li><a href="{{ route('student.home') }}">Parent's Login</a></li>

                        <li><a href="{{ route('admin.home') }}">Admin Login</a></li>
                      {{-- <li><a href="{{ route('front.rang-mahotsav') }}">Rang Mahotsav</a></li> --}}
                    </ul>
                  </li>

              </ul>
         

                   
                  
                    
               
              <form class="menu-search-form">
                <input type="text" name="search" placeholder="Search here...">
                <span class="menu-search-close"><i class="fa fa-times" aria-hidden="true"></i></span>
              </form>
  			    </div><!-- /.navbar-collapse -->
  			  </div><!-- /.container -->
  			</nav>
  		</div><!-- main menu -->
  	</header>
  	<!-- header End here -->
       