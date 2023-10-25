<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Report Merchandise - Edit Merchandise</title>
   
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
                    <a href="{{ url('homepage') }}" class="nav-link active">Logout</a>
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
                    <a href="{{ url('event') }}" class="nav-link ">Event</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('addMerchandise') }}" class="nav-link " aria-current="page">Add Merchandise</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('reportpelanggan') }}" class="nav-link ">Report User</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('reportevent') }}" class="nav-link " aria-current="page">Report Event</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('reportmerchandise') }}" class="nav-link active">Report Merchandise</a>
                </li>
            </ul>
    </nav>
    
        <form onsubmit="return validateForm()">
            <div class="container">
                <div class="event-box">
                    <h2 style="font-weight: bold; text-align: center;">Edit Merchandise</h2>
                    <hr style="border: solid">
                    <div class="input">
                            <label for="formNama" class="form-label">Nama Merchandise</label>
                            <input type="text" class="form-control" id="namaMerchandise" placeholder="Masukkan Nama Merchandise" required="">
                            <div class="invalid-feedback">
                                Tolong harap diisi!
                            </div>
                        </div>
                        <div class="input">
                            <label for="formJenis" class="form-label">Jenis Merchandise</label>
                            <input type="text" class="form-control" id="jenisMerchandise" placeholder="Masukkan Jenis Merchandise" required="">
                            <div class="invalid-feedback">
                                Isi Jenis Merchandise!
                            </div>
                        </div>
                        <div class="input">
                            <label for="formJenis" class="form-label">Stok Merchandise</label>
                            <input type="text" class="form-control" id="stokMerchandise" placeholder="Masukkan Stok Merchandise" required="">
                            <div class="invalid-feedback">
                                berapa stok Merchandise!
                            </div>
                        </div>
                        <div class="input">
                            <label for="formHarga" class="form-label">Harga Merchandise</label>
                            <input type="text" class="form-control" id="hargaMerchandise" placeholder="Masukkan Jenis Merchandise" required="">
                            <div class="invalid-feedback">
                                Masukkan Harga Merchandise Anda!
                            </div>
                        </div>

                        <div class="input">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Input Gambar</label>
                                <input class="form-control" type="file" id="posterFile" required="">
                            </div>
                        </div>
                    </hr>

                    <script>
                        function inputForm() {
                        const namaMerchandise = document.getElementById("namaMerchandise").value;
                        const jenisMerchandise = document.getElementById("jenisMerchandise").value;
                        const stokMerchandise = document.getElementById("stokMerchandise").value;
                        const hargaMerchandise = document.getElementById("hargaMerchandise").value;
                        const poster = document.getElementById("posterFile").value;
                        
                        if (namaMerchandise.trim() === "") {
                            alert("Nama Merchandise Tidak boleh Kosong!");
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
                        <td><a href="{{ url('reportmerchandise') }}" class="btn btn-outline-success" style="border: 1px solid green; color: white; background-color: green;" onclick="return confirm('Are you finished to update?')">Submit</a></td>
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