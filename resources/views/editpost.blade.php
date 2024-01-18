@extends('layout.main')
@section('titre', $post->title)

@if(session('user') == null)
{{redirect()->route('home')}}
@endif

@section('contenu')

<form  method="POST" action="{{ route('updatepost', $post->id) }}" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                                   
                <input class="form-control" type="text" name="title" value="{{$post->title}}" />
                
            </div>
            <div class="form-group">
                <label for="body">Text</label>
                           
                <input class="form-control" type="text" name="body" value="{{$post->body}}" />
                
            </div>
            <div class="form-group">
                <label for="is_active">Is active</label>
                           
                <select class="form-control" type="text" name="is_active" >
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                
            </div>
            <button type="submit" class="btn btn-primary" >Edit</button>
            <a class="btn btn-danger" href="/deletepost/{{$post->id}}">Delete</a>
        </form>
@endsection
