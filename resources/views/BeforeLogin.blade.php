<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center bg-white" style=" height: 100vh; width:100vh;">
      <div class="card bg-success d-flex align-self-center justify-content-center" style="width: 80%; height:80%;">
          <div>
            <img style="width: 50%;" src="{{ asset('images/GE.png') }}" alt="">
          </div>
      </div>
        <div class="card text-white bg-white" style="width: 80%; height:80%;">
          <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Pemesan</label>
                <input type="email" class="form-control mt-2 " id="exampleFormControlInput1" placeholder="Masukan Nama Lengkap">
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group mt-4">
                        <label for="identitasDropdown">Identitas</label>
                        <select class="form-control-sm mt-2" id="identitasDropdown">
                            <option value="ktp">KTP</option>
                            <option value="sim">SIM</option>
                            <option value="passport">Passport</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group mt-4">
                        <label for="nomorIdentitas"></label>
                        <input type="text" class="form-control mt-2" id="nomorIdentitas" placeholder="Masukan Nomor Identitas">
                    </div>
                </div>
            </div>
            <div class="form-group mt-4">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control mt-2" id="exampleFormControlInput1" placeholder="name@gmail.com">
            </div>
            <div class="form-group mt-4 mb-3">
                <label for="exampleFormControlInput1">No. Whatsapp</label>
                <input type="email" class="form-control mt-2" id="exampleFormControlInput1" placeholder="081xxxxxxxx">
            </div>
        </form>
            
          
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="
