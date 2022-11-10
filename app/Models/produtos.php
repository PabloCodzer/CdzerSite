<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    protected $table = 'produtos_lista';
    protected $primaryKey ='id';
    protected $fillable   = ['nome', 'codigo', 'descricao', 'valor','data_criado', 'foto'];
}
