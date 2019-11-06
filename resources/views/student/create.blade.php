@extends('layout.app')
@section('content')

<div class="container">

	<h1 style="text-align: center; margin-top: 25px;">ADD NEW STUDENTS</h1>
	<div class="pull-left">
		<a class="btn btn-primary" href="{{action('StudentController@index')}}">List Of Students</a>
		
	</div>
	<hr>
	<div class="container">
		@if(session('success'))
		<p class="alert alert-success">{{session('success')}}</p>
		@endif
		
	</div>
	<form action="{{action('StudentController@store')}}" method="post">
		{{csrf_field()}}
	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
				@if(count($errors) > 0)
				@foreach($errors->all() as $error)
	<li class="alert alert-danger">{{$error}}</li>
	@endforeach
	@endif
				<label>First Name</label>
				<input type="text" name="fname" placeholder="First Name" class="form-control">
				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
				<label>Last Name</label>
				<input type="text" name="lname" placeholder="Last Name" class="form-control">
				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
				
				<input type="submit" name="submit"  class="btn btn-primary" value="ADD">
				
			</div>
		</div>
	</div>
</form>
	
</div>




@endsection