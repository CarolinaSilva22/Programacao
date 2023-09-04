<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class siteContato extends Model
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    protected $table = 'site_contatos';
    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contato','mensagem'];
}
