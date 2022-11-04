@extends('layout.app')
@section('content')

<div class="overall">



<div class="contact">
    <h3>Contact Us</h3>
    <p>Reach out to us by filling the form below</p>
</div>

<div>
    <form action="" method="POST" class="contactform">
    <input type="text" name="name" placeholder="Your full name" required> <br>
    <input type="email" name="email" placeholder="Your email address" required> <br>
    <input type="text" name="phone" placeholder="Your phone number" required> <br>
    <input type="text" name="address" placeholder="Type in your address" required> <br>
    <input type="submit" value="Submit"> <br>
    </form>
</div>





</div>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>





@endsection