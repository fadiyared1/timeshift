@extends('layouts.app2')
@section('content')
@if (session('message'))
   <div class="alert alert-success">
      {{ session('message') }}
   </div>
@endif
<div class="row justify-content-center">
    <h2>Change your job</h2>
    </div>
    <br>
    <div class="card-body">
      <form method="POST" action="{{ route('changej') }}">
          @csrf

          <div class="form-group row">
            <label for="new_job" class="col-md-4 col-form-label text-md-right">{{ __('New Job') }}</label>

            <div class="col-md-6">
                <input id="new_job" type="text" class="form-control" name="new_job" required autocomplete="new_job">
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