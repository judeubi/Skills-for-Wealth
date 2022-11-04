<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">   
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Open Sans' >
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark"  id="navbarrr"
    style="background-color: hsl(192, 100%, 9%);">
    <div class="container-fluid">
        <a href="/"><img src="{{asset('img/logosfw.png')}}" alt="logo" height="60px" class="logosfw"></a>    
    {{-- <a class="navbar-brand mx-5" href="/" style="font-size: 24px">Skills<i style="font-size:32px; ">4</i>Wealth</a> --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex" id="navbarNavAltMarkup">
    
    <div class="nav-item mx-auto">
    
    <ul class="navbar-nav" id="myDIV">
    <li class="nav-item me-5">
    <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item me-5">
    <a class="nav-link" href="/about">About Us</a>
    </li>
    <li class="nav-item me-5">
    <a class="nav-link" href="/courses">Courses</a>
    </li>
    <li class="nav-item me-5">
    <a class="nav-link" href="/contact">Contact</a>
    </li>
    <li class="nav-item me-5">
    <a class="nav-link" href="/support">Support Us</a>
    </li>
    </ul>
    
    </div>
    
    <div class=" d-flex p-2">
    <ul class="navbar-nav" style="padding-right: 80px">
    
    <div class="dropdown">
    <button class="dropbtn" style="margin-right: 40px;">Register</button>
    <div class="dropdown-content">
    <a href="/volunteer/register">Volunteer</a>
    <a href="/student/register">Student</a>
    </div>
    </div>
    
    <div class="dropdown">
    <button class="dropbtn">Login</button>
    <div class="dropdown-content">
    <a href="/volunteer/login">Volunteer</a>
    <a href="/student/login">Student</a>
    </div>
    </div>
    
    
    
    </ul>
    </div>
    
    </div>
    </div>
    
    
    </nav>
    
    
    <div class="navbarmedia navbar-expand-lg sticky-top navbar-dark">
        <!-- Logo -->
        <a href="/"><img src="{{asset('img/logosfw.png')}}" alt="logo" height="60px" class="logosfw"></a>    
    
    
            <div class="linksection" >
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/courses">Courses</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/support">Support</a></li>
                </ul>
            </div>
    
    
    
    <!-- Button -->
    <div class="buttonQ">
        <div class="dropdown">
            <button class="dropbtn">Register</button>
            <div class="dropdown-content">
            <a href="/volunteer/register">Volunteer</a>
            <a href="/student/register">Student</a>
            </div>
            </div>
    
         <div class="dropdown">
            <button class="dropbtn" id="logbuttn">Login</button>
            <div class="dropdown-content">
            <a href="/volunteer/login">Volunteer</a>
            <a href="/student/login">Student</a>
            </div>
            </div>
    </div>
        <!-- NavBar -->
    
    
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="">{{Auth::user()->course->name}}</h4>
                    </div>
                    @foreach ($posts as $post)
                        <h1>{{$post->title}}</h1>
                        <h1>{{$post->body}}</h1>
                    @endforeach
                </div>
            </div>
        </div>
    </div>    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>

