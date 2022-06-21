<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipamentoModel extends Model
{
    use HasFactory;

    protected $table='equipamentos';

    protected $fillaable=[
        'nome',
        'descricao',
        'status',
        'foto',
        'comentario_id'
        
    ];
}
