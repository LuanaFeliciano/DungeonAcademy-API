<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Perguntas extends Model
{
    protected $table = 'perguntas';
    protected $primaryKey = "id";
    public $timestamps = false;




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['sala', 'tema', 'dificuldade', 'descricao', 'pontuacao'];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
       // 'password',
    ];
}

