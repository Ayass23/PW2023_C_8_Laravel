<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Home Page Tiket</title>
   <link rel="stylesheet" href="apps.css">
    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" style="height: 38rem">
            <img src="{{ asset('images/tulusPoster.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" style="height: 38rem">
            <img src="{{ asset('images/pamungkasPoster.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" style="height: 38rem">
            <img src="{{ asset('images/hindiaPoster.jpg') }}" class="d-block w-100" alt="">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
      <div class="container p-2 mt-4 d-flex justify-content-between">
        <h1 class="text-success">BEST FOR YOU</h1>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
      </div>

      <div class="container p-2 mt-3 d-flex flex-wrap justify-content-evenly mb-5">
        @forelse ($tickets as $item)
        <div class="card p-2 mt-4 shadow-lg border-success"  style="width: 19rem">
            <img class="rounded" src="{{asset('images/1.png')}}" alt="">
            <h5 class="mt-1 mx-1 text-dark">{{ $item['name'] }}</h5>
                <div class="container mt-3 d-flex align-items-start">
                    <img style="width: 24px" src="{{ asset('images/calendar_1.png') }}" alt="">
                    <p class="card-text mx-2 text-secondary" style="font-size:16px">{{ $item['date'] }}</p>
                </div>
                <div class="container mt-3 d-flex align-items-start">
                    <img style="width: 24px" src="{{ asset('images/time_1.png') }}" alt="">
                    <p class="card-text mx-2 text-secondary" style="font-size:16px">{{ $item['jam'] }} WIB</p>
                </div>
                <div class="container mt-3 d-flex align-items-start">
                    <img style="width: 24px" src="{{ asset('images/location_1.png') }}" alt="">
                    <p class="card-text mx-2 text-secondary" style="font-size:16px">{{ $item['lokasi'] }}</p>
                </div>
            <hr class="mb-0">
            <div class="d-flex justify-content-between p-2">
                <div>
                    <p class="m-0 text-secondary">Harga :</p>
                    <h4 class="m-0"><strong>{{ $item['harga'] }}</strong></h4>
                </div>
                <div class="d-flex align-items-center">
                    <button class="btn btn-success" style="font-size:20px" onclick="window.location='{{ url('pembelian') }}'">BELI</button>
                </div>
            </div>
        </div>
        @empty
          
        @endforelse  
    </div>
      
    <footer class="bg-success text-white text-center text-lg-start">
        <div class="container p-4">
          <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">About GeTix</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                voluptatem veniam, est atque cumque eum delectus sint!
              </p>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Social Media</h5>
      
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Instagram</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Whatsapp</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Twitter</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Facebook</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-0">Our Partner</h5>
      
              <ul class="list-unstyled">
                <li>
                  <a href="#!" class="text-white">Atma Jaya Univesity</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Univerity of Ciputra</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Net Media</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Mie Gacoan</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2021 Copyright:
          <a class="text-white" href="#">GeTix</a>
        </div>
      </footer>

    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity= "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin= "anonymous">
    </script>
</body>
</html>
