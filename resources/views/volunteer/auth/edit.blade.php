@extends('layout.app')
@section('content')

<div class="hero2"> 

  <h3 style="text-align: center; padding: 30px 0px 10px 0px;">Profile Edit Form</h3> 
 
  <div>
        <form action="{{Route('volunteer.create')}}" method="POST"  class="contactform" enctype="multipart/form-data">
          @csrf
       
          @error('firstname')
            <p class="text-danger">{{$message}}</p>    
        @enderror
         
        <input name="firstname" type="text" class="" placeholder="Enter your firstname" value="{{old('firstname')}}" required>
        
        @error('lastname')
          <div class="text-danger">
            {{$message}}
          </div>      
        @enderror

        <input name="lastname" type="text" id="" class=""  placeholder="Enter your lastname" value="{{old('lastname')}}" required>
          <br>
          
        @error('email')
          <div class="text">
            {{$message}}
          </div>      
        @enderror

        <input name="email" type="email" id="" class=""  placeholder="Enter your email address" value="{{old('email')}}" required>

        @error('phone')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror

      <input name="phone" type="text" id="" class="" placeholder="Enter your phone number" value="{{old('phone')}}"required>
        <br>

        @error('address')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror

      
      <input name="address" type="textarea" id="" class="" placeholder="Enter your address" value="{{old('address')}}" required>
          <br>
          @error('password')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror

      <input name="password" type="password" id="" class=""  placeholder="Enter a password" required>
      
       
        
        @error('password_confirmation')
          <div class="text-danger">
           {{$message}}
          </div>     
         @enderror

      <input name="password_confirmation" type="password" id="" class=""  placeholder="Confirm your password"  style="margin: " required>
         <br>

         @error('profile_photo')
         <div class="text-danger">
         {{$message}}
         </div>     
         @enderror
 
         <label class="" for="">Choose an image for your profile photo</label> <br>
         <input name="profile_photo" type="file" id="" class="" accept="image/*" style="padding-left:120px"  required> <br> <br>

            <input type="submit" value="Register">
        </form>
      </div>
</div>
@endsection