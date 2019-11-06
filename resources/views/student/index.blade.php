@extends('layout.app')
@section('content')

<div class="container">
	<h1 style="text-align: center; margin-top: 25px;">LIST OF STUDENTS</h1>
	<div class="row">
		<div class="col-lg-12">
			<table class="table">
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Action</th>
				</tr>
				@foreach($students as $student)

                    
				<tr>
					<td>{{$student->id}}</td>
					<td>{{$student->fname}}</td>
					<td>{{$student->lname}}</td>
					<td><a href="{{action('StudentController@edit',$student['id'])}}" class="btn btn-primary">Edit</a><a class="btn btn-warning" href="{{action('StudentController@destroy',$student['id'])}}">Delete</a></td>
				</tr>
				@endforeach
			</table>
			
		</div>
		
	</div>
	
</div>











@endsection