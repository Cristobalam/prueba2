<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable = ['codigo', 'nombre', 'categoria', 'sucursale_id', 'descripcion', 'cantidad', 'precio'];

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class, 'sucursale_id');
    }
}
