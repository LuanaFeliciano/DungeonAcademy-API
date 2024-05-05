<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class OpcoesResposta extends Model
{
    protected $table = 'opcoes_resposta';
    protected $primaryKey = "id";
    
    public $timestamps = false;




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['pergunta_id', 'descricao', 'correta'];
    
    protected $foreignKey = 'pergunta_id';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
       // 'password',
    ];
}

