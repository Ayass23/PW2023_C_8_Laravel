<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "utf-8">
    <meta name= "viewport" content= "width=device-width, initial-scale=1">
    
    <title>Login</title>
   
    <!-- Fonts -->
    <link rel= "preconnect" href= "https://fonts.bunny.net">
    <link href= "https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
    rel= "stylesheet"/>
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel= "stylesheet" integrity= "sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin= "anonymous">

</head>

<body class= "">
<style>
        body {
            font-family: Roboto, Helvetica, Arial, sans-serif;
        }

        section {
            width: 100%;
            min-height: 100vh;
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient( #44006b, #ad1fff);
            overflow: hidden;
            margin-left: 100px;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient( #44006b, #ad1fff);
            overflow: hidden;
        }

        .bg-glass {
            background-color: hsla(0, 11%, 95%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }
    </style>

<div class="text-bg-success p-3" style= "height: 100%;">
    <div class= "container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class= "row gx-lg-5 align-items-center mb-5">
            <div class= "col-lg-6 mb-5 mb-lg-0" style= "z-index: 10; height: 100%;">
                <h1 class= "my-5 display-5 fw-bold ls-tight">
                    <img src="{{ asset('images/logoGetix.png') }}" alt="Logo" style="height: 80px;"> 
                </h1>
                </div>

                <div class= "col-lg-6 mb-5 mb-lg-0 position-relative" style="height: 100%;">
                    <div class= "card bg-glass" style="height: 100%;">
                        <div class="card-body px-4 py-5 px-md-5" style="height: 100%;">
                            <form class="form" action="{{ url('ticket') }}">
                                @csrf
                                <div>
                                    <h1 class="mb-3 text-center" style="font-weight: bold; color: Green">Login</h1>
                                </div>

                                <!-- Nama input -->
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nama Pegawai" required/>
                                    <label for="floatingInput">Username</label>
                                </div>

                                <!-- Password -->
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required/>
                                    <label for="floatingPassword">Password</label>
                                </div>

                                <!-- Submit button -->
                                <div style="display: flex; justify-content: center;">
                                    <button type="submit" style="width: 100%;" class="btn btn-success btn-block mb-2 mt-3" onclick="window.location='{{ url('admindashboard') }}'">
                                        Login
                                    </button>
                                </div>

                                <hr> 
                                    <p style="text-align: center;">Do not Have account? <a href="{{ url('register') }}">Register</a></p>
                                </hr> 
                                
                                <div>
                                

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity= "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin= "anonymous">
    </script>
</body>
</html>