@extends('layouts.app1')
@section('content')
@if (session('message'))
   <div class="alert alert-success">
      {{ session('message') }}
   </div>
@endif
<h1>Enter the email address of the new user</h1>
<form method="POST" action="{{ route('adregister') }}">
  @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <input type="hidden" id="name" name="name" value="{{$name}}">
    <input type="hidden" id="password" name="password" value="password">
    <button type="submit" class="btn btn-dark">Submit</button>
</form>
@endsection
