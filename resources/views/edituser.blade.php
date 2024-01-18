@extends('layout.main')
@section('titre', session('user')->firstname)

@if(session('user') == null)
{{redirect()->route('home')}}
@endif

@section('contenu')

<form  method="POST" action="{{ route('updateuser') }}" enctype="multipart/form-data">

            @csrf
            <div>
                <label for="firstname">First name</label>
                                   
                <input class="form-control" type="text" name="firstname" value="{{session('user')->firstname}}"/>
            </div>
            <div>
                <label for="lastname">Last name</label>
                                   
                <input class="form-control" type="text" name="lastname" value="{{session('user')->lastname}}" />
            </div>
            <div class="form-group">
                <label for="login">Email</label>
                                   
                <input class="form-control" type="email" name="email" value="{{session('user')->email}}" />
                
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                           
                <input class="form-control" type="password" name="password" />
                
            </div>
            <button type="submit" class="btn btn-primary" >Edit</button>

        </form>
@endsection
