@extends('layout.app')
@section('content')


<h1>Contact</h1>
@if(count($errors) > 0)
@foreach($errors->all() as $error)
<div class="alert alert-danger">
  <li>{{$error}}</li>
  
</div>

@endforeach

@endif
<form action="{{url('contact/submit')}}" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Message</label>
    <textarea name="message" class="form-control" placeholder="Enter Your Message">
    	
    </textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection