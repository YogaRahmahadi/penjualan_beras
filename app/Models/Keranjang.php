<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table='keranjang'; 
    protected $primaryKey = 'id_keranjang'; 
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'user_id' ,
        'id_beras' ,
        'totalharga',
        'jumlah' ,
    ];

    public function beras(){
        return $this->belongsTo(Beras::class, 'id_beras', 'id');
    }
    public function users(){
        return $this->belongsTo(Users::class, 'id_users', 'id');
    }
}