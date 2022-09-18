<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\Keranjang;
use App\Models\Penjualan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        $data = Penjualan::with('beras')->get(); 
        // dd($data);
        return view('user.orders.index', compact([
            'data'
        ]));
    }

    public function store(Request $request, $id)
    {
        $row = Keranjang::where('user_id', Auth::user()->id)
                        ->where('id', $id)    
                        ->first();
        //fungsi eloquent untuk menambah data
        Penjualan::create([
            'user_id' => auth()->user()->id,
            'beras_id' => $row->id_beras,
            'date_order' => Carbon::now(),
            'total' => $row->totalharga,
        ]);

        Keranjang::where('user_id', Auth::user()->id)->where('id', $id)->delete();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->to('/cart')
            ->with('success', 'Penjualan Berhasil Ditambahkan');
    }
}
