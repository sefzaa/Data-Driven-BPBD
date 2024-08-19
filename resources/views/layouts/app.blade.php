<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Sidebar Menu</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: white;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 150px;
            background-color: #F47721; /* Warna orange pada logo Badan Penanggulangan Bencana */
            padding-top: 20px;
        }
        .sidebar .nav-link {
            color: white;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .navbar{
            background-color: #F47721; 
        }

        .login-btn {
            text-align: center;
            margin-top: 150px;
            
        }
        .sidebar .logo {
            max-width: 100px; /* Atur lebar maksimum logo */
            height: auto; /* Biarkan tinggi mengikuti proporsi aslinya */
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
          
        </div>
    </nav>
    <div class="d-flex">
        <div class="sidebar">
            <div class="navbar navbar-expand-lg navbar-light flex-column">
                    <div class="row mt-3">
                        <div class="col text-center">
                            <img class= "logo" src="img/logo.png" alt="logo">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <a class="nav-link" href="{{ route('disasters.index') }}">Data Bencana</a>
                        </div>
                    </div>
            </div>
            <div class="login-btn ">
                <a href="#" class="btn btn-success btn-sm">Login</a>
            </div>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+9Nn9zRNTO2Z5v9DWG77YX7enr3YHRBD4lq5qu5w7fEzgkE" crossorigin="anonymous"></script>

</body>
</html>
