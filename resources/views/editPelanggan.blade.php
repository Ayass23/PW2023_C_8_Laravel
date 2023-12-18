<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Report User - Edit Pelanggan</title>
   
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
                        <a href="{{ url('admindashboard') }}" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('event') }}" class="nav-link active" aria-current="page">Add Event</a>
                    </li>
                    <li class="nav-item">
                            <a href="{{ url('addMerchandise') }}" class="nav-link " aria-current="page">Add Merchandise</a>
                        </li>
                    <li class="nav-item">
                        <a href="{{ url('reportpelanggan') }}" class="nav-link  ">Report User</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('reportevent') }}" class="nav-link ">Report Event</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('reportmerchandise') }}" class="nav-link ">Report Merchandise</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ url('homepage') }}" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h2 style="font-weight: bold; text-align: center;">Edit Pelanggan</h2>
                <hr style="border: solid">
                <form>
                    <div class="mb-3">
                        <label for="NamaPemesan" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control" id="NamaPemesan" placeholder="Masukkan Nama Pemesan" required="">
                        <div class="invalid-feedback">
                            Tolong harap diisi!
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="input">
                                <label for="formIdentitas" class="form-label">Identitas</label>
                                <select class="form-select" id="identitas" required="">
                                    <option value="">Pilih Identitas</option>
                                    <option value="KTP">KTP</option>
                                    <option value="SIM">SIM</option>
                                </select>
                                <div class="invalid-feedback">
                                Please enter your shipping address.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input">
                                <label for="formNomor" class="form-label">Nomor Identitas</label>
                                <input type="text" class="form-control" id="nomorIdentitas" placeholder="Masukkan Nomor Identitas" required="">
                                <div class="invalid-feedback">
                                    Isi sesuai nomor identitas anda!
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input mb-3">
                            <label for="formEmail" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Masukkan Email" required="">
                            <div class="invalid-feedback">
                                Isi email yang anda miliki!
                            </div>
                        </div>
                        <div class="input mb-3">
                            <label for="formWA" class="form-label">Nomor Whatsapp</label>
                            <input type="text" class="form-control" id="nomorWA" placeholder="Masukkan Nomor Whatsapp" required="">
                            <div class="invalid-feedback">
                                Masukkan Nomor Whatsapp Anda!
                            </div>
                        </div>
        
                        <div class="input ">
                            <label for="formKet" class="form-label">Keterangan</label>
                                <select class="form-select" id="ket" required="">
                                    <option value="">Pilih Keterangan</option>
                                    <option value="Lunas">Lunas</option>
                                    <option value="Belum Lunas">Belum Lunas</option>
                                </select>
                                <div class="invalid-feedback">
                                    Pembayaran Anda telah lunas atau belum!
                                </div>
                        </div>
                    
                    <div class="d-flex justify-content-center mt-4">
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