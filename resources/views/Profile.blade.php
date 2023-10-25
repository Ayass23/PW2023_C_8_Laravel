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
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box bg-white" >
                <div class="featured-image mb-3">
                    <img style="width: 10rem; border-radius:50%; width:15rem; border:2px solid #5cb85c;"  class="shadow-lg"  src="{{ asset('images/profile.jpg') }}" alt="">
                </div>    
            </div>
            <div class="col-md-6">
                <div class="row align-items-center justify-content-center p-2 text-success">
                    <div class="header-text mb-4">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-success btn-pill" id="description-button">Your Profile</button>
                            <button class="btn btn-outline-success btn-pill mx-2" id="ticket-button">History</button>
                        </div>
                        <div id="content">
                            <div id="description" style="display: none" class="mb-3">
                                <div class="container mt-3">
                                    <form>
                                        <div class="form-group mb-3">
                                            <label for="nama"><strong>Nama Lengkap</strong></label>
                                            <input type="text" id="nama" class="form-control form-control-lg bg-light fs-6 mt-2 " value="Axel Christian" required style="border-color: #5cb85c;">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="nomor"><strong>Nomor Telepon</strong></label>
                                            <input type="text" id="nomor" class="form-control form-control-lg bg-light fs-6" value="081234567899" required style="border-color: #5cb85c;">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email"><strong>Email</strong></label>
                                            <input type="email" id="email" class="form-control form-control-lg bg-light fs-6" value="axel@gmail.com" required style="border-color: #5cb85c;">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="password"><strong>Password</strong></label>
                                            <input type="password" id="password" class="form-control form-control-lg bg-light fs-6" value="xxxxxxx" required style="border-color: #5cb85c;">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="ticket" style="display: none">
                                <div class="card p-2 m-3 d-flex justify-content-center " id="cardmain" style="border: 2px solid #5cb85c; display: flex; max-height: 300px; overflow-y: auto; ">
                                    <div class="card p-1 mt-2 d-flex justify-content-center" style="border: 2px solid #5cb85c; display: flex; height:60%;">
                                        <div class="container d-flex justify-content-center " >
                                            <img src="{{asset('images/1.png')}}" class="rounded" style="width: 100%; height: auto;" alt="">
                                        </div>
                                        <div class="container mt-2">
                                            <h5><strong>Virtual Concert : Devano Danenda</strong></h5>
                                            <hr class="mb-0">
                                            <div class="container d-flex justify-content-between mt-0" >
                                                <div>
                                                    <p class="text-secondary m-0">Status :</p>
                                                    <h5 class="text-success"><strong>LUNAS</strong></h5>
                                                </div>
                                                <div class="d-flex align-self-center">
                                                    <button class="btn btn-success">Lihat Tiket</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card p-1 mt-2 d-flex justify-content-center" style="border: 2px solid #5cb85c; display: flex;">
                                        <div class="container d-flex justify-content-center " >
                                            <img src="{{asset('images/1.png')}}" class="rounded" style="width: 100%; height: auto;" alt="">
                                        </div>
                                        <div class="container mt-2">
                                            <h5><strong>Virtual Concert : Devano Danenda</strong></h5>
                                            <hr class="mb-0">
                                            <div class="container d-flex justify-content-between mt-0" >
                                                <div>
                                                    <p class="text-secondary m-0">Status :</p>
                                                    <h5 class="text-danger"><strong>BELUM LUNAS</strong></h5>
                                                </div>
                                                <div class="d-flex align-self-center">
                                                    <button class="btn btn-success">Bayar</button>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
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

    <script>
        document.getElementById("description").style.display = "block";

// Tambahkan event listener untuk tombol "Your Profile"
document.getElementById("description-button").addEventListener("click", () => {
    document.getElementById("description").style.display = "block";
    document.getElementById("ticket").style.display = "none";
});

// Tambahkan event listener untuk tombol "History"
document.getElementById("ticket-button").addEventListener("click", () => {
    document.getElementById("description").style.display = "none";
    document.getElementById("ticket").style.display = "block";
});
    </script>
</body>
</html>