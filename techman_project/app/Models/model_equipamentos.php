<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_equipamentos extends Model
{
    use HasFactory;

    public $table = 'equipamento';

    protected $fillable = [
        'foto_equipamento',
        'nome_equipamento',
        'descricao_equipamento',
        'switch_equipamento'
    ];
}
