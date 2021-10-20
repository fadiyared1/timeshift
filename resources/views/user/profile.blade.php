@extends('layouts.app2')
@section ('head')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  * {
    box-sizing: border-box;
  }
  .openBtn {
    display: flex;
    justify-content: left;
  }
  .openButton {
    border: none;
    border-radius: 5px;
    background-color: #1c87c9;
    color: white;
    padding: 14px 20px;
    cursor: pointer;
    position: fixed;
  }
  .loginPopup {
    position: relative;
    text-align: center;
    width: 100%;
  }
  .formPopup {
    display: none;
    position: fixed;
    left: 45%;
    top: 5%;
    transform: translate(-50%, 5%);
    border: 3px solid #999999;
    z-index: 9;
  }
  .formContainer {
    max-width: 300px;
    padding: 20px;
    background-color: #fff;
  }
  .formContainer input[type=text],
  .formContainer input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 20px 0;
    border: none;
    background: #eee;
  }
  .formContainer input[type=text]:focus,
  .formContainer input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }
  .formContainer .btn {
    padding: 12px 20px;
    border: none;
    background-color: #8ebf42;
    color: #fff;
    cursor: pointer;
    width: 100%;
    margin-bottom: 15px;
    opacity: 0.8;
  }
  .formContainer .cancel {
    background-color: #cc0000;
  }
  .formContainer .btn:hover,
  .openButton:hover {
    opacity: 1;
  }
</style>
@endsection
@section('content')
@if (session('message'))
   <div class="alert alert-success">
      {{ session('message') }}
   </div>
@endif
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
         <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('images/user.png') }}" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{$user->name}}</h4>
                      <hr>
                      <p class="text-secondary mb-1"><var id="job">{{$user->job}}</var></p>

                                            <div class="openBtn">
                        <button onclick="openForm1()"><strong>Change Job</strong></button>
                      </div>
                      <div class="loginPopup">
                        <div class="formPopup" id="popupForm2">
                          <form method="POST" action="{{ route('changej') }}" class="formContainer">
                            @csrf
                            <h2>Change Job</h2>
                           <label for="email">
                              <strong>New Job</strong>
                            </label>
                            <input type="text" id="psw" placeholder="{{$user->job}}" name="new_job" required>
                            <button type="submit" class="btn">Change</button>
                            <button type="button" class="btn cancel" onclick="closeForm1()">Close</button>
                            
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$user->name}}
                     
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$user->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (239) 816-9029
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Joined at</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$user->created_at}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     
                      <div class="openBtn">
                        <button onclick="openForm()"><strong>Change Password</strong></button>
                      </div>
                      <div class="loginPopup">
                        <div class="formPopup" id="popupForm1">
                          <form method="POST" action="{{ route('changep') }}" class="formContainer">
                            @csrf
                            <h2>Change Password</h2>
                            <label for="psw">
                              <strong>Current Password</strong>
                            </label>
                            <input type="password" id="psw" placeholder="Current Password" name="current_password" required>
                            <label for="psw">
                              <strong>New Password</strong>
                            </label>
                            <input type="password" id="psw" placeholder="New Password" name="new_password" required>
                            <label for="psw">
                              <strong>Confirm Password</strong>
                            </label>
                            <input type="password" id="psw" placeholder="Confirm Password" name="new_password_confirmation" required>
                            <button type="submit" class="btn">Change</button>
                            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                            
                          </form>
                        </div>
                      </div>
                    </div>
                    <hr>
                  </div>
            </div>
          </div>
        </div>
    </div>
    </div>
    
           <script>
            function openForm() {
              document.getElementById("popupForm2").style.display = "none";
              document.getElementById("popupForm1").style.display = "block";
            }
            function closeForm() {
              document.getElementById("popupForm1").style.display = "none";
            }
          </script>
          <script>
            function openForm1() {
              document.getElementById("popupForm1").style.display = "none";
              document.getElementById("popupForm2").style.display = "block";
            }
            function closeForm1() {
              document.getElementById("popupForm2").style.display = "none";
            }
          </script>
       
@endsection