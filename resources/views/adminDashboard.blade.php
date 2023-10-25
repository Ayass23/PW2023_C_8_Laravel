<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Dashboard</title>
   
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
            height: flex;
            background: #ccc;
            padding: 20px;
        }

        .main-content {
            display: flex;
            align-items: stretch;
            height: 100vh; 
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
            height: 100%; /* only for demonstration, should be removed */
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

        .gambarTransaksi {
            width: 300px;
            height: 250px;
        }

        /* .event-box {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
        } */
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
        <ul>
            <li class="nav-item">
                <a href="{{ url('admindashboard') }}" class="nav-link ">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('event') }}" class="nav-link " aria-current="page">Event</a>
            </li>
            <li class="nav-item">
                    <a href="{{ url('addMerchandise') }}" class="nav-link active" aria-current="page">Add Merchandise</a>
                </li>
            <li class="nav-item">
                <a href="{{ url('reportpelanggan') }}" class="nav-link ">Report User</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('reportevent') }}" class="nav-link">Report Event</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('reportmerchandise') }}" class="nav-link">Report Merchandise</a>
            </li>
        </ul>
        </ul>
    </nav>
        
        <div class="container">
                <div class="row align-items-center justify-content-around mt-3 ">
                    <!-- Colom 1 -->
                    <h1>Dashboard</h1>
                    <div class="col-md-3 col-sm-6">
                        <div class="card p-0 mx-3">
                            <div class="card">
                                <div class="d-flex justify-content-left" style="margin-left: 10px">
                                    <div class="text-start mt-3">
                                        <p class="m-0">Total Event</p>
                                        <h4>100</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Colom 2 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card p-0 mx-3">
                            <div class="card">
                                <div class="d-flex justify-content-left" style="margin-left: 10px">
                                    <div class="text-start mt-3">
                                        <p class="m-0">Total Tiket Terjual</p>
                                        <h4>60</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Colom 3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card p-0 mx-3">
                            <div class="card">
                                <div class="d-flex justify-content-left" style="margin-left: 10px">
                                    <div class="text-start mt-3">
                                        <p class="m-0">Total Penjualan</p>
                                        <h4>Rp 10.000.000</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h1 style="padding: 20 px;">Event</h1>

                <div class=" p-3">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Event</th>
                            <th>Tanggal</th>
                            <th>Lokasi</th>
                            <th>Harga</th>
                            <th>Total Penjualan</th>
                            <th>Banyak Jenis Tiket</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transaksi as $item)
                            <tr>
                                <td>{{ $item['no'] }} </td>
                                <td><img class="gambarTransaksi" src="{{ $item['gambar']
                                }}" alt=""></td>
                                <td>{{ $item['nama'] }}</td>
                                <td>{{ $item['date']}}</td>
                                <td>{{ $item['lokasi'] }}</td>
                                <td>{{ $item['harga'] }}</td>
                                <td>{{ $item['total'] }}</td>
                                <td>{{ $item['jenis'] }}</td>
                                <td>
                                    <p class="ms-1"> 
                                    @if ($item['ket'] === 'Available')
                                        <span class="badge bg-success">Available</span>
                                    @else
                                        <span class="badge bg-secondary">Unavailable</span>
                                    @endif
                                    </p>
                                <td>
                                
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data Kelas masih kosong
                            </div>
                            @endforelse
                    </tbody>
                    </table>
                    
                </div>
                </div>

                
        </div>
    </section>

    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity= "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin= "anonymous">
    </script>
</body>
</html>