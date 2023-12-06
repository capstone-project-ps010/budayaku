<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class budayaku extends Model
{
    use HasFactory;

    protected $table = 'budayaku';
    protected $primaryKey = 'id_budaya';

    protected $fillable = [
        'pulau',
        'suku',
        'gambar',
        'deskripsi',
        'senjata',
        'gambar_rumah_adat',
        'rumah_adat',
        'gambar_rumah_adat',
        'pakaian_adat',
        'gambar_pakaian_adat',
        'seni',
        'gambar_seni',
        'bahasa'
    ];

  
}
