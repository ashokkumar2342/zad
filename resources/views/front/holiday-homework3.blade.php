 @extends('front.layout.main')
@push('styles')
 
@endpush
@section('body')

   <!-- Page Header Start here -->
    <section class="page-header" style="background-image: url('{{ asset('images/background/page-header-bg.jpg') }}');">
      <div class="overlay">
        <div class="container">
          <h3>&nbsp;</h3>          
        </div><!-- container -->
      </div><!-- overlay -->
    </section><!-- page header -->
    <!-- Page Header End here -->
    <!-- Page Header End here -->
    <!-- facility Start here -->
    <section class="facility" style="padding-top:50px">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-9 col-xs-12">
             <h4>Summer Vacations (Holiday Homework) 2018-2019</h4>       
               <table>
                <thead>
                <tr>  
                  <th>Class Name</th>
                  <th>Title</th>
                  <th width="80px">Action</th>                                 
                </tr>
                </thead>
                <tbody>
                <tr>           
                  <td>Pre Nursery</td>
                  <td>Holidays Homework</td>
                  <td align="center">
                    <a class="btn btn-success btn-xs" target="blank" href="{{ asset('homework/work-pre-nursery.pdf') }}"> Download</a>
                  </td>                 
                </tr>
                <tr>
                  <td>L.K.G</td>
                  <td>Holidays Homework</td>
                  <td align="center">
                    <a class="btn btn-success btn-xs" target="blank" href="{{ asset('homework/NUMBER-RAINBOW.pdf') }}"> Download</a>
                  </td>                 
                </tr>
                <tr>
                  <td>L.K.G</td>
                  <td>Holidays Homework</td>
                  <td align="center">
                    <a class="btn btn-success btn-xs" target="blank" href="{{ asset('homework/Dear-Students.pdf') }}"> Download</a>
                  </td>                 
                </tr>               
                <tr>           
                  <td>Grade 1</td>
                  <td>Holidays Homework</td>
                  <td align="center">
                    <a class="btn btn-success btn-xs" target="blank" href="{{ asset('homework/grade-1.pdf') }}"> Download</a>
                  </td>                 
                </tr>
                <tr>           
                  <td>Grade 2</td>
                  <td>Holidays Homework</td>
                  <td align="center">
                    <a class="btn btn-success btn-xs" target="blank" href="{{ asset('homework/grade-2.pdf') }}"> Download</a>
                  </td>                 
                </tr>
                 <tr>           
                  <td>Grade 7</td>
                  <td>Holidays Homework</td>
                  <td align="center">
                    <a class="btn btn-success btn-xs" target="blank" href="{{ asset('homework/grade-7.pdf') }}"> Download</a>
                  </td>                 
                </tr>
                <tr>           
                  <td>Class 3</td>
                  <td>Holidays Homework</td>
                  <td align="center">
                    <a class="btn btn-success btn-xs" target="blank" href="{{ asset('homework/class-3.pdf') }}"> Download</a>
                  </td>                 
                </tr>
                <tr>           
                  <td>Class 4</td>
                  <td>Holidays Homework</td>
                  <td align="center">
                    <a class="btn btn-success btn-xs" target="blank" href="{{ asset('homework/class-4.pdf') }}"> Download</a>
                  </td>                 
                </tr>
                 <tr>           
                  <td>Class 5</td>
                  <td>Holidays Homework</td>
                  <td align="center">
                    <a class="btn btn-success btn-xs" target="blank" href="{{ asset('homework/class-5.pdf') }}"> Download</a>
                  </td>                 
                </tr>
                <tr>               
                <tr>           
                  <td>Class 6</td>
                  <td>Holidays Homework</td>
                  <td align="center">
                    <a class="btn btn-success btn-xs" target="blank" href="{{ asset('homework/class-6.pdf') }}"> Download</a>
                  </td>                 
                </tr>
                <tr>           
              
                                          
                </tbody>                 
              </table>           
               
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 sidebar">                          
                  <div class="sidebar-item">
                    <h3 class="sidebar-title">Quick links</h3>
                    <ul class="sidebar-categories">
                      <li><a href="{{ route('front.art-craft') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Art & Craft</a></li>
                      <li><a href="{{ route('front.dance') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Dance</a></li>
                      <li><a href="{{ route('front.music') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Music</a></li>
                      <li><a href="{{ route('front.mini-theater') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Mini Theater</a></li>            
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
@push('scripts')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if(Session::has('message'))
<script type="text/javascript">
 Command: toastr["{{ Session::get('class') }}"]("{{ Session::get('message') }}");
</script>
@endif
@endpush

