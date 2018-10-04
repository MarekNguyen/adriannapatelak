@extends('layouts.admin')
@section('content')
    <h1>Create Posts</h1>
    <div class="row">
    <form method="POST" action="{{route('admin.posts.store')}}" enctype="multipart/form-data">
        <div class="form-group">
            <label name="title">Title:</label>
            <input name="title" class="form-control" />
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
        <div class="form-group">
            <label name="category_id">Category:</label>
            <select name="category_id" class="form-control">
                <option value="" selected disabled hidden>Choose Category</option>
                <option value="1">PHP</option>
                <option value="2">JavaScript</option>
            </select>
        </div>
        <div class="form-group">
            <label name="photo_id">Photo:</label>
            <input type="file" name="photo_id"/>
        </div>
        <div class="form-group">
            <label name="body">Body:</label>
            <textarea name="body" type="text" class="form-control" rows="5" ></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Create User</button>
        </div>
    </form>
    </div>
    <div class="row">
        @include('includes.form-error')
    </div>
@endsection