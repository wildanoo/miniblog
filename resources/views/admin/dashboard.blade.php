@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header text-center text-white bg-info">POSTED</div>
        
            <div class="card-body">
            <h1 class="text-center">{{ $posts_count }}</h1>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header text-center bg-danger text-white">TRASHED POST</div>
        
            <div class="card-body">
            <h1 class="text-center">{{ $trashed_count }}</h1>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card">
            <div class="card-header text-center bg-success text-white">USERS POST</div>
        
            <div class="card-body">
            <h1 class="text-center">{{ $users_count }}</h1>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card">
            <div class="card-header text-center bg-info text-white">CATEGORIES</div>
        
            <div class="card-body">
            <h1 class="text-center">{{ $categories_count }}</h1>
            </div>
        </div>
    </div>
</div>






@endsection
