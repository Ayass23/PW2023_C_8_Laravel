<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Event</title>
   
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container">
                <a class="navbar-brand" href="#"><img style="width: 4rem" src="{{ asset('images/GE.png') }}" alt=""></a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-3 "> 
                        <li class="nav-item">
                            <a href="{{ url('adminDashboard') }}" class="nav-link ">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('addEvent') }}" class="nav-link  active" aria-current="page">add Event</a>
                        </li>
                        <li class="nav-item">
                                <a href="{{ url('addMerchandise') }}" class="nav-link " aria-current="page">Add Merchandise</a>
                            </li>
                        <li class="nav-item">
                            <a href="{{ url('ReportUser') }}" class="nav-link  ">Report User</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('ReportEvent') }}" class="nav-link ">Report Event</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('ReportMerchandise') }}" class="nav-link ">Report Merchandise</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                          <a class="nav-link" href="{{ route('actionLogout') }}"><i class=""></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>    </nav>

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h2 style="font-weight: bold; text-align: center;">Event Registration</h2>
                <hr style="border: solid">
                <form action="{{route('konser.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="penyelenggara" class="form-label">Penyelenggara</label>
                        <input type="text"  name="penyelenggara" class="form-control" placeholder="Masukkan Title">
                        <div class="invalid-feedback">
                            Judul tidak boleh kosong
                        </div>
                    </div>
                    <div class="input">
                        <label for="formTiket" class="form-label">Nama Tiket</label>
                        <input type="text" name="nama" class="form-control" id="namaTiket" placeholder="Masukkan Tiket" required="">
                        <div class="invalid-feedback">
                            Isi Nama Event yang Anda Ikuti!
                        </div>
                    </div>
                    <div class="input">
                        <label for="formHarga" class="form-label">Harga Tiket</label>
                        <input type="number" name="harga" class="form-control" id="hargaTiket" placeholder="Masukkan Harga Tiket" required="">
                        <div class="invalid-feedback">
                            Masukkan Harga Tiket Event Anda!
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" id="tanggal" required="">
                                <div class="invalid-feedback">
                                    Pilih Tanggal Event yang Anda!
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="waktu" class="form-label">Waktu</label>
                                <input type="text" name="jam" class="form-control" id="waktu" placeholder="Masukkan Jam" required="">
                                <div class="invalid-feedback">
                                    Isi Pukul Berapa Event Anda!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" id="lokasi" placeholder="Masukkan Lokasi Acara" required="">
                        <div class="invalid-feedback">
                            Isi Lokasi Event Anda!
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah Tiket</label>
                        <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Masukkan jumlah Tiket" required="">
                        <div class="invalid-feedback">
                            isi jumlah tiket ynag anda sediakan
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="posterFile" class="form-label">Input Poster</label>
                        <input class="form-control" name="poster" type="file" id="posterFile" required="">
                    </div>
                    
                    <div class="mb-3">
                        <label for="DeskripsiEvent" class="form-label">Deskripsi Event</label>
                        <input class="form-control"name="deskripsi" type="textarea" id="deskripsiEvent" >
                    </div>
                    
                    <div class="d-flex justify-content-center">
                        <div class="d-grid">
                            <button class="btn btn-outline-danger" type="submit">Reset</button>
                        </div>
                        <div class="d-grid ms-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity= "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin= "anonymous">
    </script>
</body>
</html>