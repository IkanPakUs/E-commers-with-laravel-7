
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/style/baseStyle.css') !!}" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>

    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container mb-2">
        <div class="logo">
          <a class="navbar-brand navLogo"href="{{ url('/') }}">STORE</a>
        </div>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/catalog') }}">Catalog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/about') }}">About</a>
            </li>
          </ul>
        </div>

        
<!-- jika user telah login -->
      @if(Auth::user())
        <div class="inline btnBaseNavSession d-inline ">
          @if(Auth::user()->role_id == 2)
            <a class="navbar-brand" href="{{ url('profile') }}">Hi, {{ Str::ucfirst(Auth::user()->name) }}</a>
          @else
            <a class="navbar-brand" href="{{ url('profile') }}">Hi, Admin {{ Str::ucfirst(Auth::user()->name) }}</a>
          @endif
            <form method="POST" action="{{ route('logout') }}" id="logout-form" class="my-1 mx-2 float-right">
            @csrf
              <button class="btn btn-outline-secondary my-2 my-sm-0 btnSession" type="submit">LOG OUT</button>
            </form>
          @if(Auth()->user()->role_id == 1)
            <a href="{{ url('/admin') }}" class="btn btn-outline-success my-2 my-sm-0 btnSession" type="submit">Admin Dashboard</a>
          @else
            <a href="{{ url('cart') }}" class="btn btn-outline-success my-2 my-sm-0 btnSession" type="submit">Cart<span class="badge badge-danger mx-2">4</span></a>
          @endif
        </div>  
      @else
      <!-- jika user belum login -->
          <div class="inline my-2 my-lg-0 btnBaseNav">
            <div class="input-group-append" id="button-addon4">
              <a href="{{ route('login') }}" class="btn btn-outline-info ml-2 buttonInput">Log In</a>
              <a href="{{ route('register') }}" class="btn btn-outline-secondary ml-2 buttonInput">Sign Up</a>
            </div>
          </div>
      @endif
      </div>
    </nav>

    <!-- content -->
        @yield('content')






    <!-- Script -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>