<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class murids extends Model
{
    use HasFactory;
        protected $primaryKey = 'idmurid';
        protected $fillable = [
        'idmurid',
        'namamurid',
        'jantina',
        'tarikhlahir',
        'kelas',
        'alamat',
        'status',
    ];
    
}
