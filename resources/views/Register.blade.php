<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "utf-8">
    <meta name= "viewport" content= "width=device-width, initial-scale=1">
    <title>Login</title>
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel= "stylesheet" integrity= "sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin= "anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container">
            <a class="navbar-brand" href="#"><img style="width: 4rem" src="{{ asset('images/GE.png') }}" alt=""></a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-3 "> 
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="{{ url('homepage') }}">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('login') }}">Make Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('profile') }}">Profile</a>
                    </li>
                </ul>
                <div>
                    
                </div>
                
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow" style="width: 930px">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box bg-success">
                <div class="featured-image mb-3">
                    <img style="width: 10rem" src="{{ asset('images/GE.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="row align-items-center justify-content-center p-2 text-success">
                    <div class="header-text mb-4">
                        <h1 class="text-center">Register</h1>
                    </div>
                    <form>
                        <div class="form-group mb-3">
                            <label for="nama"><strong>Nama Lengkap</strong></label>
                            <input type="text" id="nama" class="form-control form-control-lg bg-light fs-6 mt-2 " placeholder="masukan nama lengkap" required style="border-color: #5cb85c;">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nomor"><strong>Nomor Telepon</strong></label>
                            <input type="text" id="nomor" class="form-control form-control-lg bg-light fs-6" placeholder="masukan password" required style="border-color: #5cb85c;">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email"><strong>Email</strong></label>
                            <input type="email" id="email" class="form-control form-control-lg bg-light fs-6" placeholder="masukan email anda" required style="border-color: #5cb85c;">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password"><strong>Password</strong></label>
                            <input type="password" id="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required style="border-color: #5cb85c;">
                        </div>
                        <div>
                            <button class="btn btn-lg btn-success w-100 fs-6 mt-3 mb-3" onclick="window.location='{{ url('login') }}'">Register</button>
                        </div>
                        <div class="row">
                            <small class="text-center">Already have Account ? <a href="{{ url('login') }}">Login</a></small>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity= "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin= "anonymous">
    </script>
</body>
</html>