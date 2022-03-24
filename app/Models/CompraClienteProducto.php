<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraClienteProducto extends Model
{
    use HasFactory;

    protected $table = 'compora_cliente_producto';
    public $timestamps = false;
}
