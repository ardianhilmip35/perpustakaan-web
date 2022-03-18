@extends('../layout/main')

@section('container')
<h2 class="mt-4 mb-3 text-center"><b>Data Petugas</b></h2>
<br>
<a href="{{ route('petugas.create') }}" class="btn btn-danger mb-2">Tambah Petugas</a>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-danger">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Petugas</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No_Telp</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($petugas as $ptg)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    {{-- <td> {{ $ptg->id }}</td> --}}
                                    <td> {{ $ptg->nama_petugas}}</td>
                                    <td> {{ $ptg->alamat }}</td>
                                    <td> {{ $ptg->no_telp }}</td>
                                    <td class="text-center">
                                        <form action="">
                                            <a href="{{ url ('petugas/'.$ptg->id.'/edit') }}" class="badge badge-success bg-primary d-inline text-decoration-nonehil" >Edit</a>
                                        </form> 
                                        <form action="{{ url ('petugas/'.$ptg->id) }}" method="POST" class="d-inline">
                                            @csrf 
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="badge badge-danger border-0 bg-danger" onclick="return confirm ('Yakin untuk mengahapus ?')">
                                                Delete<span data-feather="x-circle"></span></button>
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