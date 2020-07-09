@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<div>
			<ul class="alert-danger">
				<li>{{$error}}</li>
			</ul>
		</div>
	@endforeach
@endif

@if(session('success'))
	<div class="alert alert-success alert-dismissible fade show" role="alert" style="text-align: center; width: 300px; float: right; margin-right: 122px; margin-top: 20px;">
	  	  <strong>{{session('success')}}</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
@endif
@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align: center; width: 300px; float: right; margin-right: 122px; margin-top: 20px;">
	<strong>{{session('error')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


