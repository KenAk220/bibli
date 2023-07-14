<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <!-- Favicon-->
    {{-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> --}}
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('assets/img/R.jpeg') }}">

    <title>Library</title>
</head>
<body>
    <header>
      @if (session()->has('success'))
      <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif

    @if (session()->has('error'))
    <div class="alert alert-danger">{{ session()->get('error') }}</div>
  @endif
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/"><h1><img src="{{ asset('assets/img/pngtree-cartoon-trees-library-bookshelf-png-image_2095887-removebg-preview.png') }}" alt="icone de biblio" width="90px" height="90px " class="pic"> <span>Your Online Library</span></h1> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Deconnexion</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha256-m81NDyncZVbr7v9E6qCWXwx/cwjuWDlHCMzi9pjMobA=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/perfect-scrollbar@1.5.5/dist/perfect-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/smooth-scrollbar@8.8.3/dist/smooth-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs@0.3.24/chart.min.js"></script>

    @yield('page-content')
</body>
</html>
