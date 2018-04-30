@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<div class="card">
    <div class="card-header">
        Edit your profile
    </div>

    <div class="card-body">
        <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="password">New Password</label>
                <input type="email" name="password" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="avatar">Upload new avatar</label>
                <input type="file" name="avatar" class="form-control" >
            </div>
            <div class="form-group">
                <label for="facebook">Facebook profile</label>
                <input type="text" name="facebook" class="form-control" value="{{ $user->profile->facebook }}">
            </div>
            <div class="form-group">
                <label for="youtube">Youtube profile</label>
                <input type="text" name="youtube" class="form-control" value="{{ $user->profile->youtube }}">
            </div>
            <div class="form-group">
                <label for="about">About you</label>
            <textarea name="about" id="about" cols="6" rows="6" class="form-control">{{ $user->profile->about }}</textarea>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success">
                        Add user
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection