@extends('layouts.app1')
@section('content')
@if (session('message'))
   <div class="alert alert-success">
      {{ session('message') }}
   </div>
@endif
<title>Users</title>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Created at</th>
        <th scope="col">Role</th>
        <th scope="col">Delete</th>
        <th scope="col">Suspend/Activate</th>
        <th scope="col">Edit</th>
        <th scope="col">Resend Invitation</th>
      </tr>
    </thead>
    <tbody>
     @foreach($users as $user)
      <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        @if($user->hasRole(['user']))
        <td>User</td>
        <td><a href="/admin/{{$user->id}}/delete">Delete</a></td>
        @if($user->suspend == 0)
        <td><a href="/admin/{{$user->id}}/suspend">Suspend</a></td>
        @else
        <td><a href="/admin/{{$user->id}}/open">Activate</a></td>
        @endif
        <td><a href="/admin/{{$user->id}}/edit">Edit</a></td>
        <td>
        @if($user->email_verified_at == null)
        <a href="/admin/{{$user->id}}/resend">Resend</a>
        @endif
        </td>
        @endif
        @if($user->hasRole(['administrator']))
        <td>Admin</td>
        @endif
      </tr>
     @endforeach
    </tbody>
  </table>

@endsection