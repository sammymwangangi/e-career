<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Sammy Mwangangi-R.A.P.D">
  <meta name="generator" content="E-CGS">
  <title>E-CAREER GUIDANCE SYSTEM</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/cover.css') }}" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>
<body class="text-center">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">E-CGS</h3>
      <nav class="nav nav-masthead justify-content-center">
        @guest
        <a class="nav-link active" href="{{ route('login') }}">Login</a>
        <a class="nav-link" href="{{ route('register') }}">Register</a>
        @else
        <a class="nav-link" href="{{ route('home') }}">Home</a>
        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
        @endguest
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading">E-CAREER GUIDANCE SYSTEM</h1>
    <p class="lead">E-Career Guidance System is a system made for people in need of joining tertiary universities but don't know what course to undertake.It has intelligent that will help students get clear guidance on the career to venture into it will act more like the career guidance team </p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
    </p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Copyright &copy 2019. E-Career Guidance System</p>
    </div>
  </footer>
</div>
</body>
</html>

