@extends('layout.main')
@section('titre', 'Login')


@section('contenu')
<form  method="POST" action="{{ route('signup') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="firstname">First name</label>
                                   
                <input class="form-control" type="text" name="firstname" />
            </div>
            <div>
                <label for="lastname">Last name</label>
                                   
                <input class="form-control" type="text" name="lastname" />
            </div>
            <div class="form-group">
                <label for="login">Email</label>
                                   
                <input class="form-control" type="email" name="email" />
                
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                           
                <input class="form-control" type="password" name="password" />
                
            </div>
            <button type="submit" class="btn btn-primary" >Se Connecter</button>
            <p class="text-primary">Already suscribed? <a href="{{route('loginform')}}">Login</a></p>

        </form>
@endsection
