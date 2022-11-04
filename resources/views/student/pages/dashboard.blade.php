@extends('layout.student')
<div class="hero3">
@section('content')


    <div class="sidebar">
        <div class="sidebar_container">
        <div class="sidebar_item">
                <i class="fas fa-th-large" id="dash"></i>
                <p>Dashboard</p>
            </div>

        <div class="sidebar_item">
            <i class="fas fa-book"></i>
            <p>Courses</p>
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
                <p>Community</p>
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
<div class="studentDetails">

    <div class="pic">
        <p>
            <img src="{{URL::asset('public/user/'.Auth::user()->profile_pic)  }}" alt="pic" height="50px" width="50px" style="border-radius: 50%">
        </p>
    </div>
    <div class="content">
        <p> <strong>Fullname:</strong> {{Auth::user()->firstname}} {{Auth::user()->lastname}}   </p>
        <p> <strong>Email:</strong> {{Auth::user()->email}}</p>
        <p> <strong>Address:</strong> {{Auth::user()->address}}  </p>

        <div class="volposts">
            <h4>Recent Posts:</h4>
            <table>
                <tr>
                <th>Course</th>
                <th>Title</th>
                <th>Activity</th>
                <th>File</th>
                <th>Action</th>
                </tr>
        
                {{-- @foreach( ) --}}
                <tr>
                    <td> x</td> 
                    <td> x</td> 
                    <td> x</td>
                    <td> x </td>
                
                    <td>
                        <a href="" class="actionbtn">Edit</a>
                        <a href="" class="actionbtn" id="actionbtn">Delete</a>
                    </td>
               </tr>
        
                {{-- @endforeach --}}
            </table>
        </div>
    
    </div>

    
</div>



    <script src="{{ URL::asset('js/script.js') }}"></script>
@endsection
