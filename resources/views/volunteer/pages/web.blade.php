@extends('layout.volunteer')
@section('content')

<div class="hero3"> 

  <h3 style="text-align: center; padding: 15px 0px 10px 0px;">Web Development Volunteer Post</h3> 
 
  <div>
      <form action=" {{Route('web.post')}}" method="POST"  class="contactform" enctype="multipart/form-data">
          @csrf

      <label for="title" class="form-label">Activity Title</label> <br>
      <input type="text" name="title"> <br> <br>
        
      <label for="description" >Details of Activity</label> <br>
      <textarea name="description" id="" cols="100" rows="7"></textarea> <br> <br>

      <label style="padding-left:150px;">Upload Activity File: </label>
      <input type="file" name="file"> <br> <br>

      <input type="submit" value="Post" class="subbtn">
          
      </form>
    </div>

</div>

@endsection