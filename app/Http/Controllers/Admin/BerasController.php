<?php

namespace App\Http\Controllers\Admin;

use App\Models\Beras;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class BerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beras = Beras::all(); // Mengambil semua isi tabel
        $paginate = Beras::orderBy('id', 'asc')->paginate(3);
        return view('admin.produk.index', ['beras' => $beras,'paginate'=>$paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'nama_beras' => 'required',
            'hargaberas' => 'required',
            'berat' => 'required',
            'keterangan' => 'required',
            'photo' => 'required',
        ]);

        if($request->file('photo')){
            $image_name = $request->file('photo')->store('beras', 'public');
        }

        //fungsi eloquent untuk menambah data
        Beras::create([
            'nama_beras' => $request->nama_beras,
            'hargaberas' => $request->hargaberas,
            'berat' => $request->berat,
            'keterangan' => $request->keterangan,
            'photo' => $image_name,
        ]);
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->to('/admin/produk')
            ->with('success', 'Produk Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_beras)
    {
        $beras = Beras::where('id_beras', $id_beras)->first();
        return view('beras.detail', compact('Beras'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_beras)
    {
        $beras = DB::table('beras')->where('id', $id_beras)->first();
        return view('admin.produk.edit', compact('beras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_beras)
    {
        //melakukan validasi data
        $request->validate([
            'nama_beras' => 'required',
            'hargaberas' => 'required',
            'berat' => 'required',
            'keterangan' => 'required',
            // 'photo' => 'required',
        ]);
        $image_name = null;
        if($request->file('photo')){
            $image_name = $request->file('photo')->store('beras', 'public');
        }
        
        $beras = Beras::where('id', $id_beras)->first();
        //fungsi eloquent untuk mengupdate data inputan kita
            Beras::where('id', $id_beras)
                ->update([
                    'nama_beras' => $request->nama_beras,
                    'hargaberas' => $request->hargaberas,
                    'berat' => $request->berat,
                    'keterangan' => $request->keterangan,
                    'photo' => ($image_name == null) ? $beras->photo : $image_name,
            ]);

        //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->to('/admin/produk')
                ->with('success', 'Produk Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_beras)
    {
        //fungsi eloquent untuk menghapus data
        Beras::where('id', $id_beras)->delete();
        return redirect()->to('/admin/produk')
            -> with('success', 'Produk Berhasil Dihapus');
    }
}
