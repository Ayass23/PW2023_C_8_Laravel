<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembelian</title>
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
                @if (Auth::user()->role == 'admin')
                  <li class="nav-item">
                    <a class="nav-link  " href="{{ url('home') }}">Event</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " href="{{ url('merchandise') }}">Merchandise</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " href="{{ route('adminDashboard') }}">Make Event</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " href="{{ url('profile') }}">Profile</a>
                  </li>
                @else
                <li class="nav-item">
                  <a class="nav-link  " href="{{ url('home') }}">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('merchandise') }}">Merchandise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('profile') }}">Profile</a>
                </li>
                @endif 
                  
              </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('actionLogout') }}"><i class=""></i> Logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="container my-4 mb-5">
        <div class="row">
            <div class="col-md-8"> 
                <div class="card">
                    <div class="container p-2">
                        <img src="{{ asset($konser->poster) }}" class="card-img-top rounded" alt="" style="height: 300px">
                    </div>
                    
                    <div class="card-body">
                        <h2 class="card-title text-success">{{$konser->nama}}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="container text-center" style="border-bottom: 1px solid rgb(151, 151, 151)">
                            <h2 class="card-title text-success">Detail Konser</h2>
                        </div>
                        <div class="container mt-3 d-flex align-items-center">
                            <img style="width: 36px" src="{{ asset('images/calendar_1.png') }}" alt="">
                            <p class="card-text mx-2 text-success">{{ \Carbon\Carbon::parse($konser['tanggal'])->format('d F Y') }}</td></p>
                        </div>
                        <div class="container mt-3 d-flex align-items-center">
                            <img style="width: 36px" src="{{ asset('images/time_1.png') }}" alt="">
                            <p class="card-text mx-2 text-success">{{$konser->jam}} WIB</p>
                        </div>
                        <div class="container mt-3 d-flex align-items-center">
                            <img style="width: 36px" src="{{ asset('images/location_1.png') }}" alt="">
                            <p class="card-text mx-2 text-success">{{$konser->lokasi}}</p>
                        </div>
                        <div class="container mt-3 d-flex align-items-start">
                            <img style="width: 24px" src="{{ asset('images/stok.png') }}" alt="">
                            <p class="card-text mx-2 text-secondary" style="font-size:16px">{{ $konser->jumlah }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-outline-success btn-pill" id="description-button">Deskripsi</button>
                        <button class="btn btn-outline-success btn-pill" id="ticket-button">Tiket</button>
                        <div id="content">
                            <div id="description" style="display: none" class="mb-3">
                                <div class="container mt-3">
                                    <h5 class="text-success">Deskripsi Event</h5>
                                    <p>
                                        {{$konser->deskripsi}}
                                    </p>
                                </div>
                            </div>
                            <div id="ticket" style="display: none">
                                    <div class="card mt-3 shadow-lg">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between ">
                                                <h3 class="card-title text-success mb-0">{{ $konser['nama'] }}</h3>
                                                @if($konser['jumlah']!=0)
                                                <button type="button" class="btn btn-outline-success" disabled><strong>On Sale</strong></button>
                                                @else
                                                <button type="button" class="btn btn-outline-danger" disabled>Sold out</button>
                                                @endif
                                            </div>
                                            <hr class="mb-1">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <p class="card-text mb-0 text-secondary">Harga :</p>
                                                    <h3 class="text-success"><strong>{{ $konser['harga'] }}</strong></h3>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <button class="btn btn-success" id="pilihButton">Pilih</button>
                                                    <div id="addRemoveButtons" style="display: none;">
                                                        <div class="container m-0 p-0 mt-1 d-flex justify-content-around">
                                                            <div class="d-flex align-self-center">
                                                                <button class="btn btn-outline-success p-0" style="width: 2rem; height: 2rem" id="minusButton">-</button>
                                                            </div>
                                                            <div class="d-flex align-self-center">
                                                                <span id="quantity">1</span>
                                                            </div>
                                                            <div class="d-flex align-self-center">
                                                                <button class="btn btn-outline-success p-0" style="width: 2rem; height: 2rem" id="plusButton">+</button>
                                                            </div>
                                                        </div>
                                                        <div class="container mt-4 p-0">
                                                            <button class="btn btn-outline-danger" id="cancelButton">Cancel</button>
                                                            <form action="{{ url('pembayarantiket') }}" method="get" class="d-inline">
                                                                @csrf
                                                                <input type="hidden" name="konser_id" value="{{ $konser->id }}">
                                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id_user }}">
                                                                <input type="hidden" name="quantity" id="quantityInput"
                                                                    value="1">
                                                                    <button class="btn btn-success" id="beliButton" type="submit">Beli</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous">
    </script>
    
    <script>
        //untuk deskripsi dan tiket agar berubah isi
        document.getElementById("description").style.display = "block";
        const descriptionButton = document.getElementById("description-button");
        const ticketButton = document.getElementById("ticket-button");
        const description = document.getElementById("description");
        const ticket = document.getElementById("ticket");

        descriptionButton.addEventListener("click", () => {
            description.style.display = "block";
            ticket.style.display = "none";
        });

        ticketButton.addEventListener("click", () => {
            description.style.display = "none";
            ticket.style.display = "block";
        });

        // Untuk button pilih bisa berubah menjadi input value
        document.getElementById("pilihButton").addEventListener("click", function () {
        document.getElementById("pilihButton").style.display = "none";
        document.getElementById("addRemoveButtons").style.display = "block";
        });

        document.getElementById("cancelButton").addEventListener("click", function () {
            document.getElementById("pilihButton").style.display = "block";
            document.getElementById("addRemoveButtons").style.display = "none";
        });

        //perhitungan quantity
        document.addEventListener("DOMContentLoaded", function() {
                // Get the plus and minus buttons
                const plusButton = document.getElementById("plusButton");
                const minusButton = document.getElementById("minusButton");
                const quantityElement = document.getElementById("quantity");
                const quantityInput = document.getElementById("quantityInput");

                // Initialize quantity
                let quantity = parseInt(quantityInput.value);

                // Add a click event listener to the plus button
                plusButton.addEventListener("click", function() {
                    quantity++;
                    updateQuantity();
                });

                // Add a click event listener to the minus button
                minusButton.addEventListener("click", function() {
                    if (quantity > 1) {
                        quantity--;
                        updateQuantity();
                    }
                });

                // Function to update quantity in the DOM and hidden input
                function updateQuantity() {
                    quantityElement.textContent = quantity;
                    quantityInput.value = quantity;
                }
            });

    </script>

</body>
</html>
