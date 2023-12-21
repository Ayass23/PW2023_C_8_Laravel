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

    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="#"><img style="width: 4rem" src="{{ asset('images/GE.png') }}" alt=""></a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav mx-3 ">
                    @if (Auth::user()->role == 'admin')
                      <li class="nav-item">
                        <a class="nav-link  " href="{{ url('home') }}">Event</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ url('merchandise') }}">Merchandise</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('addEvent') }}">Make Event</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link active" href="{{ url('profile') }}">Profile</a>
                      </li>
                    @else
                    <li class="nav-item">
                      <a class="nav-link  " href="{{ url('home') }}">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('merchandise') }}">Merchandise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('profile') }}">Profile</a>
                    </li>
                    @endif 
                      
                  </ul>
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                      <a class="nav-link" href="{{ route('actionLogout') }}"><i class=""></i> Logout</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow" style="width: 930px">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box bg-white">
                <div class="featured-image mb-3">
                    <img style="width: 15rem; border-radius: 50%; border: 2px solid #5cb85c;" class="shadow-lg" src="{{ asset(Auth::user()->image) }} " alt="">
                </div>

            </div>
            <div class="col-md-6">
                <div class="row align-items-center justify-content-center p-2 text-success">
                    <div class="header-text mb-4">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-success btn-pill" id="description-button">Your Profile</button>
                            <button class="btn btn-outline-success btn-pill mx-2" id="ticket-button">Edit Profile</button>
                        </div>
                        <div class="modal fade" id="changePictureModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Change Profile Picture</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('updateUser') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Choose a new picture:</label>
                                                <input type="file" class="form-control" id="image" name="image">
                                            </div>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="content">
                            <div id="description" style="display: none" class="mb-3">
                                <div class="container mt-3">
                                    <form>
                                        <div class="form-group mb-3">
                                            <label for="nama"><strong>Username</strong></label>
                                            <input type="text" id="nama" class="form-control form-control-lg bg-light fs-6 mt-2 " value="{{ Auth::user()->username }}" required style="border-color: #5cb85c;">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="nomor"><strong>Nomor Telepon</strong></label>
                                            <input type="text" id="nomor" class="form-control form-control-lg bg-light fs-6" value="{{ Auth::user()->noTelp }}" required style="border-color: #5cb85c;">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email"><strong>Email</strong></label>
                                            <input type="email" id="email" class="form-control form-control-lg bg-light fs-6" value="{{ Auth::user()->email }}" required style="border-color: #5cb85c;">
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                            <div id="ticket" style="display: none">
                                <div class="container mt-3">
                                    <form action="{{ route('updateUser') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="nama"><strong>Username</strong></label>
                                            <input type="text" id="nama" class="form-control form-control-lg bg-light fs-6 mt-2 " name="username" value="{{ old('username', Auth::user()->username)}}" required style="border-color: #5cb85c;">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="nomor"><strong>Nomor Telepon</strong></label>
                                            <input type="text" id="nomor" class="form-control form-control-lg bg-light fs-6" name="noTelp" value="{{ old('noTelp', Auth::user()->noTelp)}}" required style="border-color: #5cb85c;">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email"><strong>Photo Profile</strong></label>
                                            <input type="file" name="image" id="email" class="form-control form-control-lg bg-light fs-6" name="image" value="{{old ('image',Auth::user()->image) }}" required style="border-color: #5cb85c;">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success">Save </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    </form>
                </div>
            </div>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

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