<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Accueil</title>
    <link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">BGEE</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('formulaire')}}">Formulaire</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('liste')}}" >Liste</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="col md-12 d-flex " >
        <div class="col md-6">
           <img src="{{ asset('image/etudiants.jpg') }}" alt="">
        </div>
        <div class="col md-6"> <br> <br>
          <h1 style="font-family: Lucida Calligraphy ; text-align: center; color: red; font-size: 4em;">Bienvenu ?? la gestion des ??tudiants</h1>
          <h3 style="font-family: Times New Roman; text-align: center;">Travail, rigueur, excellence</h3>
        </div>
    </div>

      <footer class=" bg-dark" style="height: 10vh;"> <br>
        <h3 style="text-align: center; font-family: arial; color: white;">Copyright FBE</h3>
      </footer>
    @yield('content')
</body>

</html>
