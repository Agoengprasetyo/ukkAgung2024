<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model BukuModel
use App\Models\BukuModel;

class BukuController extends Controller
{
    //method untuk tampil data buku
    public function bukutampil()
    {
        $databuku = BukuModel::orderby('kode_buku', 'ASC')
            ->paginate(5);

        return view('halaman/view_buku', ['buku' => $databuku]);
    }

    //method untuk tambah data buku
    public function bukutambah(Request $request)
    {
        $this->validate($request, [
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'kategori' => 'required'
        ]);

        BukuModel::create([
            'kode_buku' => $request->kode_buku,
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'kategori' => $request->kategori
        ]);

        return redirect('/buku')->withSuccess('Berhasil Menambahkan data');
    }

    //method untuk hapus data buku
    public function bukuhapus($id_buku)
    {
        $databuku = BukuModel::find($id_buku);
        $databuku->delete();

        return redirect()->back();
    }

    //method untuk edit data buku
    public function bukuedit(Request $request, $id_anggota)
    {
        $data = BukuModel::find($id_anggota);
        $data->update($request->all());
        return back();
    }


}
