@extends('layout.admin')
@section('content')
    <h1 class="mt-2">Volunteers</h1>
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
            <tr>
                <td>{{$admin->firstname}}</td>
                <td>{{$admin->lastname}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->phone}}</td>
                <td>{{$admin->address}}</td>
                <td>
                    <div class="d-flex flex-row mb-3">
                        <div class="p-2"><a href="/admin/volunteer/show/{{$admin->id}}" class="btn btn-success">Show</a></div>
                        <div class="p-2"><a href="/admin/volunteer/approve/{{$admin->id}}" class="btn btn-warning">Approve</a></div>
                        <div class="p-2"><a href="/admin/volunteer/delete/{{$admin->id}}" class="btn btn-danger">Delete</a></div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    {{-- <table>
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
                
          
            <tr>
                <td scope="row"><img src="{{Storage::url($admin->profile_photo)}}"
                    style="height: 100px; width: 100px;" alt="profile_photo" class="rounded float-start"></td>
                <td>{{$admin->firstname}}</td>
                <td>{{$admin->lastname}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->phone}}</td>
                <td>{{$admin->address}}</td>
                <td>
                    <div class="d-flex flex-row mb-3">
                        <div class="p-2"><a href="/admin/volunteer/show/{{$admin->id}}" class="btn btn-success">Show</a></div>
                        <div class="p-2"><a href="/admin/volunteer/approve/{{$admin->id}}" class="btn btn-warning">Approve</a></div>
                        <div class="p-2"><a href="/admin/volunteer/delete/{{$admin->id}}" class="btn btn-danger">Delete</a></div>
                    </div>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table> --}}
@endsection