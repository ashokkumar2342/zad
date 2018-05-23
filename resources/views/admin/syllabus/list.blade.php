@extends('admin.layout.base')
@section('body')
    <section class="content">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Syllabus</h3>
              <div class="panel-group">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title text-right">
                      <a data-toggle="collapse" href="#homework_form">Upload File</a>
                    </h4>
                  </div>
                  <div id="homework_form" class="panel-collapse collapse {{ (@$syllabus || $errors->first())?'in':'' }}">
                    <div class="panel-body ">
                   {{ Form::open(['route'=>(@$syllabus)?['admin.syllabus.update',$syllabus->id]:'admin.syllabus.post','files'=>true]) }}
                             <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group">
                                        @php
                                            $n = 12/count($centers);
                                        @endphp
                                        @foreach($centers as $center)
                                            <div class="col-lg-{{ $n }}">
                                                <div class="radio-custom radio-danger">
                                                    {!! Form::radio('center', $center->id, @$syllabus->center_id, ['required','id'=>'center'.$center->id]) !!}
                                                    {!! Form::label('center'.$center->id, $center->name, ['class'=>'control-label','style'=>'cursor:pointer']) !!}
                                                </div>
                                            </div>
                                        @endforeach
                                        <p class="text-danger">{{ $errors->first('center') }}</p>
                                    </div>
                                </div>
                            </div>                    
                            <hr>
                             <div class="row">{{--row start --}}
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                             <div class="col-lg-6">                         
                                                <div class="form-group">
                                                    {{ Form::label('session','Session',['class'=>' control-label']) }}                         
                                                    {!! Form::select('session',$sessions, @$syllabus->session_id, ['class'=>'form-control','placeholder'=>'choose Session','required']) !!}
                                                    <p class="text-danger">{{ $errors->first('session') }}</p>
                                                </div>
                                            </div>
                                             <div class="col-lg-6">                         
                                                <div class="form-group">
                                                    {{ Form::label('class','Class',['class'=>' control-label']) }}
                                                    {!! Form::select('class',[], null, ['class'=>'form-control','required']) !!}
                                                    <p class="text-danger">{{ $errors->first('class') }}</p>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                             </div>   
                             <div class="row">{{--row start --}}
                                <div class="col-md-12 ">                                    
                                   <div class="col-lg-6">                         
                                      <div class="form-group">
                                          {{ Form::label('title','Title',['class'=>'control-label']) }}
                                           {{ Form::text('title',@$syllabus->title,['class'=>'form-control' ,'required']) }}
                                           <p class="text-danger">{{ $errors->first('title') }}
                                           </p>                           
                                        </div>
                                    </div>
                                    <div class="col-lg-6">                         
                                      <div class="form-group">
                                          {{ Form::label('syllabus','Upload file .pdf & .docx',['class'=>'control-label']) }}
                                           {{ Form::file('syllabus',@$syllabus->syllabus,['class'=>'form-control','required']) }}
                                           <p class="text-danger">{{ $errors->first('syllabus') }}
                                           </p>                           
                                        </div>
                                    </div>
                                </div>
                            </div> 
                              <hr> 
                             <div class="row">
                        <div class="col-md-12 text-center">
                            <button class="btn btn-success">{{ (@$syllabus)?'Update':'Upload' }}</button>
                        </div>
                    </div>                            
                    {{ Form::close() }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="dataTable" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>           
                  <th>Id</th>
                  <th>Date</th>
                  <th>Sessions</th>
                  <th>Class Name</th>
                  <th>Title</th>
                  <th width="80px">Action</th>                  
                </tr>
                </thead>
                <tbody>

                @foreach($syllabuses as $syllabus)
                <tr>
                  <td>{{ $syllabus->id }}</td>
                  <td>{{ $syllabus->created_at }}</td>
                  <td>{{ $syllabus->sessions->date or '' }}</td>
                  <td>{{ $syllabus->classes->name or '' }}</td>
                  <td>{{ $syllabus->title }}</td>  
                  <td align="center">
                    <a class="btn btn-info btn-xs" href="{{ route('admin.syllabus.show',$syllabus->id) }}"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this data ?')" href="{{ route('admin.syllabus.delete',$syllabus->id) }}"><i class="fa fa-trash"></i></a>
                  </td>
                 
                </tr>
                @endforeach
                </tbody>
                 
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- Trigger the modal with a button -->


    </section>
    <!-- /.content -->
@endsection
@push('links')
<style type="text/css">
  .feeTable tbody td{
    padding:10px;
    margin:10px;
  }
</style>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@endpush
 @push('scripts')
 <script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

 <script type="text/javascript">
 $(document).ready(function(){
        $('#dataTable').DataTable();
    });
     @if(@$syllabus || $errors->first())
     if ($("#session").val()>0) {
        $('#class').html('<option value="">Searching ...</option>');
        $.ajax({
          method: "get",
          url: "{{ route('admin.class.search') }}",
          data: { id:  $("#session").val()}
        })
        .done(function( response ) {            
            if(response.length>0){
                $('#class').html('<option value="">Select Class</option>');
                 var selVal = {{  (@$syllabus->class_id)?@$syllabus->class_id: 0  }};
                for (var i = 0; i < response.length; i++) {
                   var selected=(response[i].id==selVal)?"selected":"";
                    $('#class').append('<option value="'+response[i].id+'"'+selected+'>'+response[i].alias+'</option>');
                } 
                if (response.length && $("#class").val()) {
                  $('#section').html('<option value="">Searching ...</option>');        
                  $.ajax({
                    method: "get",
                    url: "{{ route('admin.section.search') }}",
                    data: { id: $('#class').val(), session: $('#session').val() }
                  })
                  .done(function( response ) {
                      $('#totalFee').val(response.fee);
                      if(response.section.length>0){
                         $('#section').html('<option value="">Select Section</option>');
                         var selVal2 = {{  (@$syllabus->section_id)?@$syllabus->section_id: 0  }};
                          for (var i = 0; i < response.section.length; i++) {
                            var selected2=(response.section[i].id==selVal2)?"selected":"";
                              $('#section').append('<option value="'+response.section[i].id+'"'+selected+'>'+response.section[i].name+'</option>');
                          } 
                      }
                      else{
                          $('#section').html('<option value="">Not found</option>');
                      }
                      
                  });
                } 
            }
            else{
                $('#class').html('<option value="">Not found</option>');
            }
            
        });
     }
      
    
     @endif
    $("#session").change(function(){
        $('#class').html('<option value="">Searching ...</option>');
        $.ajax({
          method: "get",
          url: "{{ route('admin.class.search') }}",
          data: { id: $(this).val() }
        })
        .done(function( response ) {            
            if(response.length>0){
                $('#class').html('<option value="">Select Class</option>');
                for (var i = 0; i < response.length; i++) {
                    $('#class').append('<option value="'+response[i].id+'">'+response[i].alias+'</option>');
                } 
            }
            else{
                $('#class').html('<option value="">Not found</option>');
            }
            
        });
    });
 
</script>

 @if(Session::has('message'))
<script type="text/javascript">
    Command: toastr["{{ Session::get('class') }}"]("{{ Session::get('message') }}");
</script>
@endif

@endpush
