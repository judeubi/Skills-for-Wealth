@extends('layout.app')
@section('content')
<div class="overall">

<div class="section1">

    <div class="centre">
    <img src="{{asset('img/Centre.jpg')}}" alt="" height="400vh" width="100%">
    </div>
        <div class="about" style="text-align: center">
                <h2>Who We Are</h2>
                <p >
                    Skills4Wealth is a humanitarian and voluntary organization working on the mandate of <br>
                    the United Nations' Sustainable Development Goals (SDG) Goal 1 to eradicate poverty within <br>
                    local communities and disadvantaged groups especially in rural communities in Nigeria with <br>
                    our easy-access online platform.
                </p>
        </div>
</div>

    <div class="vision" style="text-align: center">
        <h2 style="padding-top: 20px;">Our Vision</h2>
        <p>
            Our vision, our mission and our work are all defined by one goal - ending extreme poverty, <br>
            whatever it takes. We believe that no-one should have to live in fear that they won't have <br>
            access to requisite digital and vocational skills that can better their lives and make a living <br>
            for themselves. 
        </p>

        <h2 style="padding-top: 20px;">Our Mission</h2>
        <ul>
            <li>Expand sustainable knowledge, skills, and mindset in urban and rural communities <br>in Nigeria.</li>
            <li>Provide free and easy access to relevant learning tools, courses, tutorials and <br>mentorship for capacity building.</li>
            <li>Empower engaged and committed global citizens to make informed and responsible <br>decisions, and collectively build a sustainable future.</li>
        </ul>
    </div>


<h2 style="text-align: center; padding-top:50px; padding-bottom:50px;">Our Team</h2>
<div class="team">
    <div class="person">
        <img src="{{asset('img/henry.jpeg')}}" alt="jude"> <br><br>
        <span>Henry Anyichie <br>
        Tailoring Volunteer</span>
    </div>
    <div class="person">
        <img src="{{asset('img/hope.jpeg')}}" alt="jude"> <br> <br>
        <span>Hope Haruna Habu <br>
        Web Development Volunteer</span>
    </div>
    <div class="person">
        <img src="{{asset('img/jonathan.jpeg')}}" alt="jude"> <br> <br>
        <span>Gankon Jonathan <br>
        Senior Baking Volunteer</span>
    </div>
    <div class="person">
        <img src="{{asset('img/nanadom.jpeg')}}" alt="jude"> <br><br>
        <span>Wade Nandom Felix <br>
        Tailoring Volunteer</span>
    </div>
</div>

<div class="team2">
    <div class="person">
        <img src="{{asset('img/dapper.jpeg')}}" alt="jude"> <br> <br>
        <span>Jugu Paul Wash <br>
        Web Dev Volunteer</span>
    </div>
    <div class="person">
        <img src="{{asset('img/jude.jpeg')}}" alt="jude"><br> <br>
        <span>Jude Ubi <br>
        Baking Volunteer</span>
    </div>
    <div class="person">
        <img src="{{asset('img/jane.jpeg')}}" alt="jude"> <br><br>
        <span>Jane Mokobia<br>
        Tailoring Volunteer</span>
    </div>
    <div class="person">
        <img src="{{asset('img/umar.jpeg')}}" alt="jude"> <br><br>
        <span>Mansir Umar Maibazamana<br>
        Web Dev Volunteer</span>
    </div>
</div>
<div class="team3">
    <div class="person">
        <img src="{{asset('img/damen.jpeg')}}" alt="jude"> <br><br>
        <span>Damen Kangnaan<br>
        Tailoring Volunteer</span>
    </div>
    <div class="person">
        <img src="{{asset('img/slimzy.jpeg')}}" alt="jude"> <br><br>
        <span>Salim Tasiu Ibrahim<br>
        Baking Volunteer</span>
    </div>
</div>



</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


@endsection