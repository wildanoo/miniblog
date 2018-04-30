@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<div class="card">
    <div class="card-header">
        Edit post : {{ $post->title }}
    </div>

    <div class="card-body">
        <form action="{{ route('post.update',['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="featured">Featured Image</label>
                <input type="file" name="featured" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Select a Category</label>
                <select name="category_id" id="category" class="form-control">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" 
                            @if($category->id == $post->category_id) selected @endif>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Select tags</label>
                @foreach($tags as $tag)
                    <div class="check-box">
                        <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                            @foreach($post->tags as $t)
                                @if($tag->id == $t->id)
                                    checked
                                @endif
                            @endforeach
                            >
                            {{ $tag->tag }}
                        </label>
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" cols="5" rows="5">{{ $post->content }}</textarea>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Edit post
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection