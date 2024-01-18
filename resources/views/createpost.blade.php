@extends('layout.main')
@section('titre', 'Create post')

@if(session('user') == null)
{{redirect()->route('home')}}
@endif

@section('contenu')

<form  method="POST" action="{{ route('createpost') }}" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                                   
                <input class="form-control" type="text" name="title" placeholder="title" />
                
            </div>
            <div class="form-group">
                <label for="body">Text</label>
                           
                <input class="form-control" type="text" name="body"  />
                
            </div>
            <button type="submit" class="btn btn-primary" >Create</button>
        </form>
@endsection
