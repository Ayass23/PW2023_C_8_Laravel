<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Report Event - Edit Event</title>
   
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
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
                    <li class="nav-item">
                        <a href="{{ url('adminDashboard') }}" class="nav-link active">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('addEvent') }}" class="nav-link  " aria-current="page">add Event</a>
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
    </nav>
    
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h2 style="font-weight: bold; text-align: center;">Edit Event</h2>
                <hr style="border: solid">
                <form action="{{ route('konser.update', $konser->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="NamaMerchandise" class="form-label">Penyelenggara</label>
                        <input type="text" class="form-control" id="NamaMerchandise" placeholder="Masukkan Nama Merchandise" required name="penyelenggara" value="{{ old('penyelenggara', $konser->penyelenggara) }}">
                        <div class="invalid-feedback">
                            Tolong harap diisi!
                        </div>
                    </div>
                    <div class="input">
                        <label for="JenisMerch" class="form-label">Nama Tiket</label>
                        <input type="text" class="form-control" id="JenisMerch" placeholder="Masukkan Jenis Merchandise" required name="nama" value="{{ old('nama', $konser->nama) }}">
                        <div class="invalid-feedback">
                            Isi Nama Event yang Anda Ikuti!
                        </div>
                    </div>
                    <div class="input">
                        <label for="StokMerch" class="form-label">Harga Tiket</label>
                        <input type="number" class="form-control" id="StokMerch" placeholder="Masukkan Stok Merchendise" required name="harga" value="{{ old('harga', $konser->harga) }}">
                        <div class="invalid-feedback">
                            Masukkan Harga Tiket Event Anda!
                        </div>
                    </div>
                    <div class="input">
                        <label for="HargaMerch" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="HargaMerch" placeholder="Masukkan Harga Merchendise" required name="tanggal" value="{{ old('tanggal', $konser->tanggal) }}">
                        <div class="invalid-feedback">
                            Masukkan Harga Tiket Event Anda!
                        </div>
                    </div>
                    <div class="input">
                        <label for="HargaMerch" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="HargaMerch" placeholder="Masukkan Harga Merchendise" required name="lokasi" value="{{ old('lokasi', $konser->lokasi) }}">
                        <div class="invalid-feedback">
                            Masukkan Harga Tiket Event Anda!
                        </div>
                    </div>
                    <div class="input">
                        <label for="HargaMerch" class="form-label">Waktu</label>
                        <input type="number" class="form-control" id="HargaMerch" placeholder="Masukkan Waktu konser (12:XX)" required name="jam" value="{{ old('jam', $konser->jam) }}">
                        <div class="invalid-feedback">
                            Masukkan Harga Tiket Event Anda!
                        </div>
                    </div>
                    <div class="input">
                        <label for="HargaMerch" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="HargaMerch" placeholder="Masukkan Waktu konser (12:XX)" required name="jumlah" value="{{ old('jumlah', $konser->jumlah) }}">
                        <div class="invalid-feedback">
                            Masukkan Harga Tiket Event Anda!
                        </div>
                    </div>
                    <div class="input">
                        <label for="HargaMerch" class="form-label">Deskripsi</label>
                        <input type="textarea" class="form-control" id="HargaMerch" placeholder="Masukkan Waktu konser (12:XX)" required name="deskripsi" value="{{ old('deskripsi', $konser->deskripsi) }}">
                        <div class="invalid-feedback">
                            Masukkan Harga Tiket Event Anda!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="GambarMerch" class="form-label">Input Poster</label>
                        <input class="form-control" type="file" id="GambarMerch" name="poster" value="{{ old('poster', $konser->poster) }}">
                        <p class="small-text text-danger">
                            jangan upload gambar jika tidak ingin mengubah gambar
                        </p>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="d-grid">
                            <button class="btn btn-outline-danger" type="submit">Cancel</button>
                        </div>
                        <div class="d-grid ms-3">
                            <button class="btn btn-primary" type="submit">Save</button>
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