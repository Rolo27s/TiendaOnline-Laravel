<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    // protected $table = 'carrito'; // Posible error

    public function catalogo()
    {
        return $this->belongsTo(Catalogo::class);
    }
}
