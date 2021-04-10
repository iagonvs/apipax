<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloProduto extends Model
{
    use HasFactory;

    protected $table = 'modelo_produtos';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
