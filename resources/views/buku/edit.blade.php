@extends('../layout/main')

@section('container')
<h2 class="mt-4 mb-3 text-center"><b>Edit Buku</b></h2>
<br>

<form action="{{  url ('buku/'.$buku->id)  }}" method="POST" >
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-group mb-3">
    
    
        <label for="judul_buku">Judul</label>
        
        
        <input type="text" class="form-control" id="judul_buku" 
        
        
                            name="judul_buku" placeholder="judul_buku" 
        
        
                            value="{{ $buku->judul_buku }}" required>
        
        
    </div>
    
    <div class="form-group mb-3">
    
    
    <label for="pengarang">Pengarang</label>
    
    
    <input type="text" class="form-control" id="pengarang" 
    
    
                        name="pengarang" placeholder="pengarang" 
    
    
                        value="{{ $buku->pengarang }}" required>
    
    
    </div>
    
    
    <div class="form-group mb-3">


        <label for="penerbit">Penerbit</label>
        
        
        <input type="text" class="form-control" id="penerbit" 
        
        
                            name="penerbit" placeholder="penerbit" 
        
        
                            value="{{ $buku->penerbit }}" required>
        
        
    </div>

    
    

    <div class="form-group mb-3">
    
    
        <label for="tahun_terbit">Tahun terbit</label>
        
        
        <input type="text" class="form-control" id="tahun_terbit" 
        
        
                            name="tahun_terbit" placeholder="tahun_terbit" 
        
         
                            value="{{  $buku->tahun_terbit }}" required>
        
        
    </div>
    
    
    <div class="form-group mb-3">
    
    
    <label for="kategori">Kategori</label>
    
    
    <input type="text" class="form-control" id="tahun_terbit" 
    
    
                        name="tahun_terbit" placeholder="tahun_terbit" 
    
    
                        value="{{  $buku->tahun_terbit}}" required>
    
    
    </div>
    
    
    <button type="submit" class="btn-lg btn-primary">Simpan</button>
    
    
    </form>
    
    
    </div>
    
    
    </div>
</main>
@endsection