<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camiseta extends Model
{
    use HasFactory;

    protected $table = 'camisetas';

    protected $fillable = [
        'idColeccion',
        'camiseta',
        'precio',
        'stock',
        'urlFoto'
    ];

    public function camisetas()
    {
        return $this->hasMany(Camiseta::class, 'idCategoria', 'id');
    }

}
