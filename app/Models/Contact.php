<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_lengkap',
        'email',
        'subjek_email',
        'pesan',
    ];
    use HasFactory;
}
