@extends('layout.app')
@section('content')



<div class="container">
	<h1 style="text-align: center; margin-top: 25px;">CREATE NEW PRODUCT</h1>
	@if($errors->any())
	<h1  class="alert alert-danger">Whoops There's aprblem with your products</h1>
	@foreach($errors->all() as $error)
	<li class="alert alert-danger">{{$error}}</li>
	@endforeach
	@endif
	<form method="post" action="{{url('product')}}">
		@if(session('message'))
		<p class="alert alert-success">{{session('message')}}</p>
		@endif
		{{@csrf_field()}}
	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
				<label>Product Name</label>
				<input type="text" name="title" placeholder="Product Name" class="form-control">
				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
				<label>Product Detail</label>
				<textarea name="detail" placeholder="Detail..." class="form-control"></textarea>
				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<input type="submit" name="submit" value="Create" class="btn btn-primary">
				<a href="{{url('/products')}}" class="btn btn-secondary">Products List</a>
				
			</div>
		</div>
	</div>
	
</div>











@endsection