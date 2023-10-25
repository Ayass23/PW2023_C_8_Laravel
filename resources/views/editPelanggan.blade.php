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

        nav {
            float: left;
            width: 20%;
            height: 630px;
            background: #ccc;
            padding: 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        section::after {
            content: "";
            display: table;
            clear: both;
        }

        .container {
            float: left;
            padding: 20px;
            width: 80%;
            background-color: #f1f1f1;
            height: 400px; /* only for demonstration, should be removed */
        }
        @media (max-width: 600px) {
            nav, article {
                width: 100%;
                height: auto;
            }
        }

        .card {
            width: 200px; 
            height: 100px; 
        }

        .gambarKelas {
            width: 300px;
        }

        .event-box {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
        }
        
        .input{
            margin-bottom: 20px;
        }
    </style>

<header class="p-3 text-bg-success">
    <div class="d-flex flex-wrap align-items-center justify-content-between">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li class="nav-item col-lg-auto">
                <img src="{{ asset('images/logoGetix.png') }}" alt="Logo" style="height: 40px;"> 
            </li>
            
        </ul>

        <ul class="navbar-nav ml-auto d-flex flex-row">
            <li class="nav-item">
                <li><a class="dropdown-item" href="{{ url('homepage') }}">Logout</a></li>
            </li>
        </ul>

    </div>
</header>

<section>
    <nav>
        <ul>
            <li class="nav-item">
                <a href="{{ url('admindashboard') }}" class="nav-link ">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('event') }}" class="nav-link " aria-current="page">Event</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('reportpelanggan') }}" class="nav-link active ">Report User</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('reportevent') }}" class="nav-link">Report Event</a>
            </li>
        </ul>
    </nav>    


        <form onsubmit="return validateForm()">
            <div class="container">
                <div class="event-box">
                    <h2 style="font-weight: bold; text-align: center;">Edit Pelanggan</h2>
                    <hr style="border: solid">
                        <div class="input">
                            <label for="formNama" class="form-label">Nama Pemesan</label>
                            <input type="text" class="form-control" id="namaPemesan" placeholder="Masukkan Nama Pemesan" required="">
                            <div class="invalid-feedback">
                                Tolong harap diisi!
                            </div>
                        </div>

                        <div class="row">
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

                        <div class="input">
                            <label for="formEmail" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Masukkan Email" required="">
                            <div class="invalid-feedback">
                                Isi email yang anda miliki!
                            </div>
                        </div>
                        <div class="input">
                            <label for="formWA" class="form-label">Nomor Whatsapp</label>
                            <input type="text" class="form-control" id="nomorWA" placeholder="Masukkan Nomor Whatsapp" required="">
                            <div class="invalid-feedback">
                                Masukkan Nomor Whatsapp Anda!
                            </div>
                        </div>
                        
                        <div class="input">
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

                    <script>
                        function inputForm() {
                        const namaPemesan = document.getElementById("namaPemesan").value;
                        const identitas = document.getElementById("identitas").value;
                        const nomorIdentitas = document.getElementById("nomorIdentitas").value;
                        const email = document.getElementById("email").value;
                        const nomorWA = document.getElementById("nomorWA").value;
                        const ket = document.getElementById("ket").value;
                        
                        if (identitas.trim() === "") {
                            alert("Pilih salah satu identitas!");
                            return false;
                        }else if (nomorIdentitas.trim() === "") {
                            alert("Harus Masukan Sesuai Nomor Identitas Anda!");
                            return false;
                        }else{
                            return true;
                        }
                                        
                        };

                        function showAlert() {
                            if (inputForm()) {
                                const konfirmasi = confirm("Apakah Data Anda Sudah Benar?");
                                if (konfirmasi) { 
                                    alert("Data Berhasil Disimpan!");
                                    
                                } else {
                                    alert("Data Gagal Disimpan!");    
                                }  
                            }
                           
                        }       
                    </script>
                
                    <div style="margin-left: 450px; margin-top: 30px;">
                        <input type="reset" style="border: 1px solid red; color: red;" id="reset" name="reset">
                        <td><a href="{{ url('reportpelanggan') }}" class="btn btn-outline-success" style="border: 1px solid green; color: white; background-color: green;" onclick="return confirm('Are you finished to update?')">Submit</a></td>
                        <!-- <input type="button" onclick="showAlert()" value="Submit" style="border: 1px solid green; color: white; background-color: green;" type="submit" /> -->
                    </div>    
                </div>
            </div>
        </form>
    </section>

    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity= "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin= "anonymous">
    </script>
</body>
</html>