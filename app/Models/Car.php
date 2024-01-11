<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // protected $guarded = ['id', 'created_at', 'update_at'];

    
    protected $table = 'cars';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_mobil',
        'harga_sewa',
        'gambar',
        'bahan_bakar',
        'jumlah_kursi',
        'transmisi',
        'status',
        'deskripsi',
        'p3k',
        'charger',
        'audio',
        'ac',
    ];
}
