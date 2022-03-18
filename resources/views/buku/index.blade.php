@extends('../layout/main')

@section('container')
<h2 class="mt-4 mb-3 text-center"><b>Data Buku</b></h2>
<br>
<a href="{{ route('buku.create') }}" class="btn btn-danger mb-2">Tambah Buku</a>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-danger">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tahun Terbit</th>
                                <th scope="col">Katagori</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buku as $bk)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td> {{ $bk->judul_buku }}</td>
                                    <td> {{ $bk->pengarang}}</td>
                                    <td> {{ $bk->penerbit }}</td>
                                    <td> {{ $bk->tahun_terbit }}</td>
                                    <td> {{ $bk->kategori }}</td>
                                    <td class="text-center">
                                    <form action="">
                                            <a href="{{ url ('buku/'.$bk->id.'/edit') }}" class="badge badge-success bg-primary d-inline text-decoration-nonehil" >Edit</a>
                                        </form> 
                                        <form action="{{ url ('buku/'.$bk->id) }}" method="POST" class="d-inline">
                                            @csrf 
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-sm border-0" onclick="return confirm ('Yakin untuk mengahapus ?')">
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