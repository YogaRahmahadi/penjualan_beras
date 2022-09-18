<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beras;
class HomeController extends Controller
{
    public function index(){
        $data = Beras::all();
        return view('user.home.index', compact([
            'data'
        ]));
    }
}
