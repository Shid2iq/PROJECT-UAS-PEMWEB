<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('assets/img/1.jpg');"></div>
        <div class="contents order-2 order-md-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h2 style="font-weight: bold; font-size:40px;">Register</h2>
                <p>Kembali ke <a href="/">Halaman Utama</a></p>
                <form class="mb-4" method="POST" action="/register">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
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
                        <label for="password_confirmation">Confirm Password</label>
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                    <div class="form-group">
                        <label for="role">Role</label>
                        <select id="role" class="form-control" name="role" required>
                            <option value="" selected disabled>-- Select one --</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Register</button>
                    </div>
                </form>
                <p>Sudah punya akun? <a href="/login">Login</a></p>
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>