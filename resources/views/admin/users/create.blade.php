@extends('layouts.admin')
@section('content')
<h1>Create Users</h1>
<form method="POST" action="{{route('admin.users.store')}}" enctype="multipart/form-data">
    <div class="form-group">
        <label name="name">Name:</label>
        <input name="name" class="form-control" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>
    <div class="form-group">
        <label name="email">Email:</label>
        <input name="email" class="form-control" />
    </div>
    <div class="form-group">
        <label name="role_id">Role:</label>
        <select name="role_id" class="form-control">
            <option value="" selected disabled hidden>Choose Role</option>
            @foreach($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
        </select>
    </div>
    <div class="form-group">
        <label name="status">Status:</label>
        <select class="form-control" name="is_active">
            <option value="0">Not Active</option>
            <option value="1">Active</option>
        </select>
    </div>
    <div class="form-group">
        <label name="photo_id">File:</label>
        <input type="file" name="photo_id"/>
    </div>
    <div class="form-group">
        <label name="password">Password:</label>
        <input name="password" type="password" class="form-control" />
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Create User</button>
    </div>
</form>
    @include('includes.form-error')
@endsection