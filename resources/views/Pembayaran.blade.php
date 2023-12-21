<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                      <a class="nav-link " href="{{ route('adminDashboard') }}">Make Event</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " href="{{ url('profile') }}">Profile</a>
                  </li>
                @else
                <li class="nav-item">
                  <a class="nav-link  " href="{{ url('home') }}">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('merchandise') }}">Merchandise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('profile') }}">Profile</a>
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

    <div class="container my-4">
        <div class="row">

            <div class="col-md-8"> 
                <div class="card shadow-lg">
                    <div class="container">
                        <div class="container text-center p-2" >
                            <h3 class="card-title text-success">Data Pemesanan</h3>
                        </div>
                        <hr class="m-0">
                        <div class="container p-3">
                            <form method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama Pemesan</label>
                                    <input type="username" class="form-control mt-2 " id="exampleFormControlInput1" placeholder="Masukan Nama Lengkap" required name="nama_lengkap">
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group mt-4">
                                            <label for="identitasDropdown">Identitas</label>
                                            <select class="form-control-sm mt-2" id="identitasDropdown" required name="identitas">
                                                <option value="ktp">KTP</option>
                                                <option value="sim">SIM</option>
                                                <option value="passport">Passport</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group mt-4">
                                            <label for="nomorIdentitas"></label>
                                            <input type="text" class="form-control mt-2" id="nomorIdentitas" placeholder="Masukan Nomor Identitas" required name="nomor_identitas">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-4">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="email" class="form-control mt-2" id="exampleFormControlInput1" placeholder="name@gmail.com" required name="email">
                                </div>
                                <div class="form-group mt-4 mb-3">
                                    <label for="exampleFormControlInput1">No. Whatsapp</label>
                                    <input type="text" class="form-control mt-2" id="exampleFormControlInput1" placeholder="081xxxxxxxx"required name="no_telp" >
                                </div>
                                <button class="btn btn-success mt-2" type="submit" style="width:100%;">Bayar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"> 
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="container text-center" >
                            <h3 class="card-title text-success">Rincian Pemesanan</h3>
                        </div>
                        <div class="container p-2">
                            <img src="{{ asset($konser->poster) }}" class="card-img-top rounded" alt="" style="height: 300px">
                        </div>
                        <div class="container">
                            <h5 class="text-dark">{{$konser->nama}}</h5>
                        </div>
                        <hr>
                        <div class=" container pt-0 ">
                            <div class="d-flex justify-content-between">
                                <p class="text-secondary m-0">Tiket</p>
                                <p class="text-secondary m-0">Jumlah</p>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div>
                                    <p class="m-0"><strong>{{ $konser->nama }}</strong></p>
                                    <p class="m-0"><strong>{{ $konser->harga }}</strong></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="">x{{ request()->quantity }}</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="container">
                            <div class="d-flex justify-content-between">
                                <p class="text-secondary">Subtotal</p>
                                <p class="text-dark">Rp. {{$konser->harga * request()->quantity}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="container">
                            <div class="d-flex justify-content-between">
                                <p class="text-secondary">Total</p>
                                <p class="text-dark"><strong>Rp. {{$konser->harga * request()->quantity}}</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>

    
    <div class="modal " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header bg-success">
              <h5 class="modal-title text-white" id="exampleModalCenterTitle">Selamat !!!</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>
                    Selamat Pembelian tiket telah berhasil, mohon segera menyelesaikan pembayaran dan detail tiket akan dikirim melalui email. See you on Event !! 
                </p>
            </div>
            <div class="modal-footer ">
              <button type="button" class="btn btn-outline-success" onclick="window.location='{{ route('home') }}'">Done</button>
            </div>
          </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
        <script>
        // jika ada pesan sukses, tampilkan modal
        var myModal = new bootstrap.Modal(document.getElementById('exampleModalCenter'));
        @if (session()->has('success'))
        myModal.show();
        @elseif(session()->has('error'))
        alert("{{ session()->get('error') }}");
        @endif
    </script>
    
</body>

</html>
