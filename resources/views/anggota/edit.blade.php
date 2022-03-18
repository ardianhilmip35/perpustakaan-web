@extends('../layout/main')

@section('container')
<h2 class="mt-4 mb-3 text-center"><b>Edit Mahasiswa</b></h2>
<br>

<form action="{{  url ('anggota/'.$anggota->id)  }}" method="POST" >
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-group mb-3">
    
    
        <label for="NIM">NIM</label>
        
        
        <input type="text" class="form-control" id="NIM" 
        
        
                            name="NIM" placeholder="NIM" 
        
        
                            value="{{ $anggota->NIM }}" required>
        
        
    </div>
    
    <div class="form-group mb-3">
    
    
    <label for="nama">Nama Anggota</label>
    
    
    <input type="text" class="form-control" id="nama" 
    
    
                        name="Nama_Anggota" placeholder="Nama Anggota" 
    
    
                        value="{{ $anggota->Nama_Anggota }}" required>
    
    
    </div>
    
    
    <div class="form-group mb-3">


        <label for="Jenis Kelamin">Jenis Kelamin</label>
        
        
        <input type="text" class="form-control" id="Jenis_Kelamin" 
        
        
                            name="Jenis_Kelamin" placeholder="Jenis Kelamin" 
        
        
                            value="{{ $anggota->Jenis_Kelamin }}" required>
        
        
    </div>

    
    

    <div class="form-group mb-3">
    
    
        <label for="Alamat">Alamat</label>
        
        
        <input type="text" class="form-control" id="Alamat" 
        
        
                            name="Alamat" placeholder="Alamat Anggota" 
        
         
                            value="{{  $anggota->Alamat }}" required>
        
        
    </div>
    
    
    <div class="form-group mb-3">
    
    
    <label for="No_Telp">No. HP</label>
    
    
    <input type="text" class="form-control" id="No_Telp" 
    
    
                        name="No_Telp" placeholder="NO. HP" 
    
    
                        value="{{  $anggota->No_Telp }}" required>
    
    
    </div>
    
    
    <button type="submit" class="btn-lg btn-primary">Simpan</button>
    
    
    </form>
    
    
    </div>
    
    
    </div>
</main>
@endsection