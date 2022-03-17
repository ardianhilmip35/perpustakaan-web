@extends('../layout/main')

@section('container')
<h2 class="mt-4 mb-3 text-center"><b>Data Mahasiswa</b></h2>
<br>
<a href="{{ route('anggota.create') }}" class="btn btn-danger mb-2">Tambah Mahasiswa</a>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-danger">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nim</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">No. hp</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($anggota as $agt)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td> {{ $agt->NIM }}</td>
                                    <td> {{ $agt->Nama_Anggota}}</td>
                                    <td> {{ $agt->Jenis_Kelamin }}</td>
                                    <td> {{ $agt->Alamat }}</td>
                                    <td> {{ $agt->No_Telp }}</td>
                                    <td class="text-center">
                                        <form action="{{ url ('anggota/'.$agt->id) }}" method="POST" class="d-inline">
                                            @csrf 
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="badge badge-danger border-0" onclick="return confirm ('Yakin untuk mengahapus ?')">
                                                delete<span data-feather="x-circle"></span></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection