@extends('../layout/main')

@section('container')
<h2 class="mt-4 mb-3 text-center"><b>Edit Mahasiswa</b></h2>
<br>
<form action="{{  url ('petugas/'.$petugas->id)  }}" method="POST" >
    @csrf
    <div class="form-group mb-3">
    <label for="nama_petugas">Nama Petugas</label>
    <input type="text" class="form-control" id="nama_petugas" 
        name="nama_petugas" placeholder="Nama Petugas" 
        value="{{ $petugas->nama_petugas}}" required>
    </div>
    <div class="form-group mb-3">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" 
            name="alamat" placeholder="Alamat Petugas" 
            value="{{  $petugas->alamat }}" required>
    </div>
    <div class="form-group mb-3">
    <label for="no_telp">No. HP</label>
    <input type="text" class="form-control" id="no_telp" 
        name="no_telp" placeholder="NO. HP" 
        value="{{  $petugas->no_telp }}" required>
    </div>
    <button type="submit" class="btn-lg btn-primary">Simpan</button>
    </form>
    </div>
    </div>
</main>
@endsection