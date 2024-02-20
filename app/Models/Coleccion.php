<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coleccion extends Model
{
    use HasFactory;

    protected $table = 'coleccion';

    protected $fillable = [
        'coleccion'
    ];

    public function coleccion()
{
    return $this->belongsTo(Coleccion::class, 'idColeccion', 'id');
}
}
