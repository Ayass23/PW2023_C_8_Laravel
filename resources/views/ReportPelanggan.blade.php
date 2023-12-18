<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Report User</title>
   
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
                        <a href="{{ url('event') }}" class="nav-link " aria-current="page">Add Event</a>
                    </li>
                    <li class="nav-item">
                            <a href="{{ url('addMerchandise') }}" class="nav-link " aria-current="page">Add Merchandise</a>
                        </li>
                    <li class="nav-item">
                        <a href="{{ url('reportpelanggan') }}" class="nav-link active ">Report User</a>
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
    <div class="mb-4">
        
    </div>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h1>USER REPORT</h1>
                <div class="form-group d-flex align-items-center justify-content-end mb-3">
                    <input type="search" class="form-control" style="width:25%;" placeholder="Search..." aria-label="Search">
                    <button type="search" class="btn btn-primary btn-sm">Search</button>
                </div>
                <div class="container mt-3">
                    <table class="table">
                        <thead class="table-light">
                            <tr class="">
                                <th>No</th>
                                <th>Nama Pemesan</th>
                                <th>Identitas</th>
                                <th>Nomor Identitas</th>
                                <th>Email</th>
                                <th>No Whatsapp</th>
                                <th>Keterangan</th>
                                <th class="text-center">Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($report as $item)
                            <tr>
                                <td>{{ $item['no'] }} </td>
                                <td>{{ $item['nama'] }}</td>
                                <td>{{ $item['identitas']}}</td>
                                <td>{{ $item['no_identitas'] }}</td>
                                <td>{{ $item['email'] }}</td>
                                <td>{{ $item['no_wa'] }}</td>
                                <td>{{ $item['ket'] }} </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ url('editPelanggan') }}" class="btn btn-outline-warning" onclick="return confirm('Are you sure you want to update?')">Update</a>
                                        <button type="button" class="btn btn-danger mx-2" onclick="return confirm('Are you sure you want to delete user?')">Delete</button>
                                    </div>
                                </td>
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
    </div>
    

    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity= "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin= "anonymous">
    </script>
</body>
</html>