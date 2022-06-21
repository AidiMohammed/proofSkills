@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Create new post</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('posts.store')}}">
                @csrf
                @include('posts.form')
                <button class="btn btn-outline-primary btn-sm btn-block" type="submit">Create post</button>
            </form>
        </div>
    </div>
@endsection