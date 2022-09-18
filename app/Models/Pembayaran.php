<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table='pembayaran'; 
    protected $primaryKey = 'id_pembayaran'; 
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'id_penjualan' ,
        'bayar',
        'tanggal' ,
        'keterangan' ,
    ];

    public function penjualan(){
        return $this->hasOne(penjualan::class, 'id_penjualan', 'id');
    }
}
