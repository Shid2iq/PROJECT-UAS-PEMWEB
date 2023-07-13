<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!---LOGO ---->
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-5">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                    <a class="navbar-brand fs-4" href="/"><img src="assets/img/logo.png" style="width:100px; height:100px;" alt=""><span class="fw-bolder text-primary" style="font-size: 40px;">CloudNime</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse fs-4" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                             <li class="nav-item"><a class="nav-link" href="/list">List</a></li>
                            <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                            <li class="nav-item rounded mt-1"> <a href="/login" class="btn btn-primary">login</a></li>
                        </ul>
                    </div>
                    {{-- <a class="navbar-brand col-lg-3 me-0" href="#"><h4>Movie App</h4></a>
                    <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/movies">Movies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/genres">Genres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/reviews">Reviews</a>
                        </li>
                    </ul>
                <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                    <a href="/login" class="btn btn-warning">Login</a>
                </div> --}}
                </div>
            </div>
        </nav>

        <header class="py-5">
            <div class="container px-5 pb-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-xxl-5">
                        <!-- Header text content-->
                        <div class=" text-xxl-start">
                            <h1 class="display-3 fw-bolder mb-5"><span class="text-primary d-inline">Watch anywhere, cancel anytime.</span></h1>
                            <div class="fs-3 fw-light text-muted">Dapatkan film terbaru di web Cloudnime. Terlengkap dan Terupdate</div>
                            <div class="d-grid gap-3 d-sm-flex  justify-content-xxl-start mb-3">
                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder mt-5  " href="/">Resume</a>
                                <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder mt-5" href="/">Projects</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7">
                        <!-- Header profile picture-->
                        <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                            <div class="profile">
                                <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                <img class="profile-img" src="assets/img/BackgroundMain.png" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <header class="py-5">
            <div class="container px-5 pb-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-xxl-5">
                        <!-- Header text content-->
                        <div class=" text-xxl-start">
                            <h1 class="display-3 fw-bolder mb-5 "><span class="text-primary d-inline">Featured Anime</span></h1>
                            <div class="fs-3 fw-light text-muted ">3 terpopuler di bulan ini</div>
                        </div>
                    </div>
                    <div class="col-xxl-7">
                        <!-- Header profile picture-->
                        <div class="d-flex justify-content-between mt-5">
                            <div class="row">

                                <div class="col-sm-6 col-md-4">
                                  <div class="card border-white">
                                    <img class="card-img-top" src="assets/img/one piece.webp" alt="Card image cap">
                                    <div class="card-header">One Piece</div>
                                    <div class="card-body">
                                      <p class="card-text">Bercerita petualangan bajak laut bersama  kru topi jerami di laut luas </p>
                                      <a href="/detail" class="btn btn-primary">Detail</a>
                                    </div>
                                  </div>
                                </div>
                              
                              
                              <div class="col-sm-6 col-md-4">
                                <div class="card border-white">
                                    <img class="card-img-top" src="assets/img/Bleach.png" alt="Card image cap">
                                  <div class="card-header">Bleach</div>
                                  <div class="card-body">
                                    <p class="card-text">Bercerita tentang ichigo kurasaki yang menjadi shinigami</p>
                                    <a href="/detail2" class="btn btn-primary">Detail</a>
                                  </div>
                                  
                                </div>
                              </div>
                              
                              
                              <div class="col-sm-6 col-md-4">
                                <div class="card border-white">
                                    <img class="card-img-top" src="Assets/img/Suzume.png" alt="Card image cap">
                                  <div class="card-header">Suzume</div>
                                  <div class="card-body">
                                    <p class="card-text">Film ketiga dari makoto shinkai bercerita tentang kunci </p>
                                    <a href="/detail3" class="btn btn-primary">Detail</a>
                                  </div>
                                </div>
                              </div>
                              
                              </div>
                            </div>
                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <header class="py-5">
                            <div class="container px-5 pb-5">
                                <div class="row gx-5 align-items-center">
                                    <div class="col-xxl-12">
                                        <!-- Header text content-->
                                        <div class="text-center text-xxl-start">
                                            <h1 class="display-3 fw-bolder mb-5 text-center"><span class="text-primary d-inline">Our Customer Say</span></h1>
                                            <div class="fs-3 fw-light text-muted text-center">Terima kasih support nya</div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <!-- Header profile picture-->
                                        <div class="d-flex justify-content-between mt-5">

                                          <div class="col-sm-6 col-md-4">
                                  <div class="card border-black">
                                    <img class="card-img-top" src="assets/img/Profile1.jpg" alt="Card image cap">
                                    <div class="card-header text-center">Rohim</div>
                                    <div class="card-body">
                                      <p class="card-text text-center">cloudnime, super lengkap tentang detail setiap animenya</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="card border-black">
                                      <img class="card-img-top" src="assets/img/Profile2.png" alt="Card image cap">
                                      <div class="card-header text-center">Javier</div>
                                      <div class="card-body">
                                        <p class="card-text text-center">cloudnime ini genrenya banyak juga ya whahahaha.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-4">
                                    <div class="card border-black">
                                      <img class="card-img-top" src="assets/img/Profile3.jpg" alt="Card image cap">
                                      <div class="card-header text-center">MR waduh</div>
                                      <div class="card-body">
                                        <p class="card-text text-center">cloudnime sering digunakan sebagai informasi death battle</p>
                                      </div>
                                    </div>
                                  </div>
                                              </div>
                                            </div>
                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </header>

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
            </ul>
            <p class="text-center text-body-secondary">&copy; 2023 Company, Inc</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>