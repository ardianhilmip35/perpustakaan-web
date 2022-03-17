<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman {{ $title }}</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger ">
        <div class="container">
          <a class="navbar-brand" href="#"><b>Si Perpus</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <b><a class="nav-link text-light" aria-current="page" href="/">Home</a></b>
              </li>
              <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle bg-danger border-danger" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <b>Data Perpustakaan</b> 
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="/petugas">Petugas</a></li>
                  <li><a class="dropdown-item" href="/buku">Buku</a></li>
                  <li><a class="dropdown-item" href="{{ route('anggota.index') }}">Mahasiswa</a></li>
                </ul>
              </div>
              <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle bg-danger border-danger text-light" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <b>Transaksi</b>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="/peminjaman">Peminjaman</a></li>
                  <li><a class="dropdown-item" href="/pengembalian">Pengembalian</a></li>
                </ul>
              </div>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container mt-4">
        @yield('container')
    </div>


  </body>
</html>