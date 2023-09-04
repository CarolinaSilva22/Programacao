<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class DetalhesProduto extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'produto_detalhes';
    protected $fillable = ['produto_id', 'validade', 'peso'];
}
