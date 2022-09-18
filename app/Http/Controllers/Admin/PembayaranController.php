<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use PDF;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $pembayaran = Pembayaran::all(); // Mengambil semua isi tabel
        $paginate = Pembayaran::orderBy('id', 'asc')->paginate(3);
        return view('admin.pembayaran.index', ['pembayaran' => $pembayaran,'paginate'=>$paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembayaran.create');
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
            // 'tanggal' => 'required',
            'bayar' => 'required',
            'keterangan' => 'required',
        ]);
        
        //fungsi eloquent untuk menambah data
        Pembayaran::create([
            'id_penjualan' => $request->id_penjualan,
            'tanggal' => Carbon::now(),
            'bayar' => $request->bayar,
            'keterangan' => $request->keterangan,
        ]);
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->to('/admin/pembayaran')
            ->with('success', 'Pembayaran Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\response
     */
    public function show($id_pembayaran)
    {
        $pembayaran = Pembayaran::where('id_pembayaran', $id_pembayaran)->first();
        return view('pembayaran.detail', compact('Pembayaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pembayaran)
    {
        $pembayaran = DB::table('pembayaran')->where('id_pembayaran', $id_pembayaran)->first();
        return view('pembayaran.edit', compact('Pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pembayaran)
    {
        //melakukan validasi data
        $request->validate([
            'id_pembayaran' => 'required',
            'id_penjualan' => 'required',
            'totaltrf' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
           Pembayaran::where('id_pembayaran', $id_pembayaran)
                ->update([
                    'id_pembayaran' => $request->id_pembayaran,
                    'id_penjualan' => $request->id_penjualan,
                    'totaltrf' => $request->totaltrf,
                    'tanggal' => $request->tanggal,
                    'keterangan' => $request->tanggal,
            ]);
        //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('pembayaran.index')
                ->with('success', 'Pembayaran Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pembayaran)
    {
        //fungsi eloquent untuk menghapus data
        Pembayaran::where('id_pembayaran', $id_pembayaran)->delete();return redirect()->route('pembayaran.index')
            -> with('success', 'Pembayaran Berhasil Dihapus');       
    }
    
    public function cetak_laporan()
    {
        $pembayaran = Pembayaran::all();
        // return view('admin.pembayaran.laporan',['pembayaran' => $pembayaran]);
        $pdf = PDF::loadview('admin.pembayaran.laporan', ['pembayaran' => $pembayaran]);
        return $pdf->stream();
    }
}
