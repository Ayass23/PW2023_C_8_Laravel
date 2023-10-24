<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Home Page Tiket</title>
   
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="antialiased">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: rgb(255, 255, 255);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }
        .navbar-nav {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-item {
            margin-left: 15px; 
        }

        .nav-link {
            text-decoration: none;
            color: white;
        }

        .top {
            background-color: #666;
            padding: 200px;
            text-align: center;
            font-size: 35px;
            color: white;
        }
        
        footer {
            padding: 10px;
            margin-left: 50 px;
            color: white;
        }
        .carousel-inner img{
            width: 100%;
            height: 500px;  
        }

        .custom-card {
            width: 300px; 
            height: 430px; 
            margin-bottom: 50 px;
        }

        .custom-card-image {
            width: 100%;
            height: 150px;
            object-fit: contain;
            object-position: center;   
        }

    </style>

    <header class="p-3 text-bg-success">
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
                            <a class="nav-link text-white" href="#">Profile</a>
                        </li>
                    </ul>
                    <div>
                        
                    </div>
                    
                </div>
            </div>
        </nav>
    </header>

    <div class="carousel-container">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="mx-haeight: 500 px;">
                <div class="carousel-item active">
                    <img style="max-height: 450 px;" src="{{ asset('images/hindiaPoster.jpg') }}" class="d-block w-100" alt="Hindia">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Hindia</h5>
                        <p>28 Oktober 2023</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img style="mx-haeight: 450 px;" src="images/pamungkasPoster.jpg" class="d-block w-100" alt="Pamungkas">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pamungkas</h5>
                        <p>29 Oktober 2023</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img style="max-height: 450 px;" src="images/tulusPoster.jpg" class="d-block w-100" alt="Tulus">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Tulus</h5>
                        <p>31 Oktober 2023</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container text-left" style="margin-top: 20px;">
        <h3 style="font-weight: bold; color: Green; margin-bottom: 50px;">Best For You</h3>
    </div>
    <div class="container text-center">
    <div class="row d-flex justify-content-center align-items-center">
    @foreach ($tickets as $item)
        <div class="col-sm-4 mb-3 mx-auto item-center" style="margin-bottom: 50 px;">
            <div class="card custom-card border border-3 rounded item-center" style="margin-bottom: 50 px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);"> <!-- Tambah class custom-card -->
                <img src="{{ $item['gambar'] }}" class="card-img-top custom-card-image" alt="tiket1">
                <div class="card-body" style="margin-bottom: 50 px;">
                    <p style= "font-weight: bold;">{{ $item['name'] }}</p> 
                    <p>Tanggal: {{ $item['date'] }}</p>
                    <p>Lokasi: {{ $item['lokasi'] }}</p>
                    <hr>
                    <p>Start From:</p>
                    <p style="display: flex; justify-content: space-between; align-items: center;">
                        <span>{{ $item['harga'] }}</span>
                        <button type="button" id="presensiToastBtn" class="btn btn-success btn-sm" onclick="window.location='{{ url('pembelian') }}'"><i class="fa fa-check"></i>Buy Now</button>
                    </p>
                    </hr>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    </div>

    <footer style="background-color: green;">
        <div class="row">
            <div class="col-sm-3 mb-4 mx-auto text-center">
                <p style="font-weight: bold; font-family: Arial Black;">GeTix</p>
                <p>About us</p>
                <p>Blog</p>
            </div>
            <div class="col-sm-3 mb-4 mx-auto text-center">
                <p style="font-weight: bold; font-family: Arial Black;">Partner With Us</p>
                <p>Submit Event</p>
                <p>Official Partner</p>
            </div>
            <div class="col-sm-3 mb-4 mx-auto text-center">
                <p style="font-weight: bold; font-family: Arial Black;">Support</p>
                <p>Contact Us</p>
                <p>Terms & Condition</p>
            </div>
            <div class="col-sm-3 mb-4 mx-auto text-center">
                <p style="font-weight: bold; font-family: Arial Black;">User</p>
                <p>Login</p>
                <p>Registration</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3 mb-4 mx-auto text-left">
                <img src="{{ asset('images/icon/wa.png') }}" alt="wa" style="height: 40px;">
                <img src="{{ asset('images/icon/ig.png') }}" alt="ig" style="height: 40px;">
                <img src="{{ asset('images/icon/twitter.png') }}" alt="x" style="height: 40px;">
            </div>
            <div class="col-sm-3 mb-4 mx-auto text-right">
                <h4>Powered by GeTix</h4>
            </div>
        </div>
        </hr>
    </footer>
    
    
    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity= "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin= "anonymous">
    </script>
</body>
</html>
