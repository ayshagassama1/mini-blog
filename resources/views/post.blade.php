@extends('layout.main')
@section('titre', $post->title)

@section('contenu')
<h1 class="text-center text-info">
    {{ $post->title }}
</h1>
<h3>
    Author: {{$user->firstname}} {{$user->lastname}} - Created at:{{$post->created_at}} - Updated at:{{$post->updated_at}}
</h3>
<div class="main row mt-3 mb-3 ">
    <div>
        <p>{{ $post->body }}</p>
    </div>
</div>
@endsection