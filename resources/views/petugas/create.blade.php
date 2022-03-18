@extends('../layout/main')

@section('container')
<h2 class="mt-4 mb-3 text-center"><b>Tambah Petugas</b></h2>
<br>

<form action="/petugas" method="POST">
    @csrf
    <div class="form-group mb-3">
    <label for="nama_petugas">Nama Petugas</label>
    <input type="text" class="form-control" id="nama_petugas"
            name="nama_petugas" placeholder="Nama Petugas" 
            value="{{ old('nama_petugas') }}">
    </div>
    <div class="form-group mb-3">
        <label for="Alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" 
            name="alamat" placeholder="Alamat Anggota" 
            value="{{ old('alamat') }}">
    </div>
    <div class="form-group mb-3">
        <label for="NO_telp">NO_telp</label>
        <input type="text" class="form-control" id="no_telp" 
            name="no_telp" placeholder="No Telp" 
            value="{{ old('no_telp') }}">
    </div>
    <button type="submit" class="btn-lg btn-primary">Simpan</button>
    </form>
    </div>
    </div>
</main>
@endsection