<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <- ini yang penting!
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nomor_hp', 'point', 'status'];

    public function penjualans()
    {
        return $this->hasMany(Penjualan::class);
    }
}
