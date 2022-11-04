@extends('layout.admin')
<div class="hero3">
@section('content')

{{-- <div class="form-group">
    <h3>Add course</h3>
    <form action="{{Route('add.course')}}" method="POST">
        @csrf
        <input type="text" name='course' placeholder="Course name">
        <input type="submit" value="Add course">
   </form>
</div> --}}
    <div class="sidebar">
        <div class="sidebar_container">
        <div class="sidebar_item">
                <i class="fas fa-th-large" id="dash"></i>
                <p>Dashboard</p>
            </div>

        <div class="sidebar_item">
            <i class="fas fa-book"></i>
            <a href="/volunteer/courses" class="navbar-brand mx-5">Add Courses</a>
        </div>

            <div class="sidebar_item">
                <i class="fas fa-eye"></i>
                <p>Activities</p>
            </div>
            <div class="sidebar_item">
                <i class="far fa-calendar"></i>
                <p>Events</p>
            </div>
            <div class="sidebar_item">
                <i class="fas fa-users"></i>
                <a href="/admin/volunteer/pending" class="navbar-brand mx-5">Volunteer</a>
            </div>

            <div class="sidebar_item">
                <i class="fas fa-exclamation-circle"></i>
                <p>Help</p>
            </div>
            <div class="sidebar_item">
                <i class="fas fa-id-card"></i>
                <p>Profile</p>
            </div>
        </div>
    </div>
</div>

{{-- <div class="studentDetails">
    <div class="pic">
        <p>
            <img src="{{URL::asset('public/user/'.Auth::user()->profile_pic)  }}" alt="pic" style="height:250px;width:250px; border-radius:50%;">
        </p>
    </div>
    <div class="content">
        <p> <strong>Firstname:</strong> {{Auth::user()->firstname}}  </p>
        <p> <strong>Lastname:</strong> {{Auth::user()->lastname}}   </p>
        <p> <strong>Email:</strong> {{Auth::user()->email}}</p>
        <p> <strong>Address:</strong> {{Auth::user()->address}}  </p>
    </div>
</div> --}}

    <script src="{{ URL::asset('js/script.js') }}"></script>
@endsection
