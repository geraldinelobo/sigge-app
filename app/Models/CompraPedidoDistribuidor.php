<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraPedidoDistribuidor extends Model
{
    use HasFactory;

    protected $table = 'compra_pedido_distribuidor';
    public $timestamps = false;
}
