<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PenjualanDetail extends Model
{
    use HasFactory;

    protected $table = 'detail_penjualans'; // ini penting, karena nama tabel kamu bukan default Laravel

    protected $fillable = [
        'penjualan_id',
        'product_id',
        'jumlah',
        'harga',
        'sub_total',
    ];

    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
