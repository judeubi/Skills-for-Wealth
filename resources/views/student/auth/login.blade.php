@extends('layout.app')
@section('content')
{{-- <<<<<<< HEAD
<div id="container1-1" class="container01">
  <h2>Student Login</h2>  
    <div class="container1-2">    
        <form action="{{Route('student.check')}}" method="POST">
          @csrf
          <div class="results"> --}}
            {{-- @if (Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif --}}
            {{-- @if (Session::get('error'))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
            @endif
        </div> --}}
        {{-- @error('email')
          <div class="text">
            {{$message}}
          </div>      
        @enderror --}}
          {{-- <div class="form-group">
            <label class="form-label" for="">Email</label>
            <input name="email" type="email" id="" class="" value="{{old('email')}}"/> --}}
            {{-- <span class="text-danger">@error('email') {{ $message }} @enderror</span> --}}
          {{-- </div> --}}
          {{-- @error('password')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror --}}
          {{-- <div class="form-group">
            <label class="" for="">Password</label>
            <input name="password" type="password" id="" class="" /> --}}
            {{-- <span class="text-danger">@error('password') {{ $message }} @enderror</span> --}}
          {{-- </div>
          <div class="form-group">
            <button type="submit"
              class="">Login</button>
          
          
              <p class="">New to Skills for wealth? <a href="/student/register"
                class=""><u>Register here</u></a></p>
  
            </div> --}}
        

        <div class="results">
            {{-- @if (Session::get('success'))
                  <div class="alert alert-success">
                      {{Session::get('success')}}
                  </div>
            @endif --}}
            @if (Session::get('error'))
              <div class="alert alert-danger">
                  {{Session::get('error')}}
              </div>
            @endif
      </div>
      <div class="hero2"> 

        <h3 style="text-align: center; padding: 30px 0px 10px 0px;"> Login Form</h3> 
      
        <div>
              <form action="{{Route('student.check')}}" method="POST"  class="contactform" enctype="multipart/form-data">
                @csrf
                
              @error('email')
                <div class="text">
                  {{$message}}
                </div>      
              @enderror

            <input name="email" type="email" id="" class=""  placeholder="Enter your email address" value="{{old('email')}}" required>
          
            @error('password')
            <div class="text">
              {{$message}}
            </div>      
            @enderror
      <br>
            <input name="password" type="password" id="" class=""  placeholder="Enter your password" required>
            <br>
            <input type="submit" value="Login">
                    <p class="">New to Skills For Wealth? <a href="/student/register"
                      class=""><u> Register here</u></a></p>  
              </form>
            </div>
      </div>
@endsection