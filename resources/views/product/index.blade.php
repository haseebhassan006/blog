@extends('layout.app')
@section('content')

<div class="container">
<h1 style="text-align: center; margin-top: 25px;">LIST OF CREATED PRODUCTS</h1>
<div class="row">
<div class="pull-right">
	<a href="{{url('products/create')}}" class="btn btn-secondary">Create New Product</a>
	
</div>
</div>
<div class="row" style="margin-top: 20px;">
	@if(session('message'))
	<p class="alert alert-success">{{session('message')}}</p>
	@endif

	<table class="table" style="border:2;">
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Detail</th>
			<th>Action</th>
		</tr>
		@foreach($products as $product)
		<tr>
			<td>{{$product->id}}</td>
			<td>{{$product->title}}</td>
			<td>{{$product->detail}}</td>
			<td>
				<a href="{{action('ProductController@edit',$product['id'])}}" class="btn btn-primary">Edit</a>
				<a href="{{url('products/'.$product->id.'/destroy')}}" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>
	
</div>


@endsection