@extends('layout.app')
@section('content')
<div class="container">
	<h1 style="margin-top: 20px; text-align: center;" >MESSAGES LIST</h1>
	<div>
		@if(count($messages)) > 0)

		@foreach($messages as $message)

		<div>
			<ul class="list-group">
			<li class="list-group-item"> 
			Email:{{$message->email}}
		</li>
		<li class="list-group-item"> 
			Messages: {{$message->message}}
			<p>Date:{{$message->created_at}}</p>
		</li>
		</ul>


		</div>

		@endforeach


		@endif
	</div>

</div>




@endsection