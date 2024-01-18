@extends('layout.main')
@section('titre', 'Accueil')

@section('contenu')
<h1>Bienvenue sur le blog</h1>
<div class="main row mt-3 mb-3 ">
    @foreach($posts as $post)
        <div class="post col-sm-12 col-lg-2 pt-1 m-2 border border-primary position-relative">
            <div>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
                <p><a href="">Lire la suite</a></p>
            </div>
        </div>
    @endforeach
</div>
@endsection