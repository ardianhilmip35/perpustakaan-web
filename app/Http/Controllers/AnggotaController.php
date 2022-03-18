<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Anggota;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', compact('anggota'), [
            'title' => 'Mahasiswa',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota.create', [
            'title' => 'Tambah Mahasiswa',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Anggota::create($request->all());
        return redirect('anggota')->with('msg', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.edit', compact('anggota'), [
            'title' => 'Edit Mahasiswa',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $anggota = Anggota::find($id);
        $anggota->NIM = $request->NIM;
        $anggota->Nama_Anggota = $request->Nama_Anggota;
        $anggota->Jenis_Kelamin = $request->Jenis_Kelamin;
        $anggota->Alamat = $request->Alamat;
        $anggota->No_Telp = $request->No_Telp;
        $anggota->save();

        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = Anggota::find($id);
        $anggota->delete();
        return redirect('anggota')->with('msg', 'Data Berhasil Dihapus');
    }
}
