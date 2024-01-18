@extends('layout.main')
@section('titre', 'Login')


@section('contenu')


<form  method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
    @if($rep != null)
    <div class="alert alert-danger">
        <p>{{$rep}} </p>
    </div>
@endif  
            @csrf
            <div class="form-group">
                <label for="login">Email</label>
                                   
                <input class="form-control" type="email" name="email" />
                
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                           
                <input class="form-control" type="password" name="password" />
                
            </div>
            <button type="submit" class="btn btn-primary" >Se Connecter</button>
            <p class="text-primary">Not suscribed yet? <a href="{{route('signupform')}}">Create an account</a></p>
        </form>
@endsection
