@extends('layouts.admin')

@section('content')



    <h1>Posts</h1>


    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Publisher</th>
                <th>Category Name</th>
                <th>Photo</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created Date</th>
                <th>Updated Date</th>
            </tr>
        </thead>
        <tbody>

            @if($posts)

                @foreach($posts as $post)
                    <tr>
                         <td>{{$post->id}}</td>
                         <td>{{$post->user->name}} ({{$post->user->role->name}})</td>
                         <td>{{$post->category_id}}</td>
                         <td><img width="200" class="img-responsive img-thumbnail" src="{{$post->photo_id > 0 ? $post->photo['file'] : "https://www.cobdoglaps.sa.edu.au/wp-content/uploads/2017/11/placeholder-profile-sq-300x300.jpg"}}"></td>
                         <td>{{$post->title}}</td>
                         <td>{{$post->description}}</td>
                         <td>{{$post->created_at->diffForHumans()}}</td>
                         <td>{{$post->updated_at->diffForHumans()}}</td>
                    </tr>
                    @endforeach

                @endif

        </tbody>



    </table>


@stop