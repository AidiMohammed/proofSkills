@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Edit new post</h2>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('posts.update',['post' => $post->id])}}">
            @csrf
            @method('PUT')
            @include('posts.form')
            <button class="btn btn-warning btn-sm btn-block" type="submit">Update post</button>
        </form>
    </div>
</div>
@endsection