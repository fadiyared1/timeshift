@extends('layouts.app2')
@section('content')
@if (session('message'))
   <div class="alert alert-success">
      {{ session('message') }}
   </div>
@endif
<div class="row justify-content-center">
    <h2>Set a new password</h2>
    </div>
    <br>
    <div class="card-body">
      <form method="POST" action="{{ route('changep') }}">
          @csrf

          <div class="form-group row">
            <label for="current_password" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>

            <div class="col-md-6">
                <input id="current_password" type="password" class="form-control" name="current_password" required autocomplete="current-password">
            </div>
        </div>
          
    <div class="form-group row">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

      <div class="col-md-6">
          <input id="new_password" type="password" class="form-control @error('password') is-invalid @enderror" name="new_password" required autocomplete="new-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

      <div class="col-md-6">
          <input id="new_password_confirmation" type="password" class="form-control" name="new_password_confirmation" required autocomplete="new-password-confirmation">
      </div>
  </div>

  <div class="form-group row mb-0">
      <div class="col-md-6 offset-md-4">
          <button type="submit" class="btn btn-dark">
              {{ __('Change') }}
          </button>
      </div>
  </div>
</form>


</div>
@endsection
