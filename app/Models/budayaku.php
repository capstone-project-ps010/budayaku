<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class budayaku extends Model
{
    use HasFactory;

    protected $table = 'budayaku';
    protected $id = 'id_budaya';

    protected $fillable = [
        'pulau',
        'suku',
        'gambar',
        'deskripsi',
        'senjata',
        'rumah_adat',
        'pakaian_adat',
        'seni',
        'bahasa'
    ];

  
}
