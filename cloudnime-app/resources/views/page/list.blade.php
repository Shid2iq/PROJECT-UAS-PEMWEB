<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page List</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!---LOGO ---->
        <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style2.css">
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
           <nav class="navbar navbar-expand-lg navbar-light bg-white py-5">
                <div class="container px-5">
                  <a class="navbar-brand fs-4" href="/"><img src="assets/img/logo.png" style="width:100px; height:100px;" alt=""><span class="fw-bolder text-primary" style="font-size: 40px;">CloudNime</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse fs-4" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                             <li class="nav-item"><a class="nav-link" href="/list">List</a></li>
                            <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                            <li class="nav-item rounded mt-1"> <a href="/login" class="btn btn-primary">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="py-5">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-12">
                            <!-- Header text content-->
                            <div class="col-xxl-12">
                                <!-- Header text content-->
                                <div class=" text-xxl-start">
                                    <h1 class="display-3 fw-bolder mb-5 text-center "><span class="text-gradient d-inline">List Anime</span></h1>
                                </div>
                        
                        </div>


                        <main>
                          <div class="album py-5 bg-body-tertiary">
                              <div class="container">
                                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                      @foreach ($movies as $movie)
                                      <div class="col">
                                          <div class="card shadow-sm">
                                              <img src="/assets/img/{{$movie -> poster}}" alt="">
                                              <div class="card-body">
                                                  <h4 class="card-title"><a href="#">{{ $movie->title }}</a></h4>
                                                  <p class="card-text">Genre: {{ $movie->genre->name }}</p>
                                                  <p class="card-text">Rating: {{ $movie->rating }} &#11088;</p>
                                                  <p class="card-text">Tahun: {{ $movie->release_date }}</p>
                                                  <div class="d-flex justify-content-between align-items-center">
                                                      <div class="btn-group">
                                                          <button type="button" class="btn btn-sm btn-outline-secondary">{{ $movie->Countries->name }}</button>
                                                          <button type="button" class="btn btn-sm btn-outline-secondary">{{ $movie->genre->name}}</button>
                                                      </div>
                                                      <small class="text-body-secondary">{{ $movie->rating }}/10</small>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      @endforeach
                                  </div>
                              </div>
                          </div>
                      </main>
                                              
                                              
                                            


                            <!-- Header profile picture-->
                        
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About Section-->
                   
        </main>
        <!-- Footer-->
        <footer class="footer-59391">
      
            <div class="container">
    
              
              <div class="row mb-5">
                <div class="col-md-4">
                  <div class="site-logo">
                    <a href="#" class="fw-bolder text-primary">CloudNime</a>
                  </div>
                </div>
                <div class="col-md-4 text-center">
                    <ul class="nav-links list-unstyled nav-right fs-4">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Product</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Contact</a></li>
                    </ul>
                  </div>
                <div class="col-md-4 text-md-right">
                  <ul class="list-unstyled social-icons">
                    <li><a href="#" class="fb"><span class="icon-facebook"></span></a></li>
                    <li><a href="#" class="tw"><span class="icon-twitter"></span></a></li>
                    <li><a href="#" class="in"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
    
              
              <div class="row">
                <div class="col ">
                  <div class="copyright">
                    <p><small>Copyright 2019. All Rights Reserved.</small></p>
                  </div>
                </div>
              </div>
            
          </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
