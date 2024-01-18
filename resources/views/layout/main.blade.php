<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>@yield('titre')</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mini-blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        @if(session('user') == null)
        <li class="nav-item">
          <a class="nav-link" href="{{route('loginform')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('signupform')}}">Sign up</a>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            My profile
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{route('userposts')}}">My posts</a></li>
            <li><a class="dropdown-item" href="{{route('createpost')}}">Create post</a></li>
            <li><a class="dropdown-item" href="{{route('edituser')}}">My account</a></li>
            <li><a class="dropdown-item" href="{{route('logout')}}">Log out</a></li>
          </ul>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="{{route('loginform')}}">RSS</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    @yield('contenu')

    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
</body>
</html>