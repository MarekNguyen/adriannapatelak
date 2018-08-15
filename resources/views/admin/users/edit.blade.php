@extends('layouts.admin')
@section('content')
    <h1>Edit User</h1>
    <div class="row">
    <div class="col-sm-3">
        <img height="250" width="300" src="{{asset($user->photo ? $user->photo->file : 'http://placehold.it/400x400')}}" alt="" class="img-responsive img-rounded" />
    </div>
    <div class="col-sm-9">
    <form method="POST" action="{{route('admin.users.update',$user->id)}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{method_field('put')}}
        <div class="form-group">
            <label name="name">Name:</label>
            <input name="name" value="{{$user->name}}" class="form-control" />

        </div>
        <div class="form-group">
            <label name="email">Email:</label>
            <input name="email" value="{{$user->email}}" class="form-control" />
        </div>
        <div class="form-group">
            <label name="role_id">Role:</label>
            <select name="role_id" class="form-control">
                <option value="" selected disabled hidden>Choose Role</option>
                @foreach($roles as $role)
                    <option @if($user->role->name==$role->name)
                            selected
                            @endif
                            value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label name="status">Status:</label>
            <select class="form-control" name="is_active">
                @for($i=0;$i<2;$i++)
                <option value="{{$i}}"
                        {{$i==$user->is_active ? ' selected' : ''}}
                        >{{$i==0 ? 'Not Active' : 'Active'}}</option>
                    @endfor
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
            <button class="btn btn-primary" type="submit">Edit User</button>
            <button class="btn btn-danger">Cancel</button>
        </div>
    </form>
    </div>
    </div>
    @include('includes.form-error')
@endsection