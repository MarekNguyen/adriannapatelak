@extends('layouts.admin')
@section('content')


    <h1>Posts</h1>
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Author</th>
            <th>Category</th>
            <th>title</th>
            <th>body</th>
            <th>Created At</th>
            <th>Updated At</th>

        </tr>
        </thead>
        <tbody>
        @if(@posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="50px" width="50" src="{{asset($post->photo ? $post->photo->file : 'http://placehold.it/50x50')}}" alt=""></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection