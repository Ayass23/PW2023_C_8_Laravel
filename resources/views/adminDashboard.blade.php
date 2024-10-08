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
        
        <div class="container">
            <div class="row align-items-center justify-content-around mt-3 ">
                <h1>Dashboard</h1>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="d-flex justify-content-center m-1">
                                <div class="text-center mt-2">
                                    <p class="mb-3" style="font-size: 36px">Total Event</p>
                                    <p style="font-size: 36px"><strong>{{$totalKonser}}</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="d-flex justify-content-center m-1">
                                <div class="text-center mt-2">
                                    <p class="mb-3" style="font-size: 36px">Total Merchandise</p>
                                    <p style="font-size: 36px"><strong>{{$totalMerch}}</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="d-flex justify-content-center m-1">
                                <div class="text-center mt-2">
                                    <p class="mb-3" style="font-size: 36px">Total Tiket Terjual</p>
                                    <p style="font-size: 36px"><strong>{{$totalTiketTerjual}}</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="d-flex justify-content-center m-1">
                                <div class="text-center mt-2">
                                    <p class="mb-3" style="font-size: 34px">Total Merchandise Terjual</p>
                                    <p style="font-size: 36px"><strong>{{$totalMerchanTerjual}}</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h1 class="mt-4">Detail Event</h1>
                <table class="table m-3">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Event</th>
                            <th>Tanggal</th>
                            <th>Lokasi</th>
                            <th>Harga</th>
                            <th>Stok Tiket</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($konser as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><img class="gambarTransaksi" src="{{ asset($item->poster)
                            }}" alt="" style="width: 300px"></td>
                            <td>{{ $item['nama'] }}</td>
                            <td>{{ \Carbon\Carbon::parse($item['tanggal'])->format('d F Y') }}</td>
                            <td>{{ $item['lokasi'] }}</td>
                            <td>{{ $item['harga'] }}</td>
                            <td>{{ $item['jumlah'] }}</td>
                            <td>
                                <p class="ms-1"> 
                                @if ($item['jumlah'] != 0)
                                    <span class="badge bg-success">Available</span>
                                @else
                                    <span class="badge bg-secondary">Unavailable</span>
                                @endif
                                </p>
                            <td>
                            
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            DBELUM ADA DATA EVENT
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