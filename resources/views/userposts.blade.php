@extends('layout.main')
@section('titre', 'My Posts')

@if(session('user') == null)
{{redirect()->route('home')}}
@endif
@section('contenu')
<div class="main row mt-3 mb-3 ">
    @foreach($posts as $post)
        <div class="post col-sm-12 col-lg-2 pt-1 m-2 border border-primary position-relative">
            <div>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
                <p><a href="/editpost/{{$post->id}}">Edit post</a></p>
            </div>
        </div>
    @endforeach
</div>
@endsection