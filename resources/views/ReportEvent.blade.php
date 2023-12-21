<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Report Event</title>
   
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
                        <a href="{{ url('adminDashboard') }}" class="nav-link ">Dashboard</a>
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
                        <a href="{{ url('ReportEvent') }}" class="nav-link active">Report Event</a>
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
    </nav>    <div class="mb-4">
        
    </div>
    <div class="container mt-4">
        <div class="card">
                <h1>EVENT REPORT</h1>
                
                <div class="container mt-3">
                    <table class="table">
                        <thead class="table-light">
                            <tr class="">
                                <th>No</th>
                                <th>Poster</th>
                                <th>Penyelenggara</th>
                                <th>Nama Tiket</th>
                                <th>Harga Tiket</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Lokasi</th>
                                <th>Deskripsi</th>
                                <th>Stok</th>
                                <th class="text-center">Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($konsers as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><img class="gambarEvent" src="{{ $item['poster']
                                }}" alt="" style="width: 200px"></td>
                                <td>{{ $item['penyelenggara']}}</td>
                                <td>{{ $item['nama'] }}</td>
                                <td>{{ $item['harga'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($item['tanggal'])->format('d F Y') }}</td>
                                <td>{{ $item['jam'] }} WIB</td>
                                <td>{{ $item['lokasi'] }} </td>
                                <td>{{ $item['deskripsi'] }} </td>
                                <td>{{ $item['jumlah'] }} </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ url('editEvent/'.$item->id) }}" class="btn btn-outline-warning" onclick="return confirm('Are you sure you want to update?')">Update</a>
                                        <form id="delete-form-{{ $item->id }}" action="{{ route('konser.destroy', $item->id) }}" class="d-inline" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                BELUM ADA DATA EVENT
                            </div>
                            @endforelse
                        </tbody>
                      </table>
                </div>
        </div>
    </div>


    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity= "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin= "anonymous">
    </script>
</body>
</html>