@extends('admin.layout.base')
@section('body')
    <section class="content">
    	<form action="{{ route('admin.curcular.post') }}" method="post">
        {{ csrf_field() }}
    	  <div class="form-group">
    	    <label for="title">Title</label>
    	    <input type="text" class="form-control" name="title" placeholder="Enter title here">
    	  </div>
    	  <div class="form-group">
    	    <label for="comment">Circular:</label>
    	    <textarea class="form-control" rows="7" name="body"></textarea>
    	  </div>
    	   
    	  <button type="submit" class="btn btn-default">Submit</button>
    	</form>
</section>
 

@endsection
@push('links')
 
@endpush
@push('scripts')
 
<script type="text/javascript">

</script>
 
 @if(Session::has('message'))
<script type="text/javascript">

    Command: toastr["{{ Session::get('class') }}"]("{{ Session::get('message') }}");
</script>
@endif
@endpush