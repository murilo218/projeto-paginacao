<?php

namespace App\Models;

use Database\Factories\ProdutoModelFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    use HasFactory;

    protected $table = 'produtos'; 

    protected $fillable = [
        'name',
        'price',
        'expiration_date',
    ];

    protected static function newFactory()
    {
        return ProdutoModelFactory::new();
    }
}