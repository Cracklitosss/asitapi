<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenProducto extends Model
{
    use HasFactory;

    protected $table = 'imagen_producto';

    protected $primaryKey = 'id_imagen';

    public $timestamps = true;

    public function producto()
{
    return $this->belongsTo(Producto::class, 'id_producto');
}

}
