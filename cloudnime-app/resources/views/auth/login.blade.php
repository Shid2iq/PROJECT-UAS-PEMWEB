<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    </style>
</head>
<body>
     <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('assets/img/1.jpg');"></div>
    <div class="contents order-2 order-md-1">
    <div class="container">
        <div><img src="assets/img/logo.png" style="width: 250px; height:250px; position:absolute; right:1050px" alt=""></div>
        @if (session('success'))
            <h2>{{ session('success') }}</h2>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h2 style="font-weight: bold; font-size:40px; margin-top:45%; text-align:center;">Login</h2>
                <p>Kembali ke <a href="/">Halaman Utama</a></p>
                <form class="mb-4" method="POST" action="/login">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                    </div>
                </form>
                <p>Belum punya akun? <a href="/register">Register</a></p>
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>