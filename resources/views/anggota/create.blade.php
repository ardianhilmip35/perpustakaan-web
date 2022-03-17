@extends('../layout/main')

@section('container')
<h2 class="mt-4 mb-3 text-center"><b>Tambah Mahasiswa</b></h2>
<br>

<form action="/anggota" method="POST">
    @csrf
    
    <div class="form-group mb-3">
    
    
        <label for="NIM">NIM</label>
        
        
        <input type="text" class="form-control" id="NIM" 
        
        
                            name="NIM" placeholder="NIM" 
        
        
                            value="{{ old('NIM') }}">
        
        
    </div>
    
    <div class="form-group mb-3">
    
    
    <label for="nama">Nama Anggota</label>
    
    
    <input type="text" class="form-control" id="nama" 
    
    
                        name="Nama_Anggota" placeholder="Nama Anggota" 
    
    
                        value="{{ old('Nama_Anggota') }}">
    
    
    </div>
    
    
    <div class="form-group mb-3">


        <label for="Jenis Kelamin">Jenis Kelamin</label>
        
        
        <input type="text" class="form-control" id="Jenis_Kelamin" 
        
        
                            name="Jenis_Kelamin" placeholder="Jenis Kelamin" 
        
        
                            value="{{ old('Jenis_Kelamin') }}">
        
        
    </div>

    
    

    <div class="form-group mb-3">
    
    
        <label for="Alamat">Alamat</label>
        
        
        <input type="text" class="form-control" id="Alamat" 
        
        
                            name="Alamat" placeholder="Alamat Anggota" 
        
        
                            value="{{ old('Alamat') }}">
        
        
    </div>
    
    
    <div class="form-group mb-3">
    
    
    <label for="No_Telp">No. HP</label>
    
    
    <input type="text" class="form-control" id="No_Telp" 
    
    
                        name="No_Telp" placeholder="NO. HP" 
    
    
                        value="{{ old('No_Telp') }}">
    
    
    </div>
    
    
    <button type="submit" class="btn-lg btn-primary">Simpan</button>
    
    
    </form>
    
    
    </div>
    
    
    </div>
</main>
@endsection