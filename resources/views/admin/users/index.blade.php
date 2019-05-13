@extends('layouts.admin')






@section('content')

    <h1>Users list</h1>



    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
        <tbody>

        @if($users)
            @foreach($users as $user)
                {{$user->photo_path}}
                <tr>
                    <td>{{$user->id}}</td>
                    <td> <img height="50" src="{{$user->photo ? $user->photo->file : "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"}}" alt="" class="img-rounded"> </td>
                    <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active ? "Active" : "Inactive"}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach

        @endif

        </tbody>
    </table>



    @stop
