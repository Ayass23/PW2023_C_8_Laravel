<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container">
            <a class="navbar-brand" href="#"><img style="width: 4rem" src="{{ asset('images/GE.png') }}" alt=""></a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-3 "> 
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="{{ url('homepage') }}">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Make Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Profile</a>
                    </li>
                </ul>
                <div>
                    
                </div>
                
            </div>
        </div>
    </nav>


    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card centered-card shadow-lg d-flex justify-content-center p-4" style="width: 70%; height: 50%;">
            <div class="row ">
                <div class="col-md-4 d-flex justify-content-center ">
                    <img src="{{ asset('images/profile.jpg') }}" class="rounded-circle shadow-lg" style=" height:13rem; width:13rem;" alt="">
                </div>
                <div class="col-md-8 p-2 d-flex justify-content-center align-items-center ">
                    <div class="card p-4 border-success" style="width: 90%; height: 90%;">
                        <div class="container d-flex justify-content-center">
                                <button>My Profile</button>
                                <button>My Ticket</button>
                            
                        </div>
                        <div>
                            <h5>nama</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
        let quantity = 1;

        // Get the plus and minus buttons
        const plusButton = document.getElementById("plusButton");
        const minusButton = document.getElementById("minusButton");
        const quantityElement = document.getElementById("quantity");

        // Add a click event listener to the plus button
        plusButton.addEventListener("click", function () {
            quantity++;
            quantityElement.textContent = quantity;
        });

        // Add a click event listener to the minus button
        minusButton.addEventListener("click", function () {
            if (quantity > 1) {
                quantity--;
                quantityElement.textContent = quantity;
            }
        });
</script>
</body>

</html>
