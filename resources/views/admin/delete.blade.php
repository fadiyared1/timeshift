@extends('layouts.app1')
@section('content')
@if (session('message'))
   <div class="alert alert-success">
      {{ session('message') }}
   </div>
@endif
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				@if($user !== null)
<h2>Are You Sure You Want To Delete The User:</h2>
<h1>{{$user->name}}</h1>
</div>
<button><a href="/admin/user/{{$user->id}}/">Yes</a></button>
</form>
@endif
<button><a href="{{route('users')}}">No</a></button>
</div>
</div>
</div>
@endsection