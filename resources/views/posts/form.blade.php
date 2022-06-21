<div class="form-group">
    <label for="title">Title</label>
    <input class="form-control form-control-sm @error('title') is-invalid @enderror" type="text" required placeholder="Your Title" name="title" id="title" value="{{old('title',$post->title ?? null)}}">
    <span class="invalid-feedback">
        @error('title')
            {{$message}}
        @enderror
    </span>
</div>
<div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control form-control-sm @error('content') is-invalid @enderror" name="content" id="content" placeholder="Your content" cols="30" rows="10" required>{{old('content',$post->content ?? null)}}</textarea>
    <span class="invalid-feedback">
        @error('content')
            {{$message}}
        @enderror
    </span>
</div>