<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <!-- Script -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>

  <!-- header -->
  <header>
    <div class="container-fluid bg-dark mb-3">
      <div class="container">
        <nav class="navbar navbar-dark">
          <a href="{{ route('vocabulary.index') }}">
            <span class="navbar-brand mb-0 h1">English_App</span>
          </a>
          <div>
            <a href="{{ route('login') }}">
              <button class="btn btn-success">Login</button>
            </a>
            <a href="#">
              <button class="btn btn-success">Logout</button>
            </a>
            <a href="{{ route('vocabulary.create') }}">
              <button class="btn btn-success">Add</button>
            </a>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- header -->

  @yield('content')

</body>
</html>