<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'categoria',
        'marca',
        'fecha_de_creacion',
        'costo',
        'numero_disponible',
        'foto',
    ];
    public function getFotoAttribute($value)
{
    return 'images/' . $value;
}

}