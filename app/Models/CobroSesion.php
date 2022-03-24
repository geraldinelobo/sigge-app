<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CobroSesion extends Model
{
    use HasFactory;

    protected $table = 'cobro_sesion';
    public $timestamps = false;
}
