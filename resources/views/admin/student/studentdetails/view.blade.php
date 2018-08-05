@extends('admin.layout.base')
@push('links')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endpush
@section('body')

    <section class="content">
      <div class="box">       
        <div class="box-header">
        <ol class="breadcrumb text-right">
         <h4  style="float:left;">Student details</h4>
         <a    class="btn btn-warning btn-sm" title="Edit Student" href="{{ route('admin.student.totalfeeedit',$student->id) }}"><i class="fa fa-pencil"></i> Edit Total Fee</a>
          <a    class="btn btn-warning btn-sm" title="Edit Student" href="{{ route('admin.student.profileedit',$student->id) }}"><i class="fa fa-pencil"></i> Edit Profile</a> 
          @if(count($student->studentFee) < $student->paymentType->times)<li><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#addfee">Add Fees</button></li>@endif
        </ol>
      </div>
      <!-- /.box-header -->
          <div class="box-body"> 
              <div class="col-md-9">
              <div class="row">
                <div class="col-md-6">
                @php
                  $totalDepFee = 0;
                 foreach ($student->studentFee as $studentFe):
                   $totalDepFee += $studentFe->discount+$studentFe->received_fee;
                 endforeach
                 @endphp
                      <h4> Balance : <b>{{$student->totalFee-$totalDepFee }}</b></h4>                      
                     </div>
              </div>
                 <div class="row">
                 <div class="col-md-6">
                        <h4> Username : <b>{{ $student->username }}</b></h4>
                  </div>
                  <div class="col-md-6">
                        <h4> Name : <b>{{ $student->name }}</b></h4>
                    </div>
                     <div class="col-md-6">
                      <h4> Father's Name : <b>{{ $student->father_name }}</b></h4>
                     </div>
                     <div class="col-md-6">
                      <h4> Center : <b>{{ $student->centers->name or '' }}</b></h4>                      
                     </div>
                      <div class="col-md-6">
                      <h4> Session : <b>{{ $student->sessions->date or '' }}</b></h4>                      
                     </div>
                     <div class="col-md-6">
                      <h4> Class : <b>{{ $student->classes->name or '' }}</b></h4>                      
                     </div>
                     <div class="col-md-6">
                      <h4> Section : <b>{{ $student->sections->name or '' }}</b></h4>                      
                     </div>
                     <div class="col-md-6">
                      <h4> Date Of Addmission : <b>{{ $student->date_of_admission or '' }}</b></h4>   
                                     
                     </div>
                     <div class="col-md-6">
                      <h4> Date Of Birth : <b>{{ $student->dob or '' }}</b></h4>                      
                     </div>
                     <div class="col-md-6">
                      <h4> Mobile SMS : <b>{{ $student->mobile_sms or '' }}</b></h4>
                      </div>
                      <div class="col-md-6">
                      <h4> Mother's Mobile : <b>{{ $student->mobile_first or '' }}</b></h4>
                      </div>
                      <div class="col-md-6">
                      <h4> Father's Mobile : <b>{{ $student->mobile_secound or '' }}</b></h4>
                      </div>
                     <div class="col-md-6">
                      <h4> Transport Facility : <b>@if($student->transport_id) Yes @else No @endif</b></h4>
                     </div>

                    
                     
                   
                     <div class="col-md-12">
                      <h4> Address : {{ $student->address }}</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                @php
                $profile = route('admin.student.image',$student->picture);
                @endphp
                <div class="col-md-12">
                 <div id="showImg">
                    <div style="height: 100px; width: 100px; background-color: #eee;">
                      <img width="100" height="100px" src="{{  ($student->picture)? $profile : asset('profile-img/user.png') }}">
                    </div>
                  <a href="javascript:;">Change Image</a>
                </div>
                <div id="changeImg" class="hidden">
                  {!! Form::open(['route'=>['admin.student.profilepic.update',$student->id],'files'=>true]) !!}
                    <div class="col-md-12">
                      {!! Form::file('student_photo', ['class'=>'form-control']) !!}
                      <p class="text-danger">{{ $errors->first('student_photo') }}</p>
                    </div>
                    <div class="col-md-6"><button type="submit" class="btn btn-primary">Change</button> </div>
                    <div class="col-md-6"><br><a href="javascript:;">Cancel</a></div>
                  
                   {!! Form::close() !!}
              </div>                         
            </div>       
          </div>
            <!-- /.box-body -->
        </div>
          <!-- /.box -->
          <!-- Trigger the modal with a button -->
         

    </section>
    <!-- /.content -->
    <!-- Trigger the modal with a button -->
<section class="content">
   <table class="table table-striped box">
            <tr><th>Installment Fees </th><th>Discount</th><th>Receipt No</th><th>Receipt Date</th><th>Other Fee</th><th>Received Fees</th><th>Custom</th></tr>
            @php
              $totalFee=0;
            @endphp
            @foreach($student->studentFee as $studentFee)
            @php
              $totalFee+=$studentFee->received_fee+$studentFee->discount;
            @endphp
            <tr>
              <td>{{ $studentFee->installment_fees }}</td>
              <td>{{ $studentFee->discount }}</td>
              <td>{{ $studentFee->receipt_no }}</td>
              <td>{{ $studentFee->receipt_date }}</td>
              <td>{{ $studentFee->other_fee }}</td>
              <td>{{ $studentFee->received_fee }}</td>
              <td>
                <a class="btn btn-warning btn-xs" href="{{ route('admin.student.fee.edit',$studentFee->id) }}"><i class="fa fa-pencil"></i></a>
                <a class="btn btn-danger btn-xs" title="Fee Delete" onclick="return confirm('Are you sure to Fee delete.')" href="{{ route('admin.student.fee.delete',$studentFee->id) }}"><i class="fa fa-trash"></i></a>
                 <a class="btn btn-info btn-xs" href="{{ route('admin.student.receipt.fee',$studentFee->id) }}"><i class="fa fa-file-o"></i></a>
               </td>
             </tr>
            @endforeach
</table>
</section>
@if($student->payment_type_id && count($student->studentFee) < $student->paymentType->times )
@php
  @$balFee=$student->classFee->total_fee-$totalFee ;
@endphp
<!-- Modal -->
<div id="addfee" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    {{ Form::open(['route'=>'admin.student.fee.paid']) }}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pay Fee</h4>
      </div>
      <div class="modal-body">         
      <div class="row">
      
             {!! Form::hidden('student_id', $student->id, []) !!}
             @if(count($student->studentFee) < 1)
             
             {!! Form::hidden('admission_fees', $student->admission_fee, []) !!}
             {!! Form::hidden('admission_form_fees', $student->admission_form_fee, []) !!}
             {!! Form::hidden('registration_fees', $student->registration_fee, []) !!}
             {!! Form::hidden('annual_charges', $student->annual_charge, []) !!}
             {!! Form::hidden('caution_money', $student->caution_money, []) !!}
             
             {!! Form::hidden('activity_charges', ($student->activity_charge/$student->paymentType->times), []) !!}
             {!! Form::hidden('smart_class_fees', ($student->smart_class_fee/$student->paymentType->times), []) !!}
             {!! Form::hidden('sms_charges', ($student->sms_charge/$student->paymentType->times), []) !!}
             {!! Form::hidden('tution_fees', ($student->tution_fee/$student->paymentType->times), []) !!}
             {!! Form::hidden('transport_fee', ($student->transport_fee/$student->paymentType->times), []) !!}
             
            @else
             {!! Form::hidden('activity_charges', ($student->activity_charge/$student->paymentType->times), []) !!}
             {!! Form::hidden('smart_class_fees', ($student->smart_class_fee/$student->paymentType->times), []) !!}
             {!! Form::hidden('sms_charges', ($student->sms_charge/$student->paymentType->times), []) !!}
             {!! Form::hidden('tution_fees', ($student->tution_fee/$student->paymentType->times), []) !!}
             {!! Form::hidden('transport_fee', ($student->transport_fee/$student->paymentType->times), []) !!}
            @endif
      <div class="row">{{--row start --}}
          <div class="col-md-12 ">
              <div class="form-group">
                  <div class="col-md-12">
                       <div class="col-lg-6 ">                         
                          <div class="form-group">
                              {{ Form::label('total_fees','Total Fees',['class'=>' control-label']) }}                         
                              {{ Form::text('total_fees',round(@$student->totalFee),['class'=>'form-control','required','readonly']) }}
                              <p class="text-danger">{{ $errors->first('total_fees') }}</p>
                          </div>
                      </div>
                       <div class="col-lg-6">            
                       @if(count($student->studentFee) < 1)
                          <div class="form-group">
                              {{ Form::label('installment_fees','Installment Fees',['class'=>' control-label']) }}                         
                              {{ Form::text('installment_fees',round(@$instalfee=($student->firsttime_fee+($student->installment_fee/$student->paymentType->times))),['class'=>'form-control','required','readonly']) }}
                              <p class="text-danger">{{ $errors->first('installment_fees') }}</p>
                          </div>
                        @else
                        <div class="form-group">
                              {{ Form::label('installment_fees','Installment Fees',['class'=>' control-label']) }}                         
                              {{ Form::text('installment_fees',round(@$instalfee=$student->installment_fee/$student->paymentType->times),['class'=>'form-control','required','readonly']) }}
                              <p class="text-danger">{{ $errors->first('installment_fees') }}</p>
                          </div>
                        @endif
                      </div>
                  </div>
              </div>
          </div>
      </div>{{--row end --}}   
      <div class="row">{{--row start --}}
          <div class="col-md-12 ">
              <div class="form-group">
                  <div class="col-md-12">
                       <div class="col-lg-6 ">                         
                          <div class="form-group">
                              {{ Form::label('discount_type','Discount Type',['class'=>' control-label']) }} 
                              {!! Form::hidden('discount_type_id', $student->discountType->id, []) !!}                        
                              {{ Form::text('discount_name',$student->discountType->name ,['class'=>'form-control','required','readonly']) }}
                              <p class="text-danger">{{ $errors->first('discount_type_id') }}</p>
                          </div>
                      </div>
                       <div class="col-lg-6">   
                       
                          <div class="form-group">
                              {{ Form::label('discount','Discount',['class'=>' control-label']) }}
                             
                                  @if($student->discount_type_id == 1)                    
                                    {{ Form::number('discount',$discountfee=0,['class'=>'form-control','required']) }}     
                                  @elseif($student->discount_type_id == 2) 
                                      @if($student->centers->id == 3)                                                       
                                      {{ Form::number('discount',$discountfee=($student->class_id > 11)? '1710' : '1490',['class'=>'form-control']) }}
                                      @else
                                      {{ Form::number('discount',$discountfee=($student->class_id > 11)? '1410' : '1190',['class'=>'form-control']) }}
                                      @endif
                                  @elseif($student->discount_type_id == 3)
                                    {{ Form::number('discount',$discountfee=0,['class'=>'form-control']) }}
                                  @endif
                              <p class="text-danger">{{ $errors->first('discount') }}</p>
                          </div>
                        
                      </div>
                  </div>
              </div>
          </div>
      </div>{{--row end --}}   
       <div class="row">{{--row start --}}
          <div class="col-md-12 ">
              <div class="form-group">
                  <div class="col-md-12">
                       <div class="col-lg-6 ">                         
                          <div class="form-group">
                              {{ Form::label('receipt_no','Receipt No *',['class'=>' control-label']) }}                         
                              {{ Form::text('receipt_no','',['class'=>'form-control required','autocomplete'=>'off']) }}
                              <p class="text-danger">{{ $errors->first('receipt_no') }}</p>
                          </div>
                      </div>
                       <div class="col-lg-6">                         
                          <div class="form-group">
                              {{ Form::label('receipt_date','Receipt Date',['class'=>' control-label']) }}                         
                              {{ Form::text('receipt_date','',['class'=>'form-control datepicker','required','autocomplete'=>'off']) }}
                              <p class="text-danger">{{ $errors->first('receipt_date') }}</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>{{--row end --}} 
     
      <div class="row">{{--row start --}}
          <div class="col-md-12 ">
              <div class="form-group">
                  <div class="col-md-12">                       
                      <div class="col-lg-6">                         
                          <div class="form-group">
                          
                              {{ Form::label('other_fee','Other Fee',['class'=>' control-label']) }}                         
                              {{ Form::number('other_fee',0,['class'=>'form-control required']) }}
                              <p class="text-danger">{{ $errors->first('other_fee') }}</p>
                          </div>
                      </div>
                      
                      <div class="col-lg-6 ">                         
                          <div class="form-group">
                              {{ Form::label('amount_payable','Amount Payable ',['class'=>' control-label']) }}                         
                              {{ Form::number('amount_payable',round($amount_payble=$instalfee-$discountfee),['class'=>'form-control required']) }}
                              <p class="text-danger">{{ $errors->first('amount_payable') }}</p>
                          </div>
                      </div>
                      <div class="col-lg-6 ">                         
                          <div class="form-group">
                              {{ Form::label('received_fees','Received Fee ',['class'=>' control-label']) }}                         
                              {{ Form::number('received_fees',round($amount_payble=$instalfee-$discountfee),['class'=>'form-control required']) }}
                              <p class="text-danger">{{ $errors->first('received_fees') }}</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>{{--row end --}}
      <hr>
      <div class="row">{{--row start --}}
          <div class="col-md-12 ">
          <h5 style="margin-left: 30px;">If Payment Mode is Cheque</h5>
              <div class="form-group">
                  <div class="col-md-12">
                       <div class="col-lg-4">                         
                          <div class="form-group">
                              {{ Form::label('cheque_no','Cheque No',['class'=>' control-label']) }}                         
                              {{ Form::text('cheque_no','',['class'=>'form-control']) }}
                              <p class="text-danger">{{ $errors->first('cheque_no') }}</p>
                          </div>
                      </div>
                       <div class="col-lg-4">                         
                          <div class="form-group">
                              {{ Form::label('bank_name','Bank Name',['class'=>' control-label']) }}                         
                              {{ Form::text('bank_name','',['class'=>'form-control']) }}
                              <p class="text-danger">{{ $errors->first('bank_name') }}</p>
                          </div>
                      </div>
                       <div class="col-lg-4">                         
                          <div class="form-group">
                              {{ Form::label('cheque_date','Cheque Date',['class'=>' control-label']) }}                         
                              {{ Form::text('cheque_date','',['class'=>'form-control datepicker']) }}
                              <p class="text-danger">{{ $errors->first('cheque_date') }}</p>
                          </div>
                      </div>  
                  </div>
              </div>
          </div>
      </div>{{--row end --}} 
         
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Submit</button>
      </div>
      {{ Form::close() }}
    </div>

  </div>
</div>
</div>

@endif
@endsection
@push('links')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@endpush
 @push('scripts')

 <script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script type="text/javascript">
     $(document).ready(function(){
      $( ".datepicker" ).datepicker({dateFormat:'dd-mm-yy'});
        $('#dataTable').DataTable();
    });
     var errors = '{{ $errors->first() }}';
     if (errors) {
      $("#addfee").modal('show');
     }
 </script>
 <script type="text/javascript">
  $(document).ready(function(){
    $('#showImg').on('click','a',function(){
      $('#showImg').hide();
      $('#changeImg').removeClass('hidden');
    });
    
    $('#changeImg').on('click','a',function(){
      $('#changeImg').addClass('hidden');
      $('#showImg').show();
    });
    $("#other_fee").keyup(function(){
       amountPayable();
    });
    
    $("#discount").keyup(function(){
        amountPayable();
       
    });
   
    function amountPayable( other_fee=$("#other_fee").val(), discount=$("#discount").val(),installment_fees=$("#installment_fees").val()){
        other_fee = (other_fee == '')?0:other_fee;
        discount = (discount == '')?0:discount;
        installment_fees = (installment_fees == '')?0:installment_fees;
        $("#amount_payable").val((parseInt(other_fee)+parseInt(installment_fees))-parseInt(discount));
        $("#received_fees").val((parseInt(other_fee)+parseInt(installment_fees))-parseInt(discount));
        //return $("#discount").val()+$("#transport_fee").val()+$("#installment_fees").val()-$("#discount").val();
    }
    amountPayable();
  });
</script>
 @if(Session::has('message'))
<script type="text/javascript">
    Command: toastr["{{ Session::get('class') }}"]("{{ Session::get('message') }}");
</script>
@endif
@endpush