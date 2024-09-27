<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    use HasFactory;
    protected $table='pemain';
    protected $fillable=[ 
        'Nama_pemain', 
        'posisi',
        'No_Punggung',
        'Asal_Klub',
    ];
}
