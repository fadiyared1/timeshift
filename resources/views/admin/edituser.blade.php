@extends('layouts.app1')
@section('content')
@if (session('message'))
   <div class="alert alert-success">
      {{ session('message') }}
   </div>
@endif
<div class="form-group row">
  <div class="col-md-6 offset-md-4">
<h1>Enter the new information of the user</h1>
  </div>
</div>
<form method="POST" action="{{ route('edituser') }}">
  @csrf
  <div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
  <label for="Job" class="col-md-4 col-form-label text-md-right">{{ __('Job') }}</label>

  <div class="col-md-6">
      <input id="job" type="text" class="form-control @error('job') is-invalid @enderror" name="job" value="{{$user->job}}" required autocomplete="job">

      @error('job')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
  </div>
</div>

<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
    <input type="hidden" id="id" name="id" value="{{$user->id}}">
    <div class="form-group row">
      <div class="col-md-6 offset-md-4">
    <button type="submit" class="btn btn-dark">Submit</button>
      </div>  
  </div>
</form>
@endsection