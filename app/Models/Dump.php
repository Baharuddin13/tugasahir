<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dump extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaksi_id',
        'menu_id',
        'jumlah',
        'harga',
    ];

    // untuk relasikan tabel menu dengan tabel dump
    public function menu()
    {
        return $this->belongsTo('App\Models\Menu', 'menu_id', 'id');
    }

    // relasi transaksi
    public function transaksi()
    {
        return $this->belongsTo('App\Models\Transaksi', 'transaksi_id', 'id');
    }
}
