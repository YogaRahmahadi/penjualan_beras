<?php

namespace App\Http\Controllers\Admin;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $penjualan = Penjualan::all(); // Mengambil semua isi tabel
        $paginate = Penjualan::orderBy('id', 'asc')->paginate(3);
        return view('admin.penjualan.index', ['penjualan' => $penjualan,'paginate'=>$paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjualan.create');
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
            'id_penjualan' => 'required',
            'id_keranjang' => 'required',
            'tglpenjualan' => 'required',
            'totalongkir' => 'required',
            'totalharga' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        Penjualan::create($request->all());//jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('penjualan.index')
            ->with('success', 'Penjualan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\response
     */
    public function show($id_penjualan)
    {
        $penjualan = Penjualan::where('id', $id_penjualan)->first();
        return view('penjualan.detail', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_penjualan)
    {
        $penjualan = DB::table('penjualan')->where('id', $id_penjualan)->first();
        return view('admin.penjualan.edit', compact('penjualan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_penjualan)
    {
        //melakukan validasi data
        $request->validate([
            'id_keranjang' => 'required',
            'tglpenjualan' => 'required',
            'totalongkir' => 'required',
            'totalharga' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
           Penjualan::where('id', $id_penjualan)
                ->update([
                    'id_penjualan' => $request->id_penjualan,
                    'id_keranjang' => $request->id_keranjang,
                    'tglpenjualan' => $request->tglpenjualan,
                    'totalongkir' => $request->totalongkir,
                    'totalharga' => $request->totalharga,
            ]);
        //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('admin.penjualan.index')
                ->with('success', 'Pengjualan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_penjualan)
    {
        //fungsi eloquent untuk menghapus data
        Penjualan::where('id_penjualan', $id_penjualan)->delete();return redirect()->route('penjualan.index')
            -> with('success', 'Penjualan Berhasil Dihapus');       
    }
}
