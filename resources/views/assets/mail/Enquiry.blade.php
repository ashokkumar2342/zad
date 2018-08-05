@component('mail::message')
# Zad Global School Website Enquiry 

  

 <div class="container">
 <div class="row">
 
 	 
 	<div class="col-md-6">
 	Name:
 		{{ $enquiry->name }}
 			 
 	</div>
 	<div class="col-md-6">
 	Email:
 		{{ $enquiry->email }}
 	</div>
 	 
 	<div class="col-md-6">
 	Mob:
 		{{ $enquiry->mobile }}
 	</div>
 	<div class="col-md-4">
 	Address:
 		{{ $enquiry->address }}
 	</div>
{{--  	<div class="col-md-4">
 	Resume:
 		
 		<a href="storage/file/{{ $enquiry->resume }}">Resume Download</a>
 	</div> --}}
 	 
 	 

 </div>
 	
 </div>

Thanks,<br>
 ZAD Global School
@endcomponent
