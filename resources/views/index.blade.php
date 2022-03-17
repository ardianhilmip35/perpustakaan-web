@extends('/layout/main')

@section('container')
<h2 class="mt-4 mb-3 text-center"><b>Dashboard</b></h2>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Selamat Datang di Aplikasi Sistem Informasi Perpustakaan</h5>
                <p class="card-text">
                    Aplikasi ini dibuat untuk memenuhi tugas akhir mata kuliah Sistem Informasi Perpustakaan.
                    Aplikasi ini dibuat dengan menggunakan Laravel Framework.
                </p>
                <a href="/buku" class="btn btn-primary">Lihat Buku</a>
            </div>
        </div>
    </div>
@endsection