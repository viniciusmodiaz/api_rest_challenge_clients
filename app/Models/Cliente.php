<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class cliente extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nome',
        'telefone',
        'cpf',
        'placa_do_carro'
    ];

}
