<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Merchandise</title>

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
                        <a href="{{ url('adminDashboard') }}" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('addEvent') }}" class="nav-link  " aria-current="page">add Event</a>
                    </li>
                    <li class="nav-item">
                            <a href="{{ url('addMerchandise') }}" class="nav-link  active" aria-current="page">Add Merchandise</a>
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
                <h2 style="font-weight: bold; text-align: center;">Merchandise Registration</h2>
                <hr style="border: solid">
                <form action="{{ route('merchandises.store', []) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="NamaMerchandise" class="form-label">Nama Merchandise</label>
                        <input type="text" class="form-control" id="NamaMerchandise" placeholder="Masukkan Nama Merchandise" required name="nama">
                        <div class="invalid-feedback">
                            Tolong harap diisi!
                        </div>
                    </div>
                    <div class="input">
                        <label for="JenisMerch" class="form-label">Jenis Merchandise</label>
                        <input type="text" class="form-control" id="JenisMerch" placeholder="Masukkan Jenis Merchandise" required name="jenis">
                        <div class="invalid-feedback">
                            Isi Nama Event yang Anda Ikuti!
                        </div>
                    </div>
                    <div class="input">
                        <label for="StokMerch" class="form-label">Stok Merchandise</label>
                        <input type="number" class="form-control" id="StokMerch" placeholder="Masukkan Stok Merchendise" required name="stok">
                        <div class="invalid-feedback">
                            Masukkan Harga Tiket Event Anda!
                        </div>
                    </div>
                    <div class="input">
                        <label for="HargaMerch" class="form-label">Harga Merchandise</label>
                        <input type="number" class="form-control" id="HargaMerch" placeholder="Masukkan Harga Merchendise" required name="harga">
                        <div class="invalid-feedback">
                            Masukkan Harga Tiket Event Anda!
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="GambarMerch" class="form-label">Input Gambar Merchandise</label>
                        <input name="gambar" class="form-control" type="file" id="GambarMerch" required>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="d-grid">
                            <button class="btn btn-outline-danger" type="reset">Reset</button>
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
