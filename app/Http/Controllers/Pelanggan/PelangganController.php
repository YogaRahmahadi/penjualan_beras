<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $pelanggan = User::all(); // Mengambil semua isi tabel
        $paginate = User::orderBy('id_pelanggan', 'asc')->paginate(3);
        return view('user.profile.index', ['pelanggan' => $pelanggan,'paginate'=>$paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');
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
            'id_pelanggan' => 'required',
            'nama_pelanggan' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        User::create($request->all());//jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pelanggan.index')
            ->with('success', 'Pelanggan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\response
     */
    public function show($id_pelanggan)
    {
        $pelanggan = User::where('id_pelanggan', $id_pelanggan)->first();
        return view('pelanggan.detail', compact('Pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pelanggan)
    {
        $pelanggan = DB::table('pelanggan')->where('id_pelanggan', $id_pelanggan)->first();
        return view('pelanggan.edit', compact('Pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pelanggan)
    {
        //melakukan validasi data
        $request->validate([
            'id_pelanggan' => 'required',
            'nama_pelanggan' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
           User::where('id_pelanggan', $id_pelanggan)
                ->update([
                    'id_pelanggan' => $request->id_pelanggan,
                    'nama_pelanggan'=> $request->nama_pelanggan,
                    'no_hp'=> $request->no_hp,
                    'alamat'=> $request->alamat,
                    'email'=> $request->email,
            ]);
        //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('pelanggan.index')
                ->with('success', 'Pelanggan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pelanggan)
    {
        //fungsi eloquent untuk menghapus data
        User::where('id_pelanggan', $id_pelanggan)->delete();return redirect()->route('pelanggan.index')
            -> with('success', 'Pelanggan Berhasil Dihapus');       
    }
}
