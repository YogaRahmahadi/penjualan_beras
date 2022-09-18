<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table='penjualan'; 
    protected $primaryKey = 'id_penjualan'; 
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'user_id' ,
        'beras_id' ,
        'date_order',
        'total',
    ];

    public function beras(){
        return $this->belongsTo(Beras::class, 'beras_id', 'id');
    }
    public function users(){
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
    public function pembayaran(){
        return $this->hasOne(pembayaran::class, 'id_pembayaran', 'id');
    }
}
