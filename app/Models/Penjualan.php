<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pelanggan_id',
        'tanggal',
        'total_harga',
        'total_bayar',
        'kembalian',
        'status_member',
        'user_id',
    ];

    // protected $attributes = [
    //     'total' => 'total_harga',  // Ganti 'total' di model jadi 'total_harga' di database
    // ];


    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function penjualanDetails()
    {
        return $this->hasMany(PenjualanDetail::class);
    }

}
