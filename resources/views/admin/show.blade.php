@extends('layout.admin')
@section('content')
    <h1>Volunteer</h1>
    <table>
        <thead>
            <tr>
                <th scope="col">Profile Photo</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
              </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                
            @endforeach
            <tr>
                {{-- <td scope="row"><img src="{{Storage::url($admin->profile_photo)}}"
                    style="height: 100px; width: 100px;" alt="profile_photo" class="rounded float-start"></td> --}}
                <td>{{$admin->firstname}}</td>
                <td>{{$admin->lastname}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->phone}}</td>
                <td>{{$admin->address}}</td>
            </tr>
        </tbody>
    </table>
@endsection