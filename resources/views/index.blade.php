@extends('./layouts/header')

@section('page-content')
     <!-- Favicon-->
     {{-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> --}}
     <!-- Font Awesome icons (free version)-->
     <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
     <!-- Google fonts-->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
     <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
     <!-- Core theme CSS (includes Bootstrap)-->
     <link href="css/styles.css" rel="stylesheet" />

     <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Library!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="/connexion">Log in</a>
                <a class="btn btn-primary btn-xl text-uppercase" href="/register">Sign up</a>
    
            </div>
        </header>
          
      
     <!-- Portfolio Grid-->
     <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Médiathèque</h2>
                <h3 class="section-subheading text-muted">Aperçu</h3>
            </div>
            <ul class="list-group">

                @forelse ($etudiants as $etudiant)
                    <li class="list-group-item">{{ $etudiant->name }}<br>{{ $etudiant->surname }}</li>
                @empty
                    <p class="text text-info">Rien trouvé</p>
                @endforelse
            </ul>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/image_de_library/Barbie/Photo10.jpg') }}" alt="..." width="500px" height="500px"/>
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Barbies</div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/image_de_library/Manga/Photo4.jpg') }}" alt="..." width="350px" height="350px"/>
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Mangas</div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/image_de_library/Comptine/Photo15.jpg') }}" alt="..." width="500px" height="500px"/>
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Comptines</div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/image_de_library/Journal/Photo44.jpg') }}" alt="..." width="500px" height="500px"/>
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Journal</div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/image_de_library/Cuisine/Photo51.jpg') }}" alt="..." width="450px" height="450px" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Cuisines</div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/image_de_library/Littérature_africaine/Photo23.jpeg') }}" alt="..." width="350px" height="350px" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Littérature africaine</div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 7-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/image_de_library/Littérature_française/Photo33.jpg') }}" alt="..." width="500px" height="500px" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Littérature francaise</div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 8-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/image_de_library/Roman/Photo37.jpg') }}" alt="..." width="380px" height="380px" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Roman</div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 9-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/image_de_library/Science/Photo60.jpg') }}" alt="..." width="500px" height="500px" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Science</div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 10-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/image_de_library/Telenovelas/Photo76.jpg') }}" alt="..." width="500px" height="500px" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Telenovelas</div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 11-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/image_de_library/Feuilleton/Photo66.jpg') }}" alt="..." width="280px" height="280px" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Feuilleton</div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection