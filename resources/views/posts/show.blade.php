@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Title</h5>
            <button class="btn btn-primary">
                Comment(s) <span class="badge badge-light">5</span>
            </button>
        </div>
    </div>
    <div class="card-body">
        <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi aliquam recusandae ullam ipsa nesciunt, in repellendus nisi laborum aliquid perspiciatis. Facere atque expedita, consequatur sit deleniti explicabo cupiditate non tenetur.</p>
    </div>
    <div class="card-footer">
        <div class="d-flex justify-content-between mb-1">
            <div class="">
                <a class="btn btn-primary" href="{{route('posts.index')}}">Posts</a>
            </div>
            <button class="btn btn-outline-primary">New comment</button>
        </div>
        <em>Created at : 2021/20/15 15:30</em>
    </div>
</div>
@endsection