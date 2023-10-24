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
            height: 9999px;
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
            height: 300px; /* only for demonstration, should be removed */
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

        .search-container {
    float: right;
    margin-top: 20px; /* Adjust the margin as needed */
}

.search-container .form-control-sm {
    width: 200px; /* Adjust the width of the input as needed */
    margin-right: 5px; /* Add some spacing between the input and button */
}

.search-container .btn-sm {
    padding: 5px 10px; /* Adjust the button padding as needed */
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
                <li><a class="dropdown-item" href="{{ url('homepage') }}">Logout</a></li>
            </ul>

        </div>
    </header>

    <section>
        <nav>
            <ul>
                <li class="nav-item">
                    <a href="{{ url('admindashboard') }}" class="nav-link active">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('event') }}" class="nav-link active">Event</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('report') }}" class="nav-link disabled" aria-current="page">Report</a>
                </li>
            </ul>
        </nav>
        
        <div class="container">
            <h1>Report Pelanggan</h1>
            
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 float-right" role="search">
                    <input type="search" class="form-control form-control-sm" placeholder="Search..." aria-label="Search">
                    <button type="search" class="btn btn-primary btn-sm">Search</button>
                </form>
            
                <div class="event-box">
                <h1 style="padding: 20 px;">Event</h1>
                    <table class="table table-striped border-dark text-center">
                                <tr class="">
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Nama Event</th>
                                    <th>Tanggal</th>
                                    <th>Lokasi</th>
                                    <th>Harga</th>
                                    <th>Keterangan</th>
                                </tr>
                            @forelse ($transaksi as $item)
                            <tr>
                                <td>{{ $item['no'] }} </td>
                                <td><img class="gambarTransaksi" src="{{ $item['gambar']
                                }}" alt=""></td>
                                <td>{{ $item['nama'] }}</td>
                                <td>{{ $item['tanggal']}}</td>
                                <td>{{ $item['lokasi'] }}</td>
                                <td>{{ $item['harga'] }}</td>
                                <td>{{ $item['ket'] }} </td>
                                <td><a href="{{ url('editPelanggan') }}" class="btn btn-outline-warning" onclick="return confirm('Are you sure you want to update?')">Update</a></td>

                                
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data Kelas masih kosong
                            </div>
                            @endforelse
                    </table>
                </div>
        </div>
    </section>

    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity= "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin= "anonymous">
    </script>
</body>
</html>