@extends('layouts.app')

@section('content')
    <div class="card text-left">
      <div class="card-body">
        <h4 class="card-title">List posts</h4>
        @forelse ($posts as $post)        
        @if ($post->active)
        <div class="card mt-2">
          <div class="card-header">
            <div class="d-flex justify-content-between">
              <h5 class="card-title">{{$post->title}}</h5>
              <button class="btn btn-primary">
                Comment(s) <span class="badge badge-light">5</span>
                </button>
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">{{$post->content}}</p>
            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-between mb-1">
                <div class="">
                  <a class="btn btn-primary" href="{{route('posts.show',['post' => $post->id])}}">Show Post</a>
                  <a class="btn btn-warning" href="{{route('posts.edit',['post' => $post->id])}}">Edit</a>
                  <form style="display: inline" method="POST" action="{{route('posts.destroy',['post' => $post->id])}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </div>
                <button class="btn btn-outline-primary">New comment</button>
              </div>
            </div>
          </div>
        @endif
        @empty
            <div class="alert alert-info" role="alert">
              List posts is empty
            </div>
        @endforelse
      </div>
    </div>
@endsection