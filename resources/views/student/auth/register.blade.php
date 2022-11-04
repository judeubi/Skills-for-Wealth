@extends('layout.app')
@section('content')

<div class="hero2"> 

  <h3 style="text-align: center; padding: 30px 0px 10px 0px;">Student Registration Form</h3> 
 
  <div>
        <form action="{{Route('student.create')}}" method="POST"  class="contactform" enctype="multipart/form-data">
          @csrf
          <div class="results">
            @if (Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif

            @if (Session::get('error'))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
            @endif
        </div>
          {{-- <div class="form-group">
            <label class="" >Firstname</label>
            <input name="firstname" type="text" class="" value="{{old('firstname')}}"/> --}}
            {{-- <span class="text-danger">@error('firstname') {{ $message }} @enderror</span> --}}
          {{-- </div> --}}
          

          {{-- <div class="form-group">
            <label class="" for="">Lastname</label>
            <input name="lastname" type="text" id="" class="" value="{{old('lastname')}}"/> --}}
            {{-- <span class="text-danger">@error('lastname') {{ $message }} @enderror</span> --}}
          {{-- </div> --}}
{{--           
          <div class="form-group">
            <label class="form-label" for="">Email</label>
            <input name="email" type="email" id="" class="" value="{{old('email')}}"/> --}}
            {{-- <span class="text-danger">@error('email') {{ $message }} @enderror</span> --}}
          {{-- </div> --}}
{{--           
          <div class="form-group">
            <label class="" for="">Phone Number</label>
            <input name="phone" type="number" id="" class="" value="{{old('phone')}}"/> --}}
            {{-- <span class="text-danger">@error('phone') {{ $message }} @enderror</span> --}}
          {{-- </div>
          <div class="form-group">
            <label class="" for="">Address</label>
            <input name="address" type="text" id="" class="" value="{{old('address')}}"/> --}}
            {{-- <span class="text-danger">@error('address') {{ $message }} @enderror</span> --}}
          {{-- </div> --}}

        {{-- @error('profile_photo')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror --}}
          {{-- <div class="form-group">
            <label class="" for="">Profile Photo</label>
            <input name="profile_photo" type="file" id="" class="" />
          </div> --}}
          {{-- @error('password')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror --}}
          {{-- <div class="form-group">
            <label class="" for="">Password</label>
            <input name="password" type="password" id="" class="" />
          </div> --}}
          {{-- @error('password_confirmation')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror --}}
          {{-- <div class="form-group">
            <label class="" for="">Confirm Password</label>
            <input name="password_confirmation" type="password" id="" class="" />
          </div> --}}

       
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

      
      {{-- <input name="course" type="radio" value="Baking"> 
      <label for="Baking">Baking</label>
      <input name="course" type="radio" value="Tailoring"> 
      <label for="Tailoring">Tailoring</label>
      <input name="course" type="radio" value="Web Development"> 
      <label for="Web Development">Web Development</label> --}}
      
<div class="form-group">
    <p>Courses</p>
    <select name="course_id" id="courses">
        @foreach ($courses as $course)
          <option value="{{$course->id}}">{{$course->name}}</option>
        @endforeach
    </select>
</div>
</body>
          
      @error('address')
          <div class="text-danger">
           {{$message}}
          </div>     
        @enderror

      
      <input name="address" type="textarea" id="" class="" placeholder="Enter your address" value="{{old('address')}}" required><br>
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
              <p class="">Already have an account? <a href="/student/login"
                class=""><u>Login here</u></a></p>  
        </form>
      </div>
</div>
@endsection