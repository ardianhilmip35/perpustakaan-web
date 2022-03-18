@extends('../layout/main')

@section('container')
<h2 class="mt-4 mb-3 text-center"><b>Tambah Buku</b></h2>
<br>

<form action="/buku" method="POST">
    @csrf
    
    <div class="form-group mb-3">
    
    
        <label for="judul_buku">Judul Buku</label>
        
        
        <input type="text" class="form-control" id="judul_buku" 
        
        
                            name="judul_buku" placeholder="Judul Buku" 
        
        
                            value="{{ old('judul_buku') }}">
        
        
    </div>
    
    <div class="form-group mb-3">
    
    
    <label for="pengarang">Pengarang</label>
    
    
    <input type="text" class="form-control" id="pengarang" 
    
    
                        name="pengarang" placeholder="Pengarang" 
    
    
                        value="{{ old('pengarang') }}">
    
    
    </div>
    
    
    <div class="form-group mb-3">


        <label for="penerbit">Penerbit</label>
        
        
        <input type="text" class="form-control" id="penerbit" 
        
        
                            name="penerbit" placeholder="Penerbit" 
        
        
                            value="{{ old('penerbit') }}">
        
        
    </div>

    
    

    <div class="form-group mb-3">
    
    
        <label for="tahun_terbit">Tahun Terbit</label>
        
        
        <input type="text" class="form-control" id="tahun_terbit" 
        
        
                            name="tahun_terbit" placeholder="Tahun Terbit" 
        
        
                            value="{{ old('tahun_terbit') }}">
        
        
    </div>
    
    
    <div class="form-group mb-3">
    
    
    <label for="kategori">Kategori</label>
    
    
    <input type="text" class="form-control" id="Kategori" 
    
    
                        name="kategori" placeholder="Kategori" 
    
    
                        value="{{ old('kategori') }}">
    
    
    </div>
    
    
    <button type="submit" class="btn-lg btn-primary">Simpan</button>
    
    
    </form>
    
    
    </div>
    
    
    </div>
</main>
@endsection