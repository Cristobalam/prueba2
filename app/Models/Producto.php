<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable = ['codigo', 'name', 'categoria', 'sucursale_id', 'descripcion', 'cantidad', 'precio'];

    public function sucursales()
    {
        return $this->belongsTo(Sucursal::class, 'sucursale_id', 'id');
    }
}
