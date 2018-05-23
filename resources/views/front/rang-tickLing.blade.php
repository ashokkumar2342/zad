@extends('front.layout.main')
@push('styles')
 
@endpush
@section('body')

   <!-- Page Header Start here -->
    <section class="page-header" style="background-image: url('{{ asset('images/background/events.jpg') }}');">
      <div class="overlay">
        <div class="container">
          <h3>&nbsp;</h3>          
        </div><!-- container -->
      </div><!-- overlay -->
    </section><!-- page header -->
    <!-- Page Header End here -->
      <!-- facility Start here -->
    <section class="facility" style="padding-top:50px">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-9 col-xs-12">
            <h4>TickLing Adventure Land (Gurgaon)</h4> 
            <p>Adventure#Entertainment#Enjoyment#Mountain Trekking#Zorbing#Ziplining#Commando net Climbing#Pottery#Rock Climbing#Group activities#Tractor ride#Tug of War#Delicious Food n alot more#Amazing experience! The students of ZAD GLOBAL SCHOOL enjoyed the adventurous trip to CAMP TIKKLING (Gurgaon).</p> 
                
             <br>
            <!-- Gallery Start here -->
              <div class="row gallery">
                <div class="col-md-4 gallery-item branding packing">
                   <div class="gallery-image">
                    <img src="{{ asset('images/gallery/t.jpg') }}" alt="TickLing Adventure Land (Gurgaon)" class="img-responsive thumbnail">
                    <div class="gallery-overlay"> </div>
                    <div class="gallery-content">
                      <a href="{{ asset('images/gallery/t.jpg') }}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>                               
                    </div>
                  </div>
                </div>
                <div class="col-md-4 gallery-item branding packing">
                   <div class="gallery-image">
                    <img src="{{ asset('images/gallery/t2.jpg') }}" alt="TickLing Adventure Land (Gurgaon)" class="img-responsive thumbnail">
                    <div class="gallery-overlay"> </div>
                    <div class="gallery-content">
                      <a href="{{ asset('images/gallery/t2.jpg') }}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>                               
                    </div>
                  </div>
                </div>
                <div class="col-md-4 gallery-item branding packing">
                   <div class="gallery-image">
                    <img src="{{ asset('images/gallery/t3.jpg') }}" alt="TickLing Adventure Land (Gurgaon)" class="img-responsive thumbnail">
                    <div class="gallery-overlay"> </div>
                    <div class="gallery-content">
                      <a href="{{ asset('images/gallery/t3.jpg') }}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>                               
                    </div>
                  </div>
                </div>
                 <div class="col-md-4 gallery-item branding packing">
                   <div class="gallery-image">
                    <img src="{{ asset('images/gallery/t4.jpg') }}" alt="TickLing Adventure Land (Gurgaon)" class="img-responsive thumbnail">
                    <div class="gallery-overlay"> </div>
                    <div class="gallery-content">
                      <a href="{{ asset('images/gallery/t4.jpg') }}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>                               
                    </div>
                  </div>
                </div> 
                 <div class="col-md-4 gallery-item branding packing">
                   <div class="gallery-image">
                    <img src="{{ asset('images/gallery/t5.jpg') }}" alt="TickLing Adventure Land (Gurgaon)" class="img-responsive thumbnail">
                    <div class="gallery-overlay"> </div>
                    <div class="gallery-content">
                      <a href="{{ asset('images/gallery/t5.jpg') }}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>                               
                    </div>
                  </div>
                </div> 
                 <div class="col-md-4 gallery-item branding packing">
                   <div class="gallery-image">
                    <img src="{{ asset('images/gallery/t6.jpg') }}" alt="TickLing Adventure Land (Gurgaon)" class="img-responsive thumbnail">
                    <div class="gallery-overlay"> </div>
                    <div class="gallery-content">
                      <a href="{{ asset('images/gallery/t6.jpg') }}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>                               
                    </div>
                  </div>
                </div>                  
              </div>                      
            </div>
              
            <div class="col-md-3 col-sm-3 col-xs-12 sidebar">                          
                <div class="sidebar-item">
                  <h3 class="sidebar-title">Quick links</h3>
                  <ul class="sidebar-categories"> 
                    <li><a href="{{ route('front.adventure-land') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Adventure Land</a></li>
                    <li><a href="{{ route('front.ganesha') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Ganesha</a></li>
                    <li><a href="{{ route('front.highway-dhani') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Highway Dhani</a></li>
                    <li><a href="{{ route('front.tickLing') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> TickLing (Gurgaon)</a></li>
                     
                  </ul>
                  <br><br>
                  {{-- <img src="{{ asset('images/bb2.jpg') }}" class="thumbnail"> --}}
                </div><!-- sidebar item -->            
            </div>
        </div><!-- row -->
      </div><!-- container -->
    </section><!-- facility -->
    <!-- facility End here -->
    <!-- About Start here -->
    <section class="about">
      <div class="overlay padding-2">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="about-image">
                
              </div>
            </div>
            <div class="col-md-6">
              
            </div>
          </div><!-- row -->
        </div><!-- container -->
      </div><!-- overlay -->
    </section><!-- about -->
    <!-- About End here -->
@endsection
 


 